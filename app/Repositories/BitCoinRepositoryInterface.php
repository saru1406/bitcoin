<?php

namespace App\Repositories;

interface BitCoinRepositoryInterface
{
    public function fetchBitCoinRate();

    public function storeBitCoin($bitCoinRate);

    public function getBitCoin();
}
