<?php

namespace App\Services;

use App\Repositories\BitCoinRepositoryInterface;

class BitCoinService implements BitCoinServiceInterface
{
    public function __construct(private BitCoinRepositoryInterface $bitCoinRepository)
    {
    }

    public function storeBitCoin()
    {
       $bitCoinRate = $this->bitCoinRepository->fetchBitCoinRate();
       return $this->bitCoinRepository->storeBitCoin($bitCoinRate);
    }

    public function getBitCoin()
    {
        return $this->bitCoinRepository->getBitCoin();
    }
}
