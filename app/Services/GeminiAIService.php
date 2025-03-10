<?php

namespace App\Services;

use GuzzleHttp\Client;

class GeminiAIService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function analyseDepenses($depenses)
    {
        $apiKey = env('GEMINI_API_KEY');
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key={$apiKey}";

        $prompt = "Analyse ces dépenses et donne une recommandation pour mieux économiser   en 3 phrases: " . json_encode($depenses);

        try {

            $response = $this->client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'contents' => [
                        [
                            'parts' => [
                                [
                                    'text' => $prompt
                                ]
                            ]
                        ]
                    ]
                ]
            ]);

            $data = json_decode($response->getBody(), true);
            // dd($data['candidates'][0]['content']['parts'][0]['text']);
            return $data['candidates'][0]['content']['parts'][0]['text'];
        } catch (\Exception $e) {
            return "Erreur API : " . $e->getMessage();
        }
    }
}
