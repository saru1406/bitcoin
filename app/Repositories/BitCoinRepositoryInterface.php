<?php

namespace App\Repositories;

interface BitCoinRepositoryInterface
{
    public function getBitCoinRate();

    public function storeBitCoin($bitCoinRate);
}
