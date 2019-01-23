<?php

namespace App\Elasticsearch;

class SentenceEs extends AbstractEsBuilder
{
    protected function getIndex()
    {
        return 'sentence';
    }

    public function searchByQuery(?string $searchQuery = null, ?string $category = null, int $currentPage = 1, int $perPage = 10, array $sort = []) {
        $from  = ($currentPage - 1) * $perPage;
        $query = [];

        if ( ! is_null($searchQuery)) {
            $query['must'][]['match']['title'] = $searchQuery;
        }

        if ( ! is_null($category)) {
            $query['must'][]['term']['category'] = $category;
        }

        $result = $this->multiSearch($query, $sort, $from, $perPage);

        return $result['hits'];
    }
}