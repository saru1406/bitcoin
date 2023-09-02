<?php

namespace App\Repositories;

use App\Models\BitCoin;
use App\Repositories\BitCoinRepositoryInterface;
use GuzzleHttp\Client;

class BitCoinRepository implements BitCoinRepositoryInterface
{
    public function fetchBitCoinRate()
    {
        $client = new Client();
        $url = "https://coincheck.com/api/rate/btc_jpy";

        $response = $client->get($url);

        return json_decode($response->getBody(), true)['rate'];
    }

    public function storeBitCoin($bitCoinRate)
    {
        BitCoin::create([
            'price' => $bitCoinRate
        ]);
    }

    public function getBitCoin()
    {
        $bitcoins = BitCoin::select('price')->orderBy('id', 'desc')->paginate(100);
        return $bitcoins->reverse();
    }
}
