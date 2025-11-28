<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Exception;

class FinanceService
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    // 1. Récupérer le prix du Bitcoin en Euros (via CoinGecko)
    public function getBitcoinPrice(): ?float
    {
        try {
            $response = $this->client->request(
                'GET',
                'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=eur'
            );

            $data = $response->toArray();

            // La structure reçue est : {'bitcoin': {'eur': 35000}}
            return $data['bitcoin']['eur'] ?? null;

        } catch (Exception $e) {
            // En cas d'erreur, on retourne null
            return null;
        }
    }

    // 2. Récupérer le taux EUR -> USD (via Frankfurter, gratuit et stable)
    public function getEurToUsdRate(): ?float
    {
        try {
            $response = $this->client->request(
                'GET',
                'https://api.frankfurter.app/latest?from=EUR&to=USD'
            );

            $data = $response->toArray();

            // La structure reçue est : {'amount': 1.0, 'rates': {'USD': 1.05}}
            return $data['rates']['USD'] ?? null;

        } catch (Exception $e) {
            return null;
        }
    }
}