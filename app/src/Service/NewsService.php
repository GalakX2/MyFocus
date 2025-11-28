<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Exception;

class NewsService
{
    private HttpClientInterface $client;
    private string $apiKey;

    public function __construct(HttpClientInterface $client, string $newsApiKey)
    {
        $this->client = $client;
        $this->apiKey = $newsApiKey;
    }

    public function getNewsForKeywords(?string $keywords): array
    {
        $q = $keywords ?: 'technology';

        try {
            $response = $this->client->request(
                'GET',
                'https://newsapi.org/v2/everything',
                [
                    'query' => [
                        'q' => $q,
                        'apiKey' => $this->apiKey,
                        'language' => 'fr',
                        'pageSize' => 5, 
                        'sortBy' => 'publishedAt'
                    ]
                ]
            );

            $data = $response->toArray();
            
            if (($data['status'] ?? '') !== 'ok') {
                 return [];
            }

            return $data['articles'] ?? [];

        } catch (Exception $e) {
            return [];
        }
    }
}