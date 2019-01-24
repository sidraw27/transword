<?php

namespace App\Elasticsearch;

class SentenceEs extends AbstractEsBuilder
{
    protected function getIndex()
    {
        return 'sentences';
    }

    public function searchByword(string $word = null, int $currentPage = 1, int $perPage = 10) {
        $from  = ($currentPage - 1) * $perPage;

        $query = [
            'match' => [
                'en' => $word
            ]
        ];

        $result = $this->search($query, $from, $perPage);

        return $result['hits'];
    }
}