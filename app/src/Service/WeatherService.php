<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Exception;

class WeatherService
{
    private HttpClientInterface $client;
    private string $apiKey;

    public function __construct(HttpClientInterface $client, string $openWeatherApiKey)
    {
        $this->client = $client;
        $this->apiKey = $openWeatherApiKey;
    }

    public function getWeatherForCity(string $city): array
    {
        // Si aucune ville n'est définie, on retourne null ou une erreur
        if (!$city) {
            return ['error' => 'Aucune ville définie'];
        }

        try {
            // Appel à l'API selon le PDF (Page 5)
            $response = $this->client->request(
                'GET',
                'https://api.openweathermap.org/data/2.5/weather',
                [
                    'query' => [
                        'q' => $city,
                        'appid' => $this->apiKey,
                        'units' => 'metric', // Pour avoir des °C
                        'lang' => 'fr'       // Description en français
                    ]
                ]
            );

            // On convertit le JSON reçu en tableau PHP
            $data = $response->toArray();

            // On retourne juste ce dont on a besoin
            return [
                'temperature' => round($data['main']['temp']),
                'description' => $data['weather'][0]['description'],
                // Optionnel : l'icône
                'icon' => $data['weather'][0]['icon'] ?? null
            ];

        } catch (Exception $e) {
            // Gestion d'erreur demandée par le PDF (Fallback)
            // On log l'erreur si besoin, et on retourne un message simple
            return [
                'error' => 'Météo indisponible pour le moment'
            ];
        }
    }
}
