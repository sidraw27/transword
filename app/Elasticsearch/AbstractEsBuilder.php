<?php

namespace App\Elasticsearch;

use Elasticsearch\ClientBuilder;

abstract class AbstractEsBuilder
{
    private $client;

    public function __construct()
    {
        $this->client = ClientBuilder::create()->setHosts([env('ES_HOST')])->build();
    }

    abstract protected function getIndex();

    private function getParams(array $option)
    {
        $params = [
            'index' => $this->getIndex(),
            'type'  => 'doc'
        ];

        $params = array_merge($params, $option);

        return $params;
    }

    protected function search(array $query, int $from = 0, int $size = 10)
    {
        $params = $this->getParams([
            'body' => [
                'from'  => $from,
                'size'  => $size,
                'query' => $query
            ]
        ]);

        $response = $this->client->search($params);

        return $response;
    }

    protected function multiSearch(array $query, array $sort, int $from = 1, int $size = 10)
    {
        $sortQuery = [];
        foreach ($sort as $field => $order) {
            $sortQuery[] = [$field => ['order' => $order]];
        }

        $params = $this->getParams([
            'body' => [
                'from'  => $from,
                'size'  => $size,
                'sort'  => $sortQuery,
                'query' => [
                    'bool' => $query
                ]
            ]
        ]);

        $response = $this->client->search($params);

        return $response;
    }

    public function searchRandom(array $query, int $size = 10)
    {
        $functionScore = [
            'random_score' => (object)[],
            'boost_mode'   => 'multiply'
        ];

        if ( ! empty($query)) {
            $functionScore['query'] = $query;
        }

        $params = $this->getParams([
            'body' => [
                'size'  => $size,
                'query' => [
                    'function_score' => $functionScore
                ]
            ]
        ]);

        $response = $this->client->search($params);

        return $response;
    }

    public function delete(string $id)
    {
        $params = $this->getParams([
            'id' => $id
        ]);

        $this->client->delete($params);
    }

    public function update(string $id, array $updateData)
    {
        $params = $this->getParams([
            'id'   => $id,
            'body' => [
                'doc' => $updateData,
            ]
        ]);

        $this->client->update($params);
    }

    public function updateBulk(array $ids, array $updateData) {
        $query = [];

        foreach ($ids as $id) {
            $query['body'][] = [
                'update' => [
                    '_id' => $id
                ]
            ];
            $query['body'][] = [
                'doc' => $updateData
            ];
        }

        $params = $this->getParams($query);

        $this->client->bulk($params);
    }

    public function index(array $document, $id = null)
    {
        $params = [
            'body' => $document
        ];

        if ( ! is_null($id)) {
            $params = array_merge($params, ['id' => $id]);
        }

        $params = $this->getParams($params);

        $response = $this->client->index($params);

        return $response;
    }
}
