<?php

namespace App\Console\Commands;

use App\Services\BitCoinServiceInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class BitCoin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bitcoin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ビットコインチャート取得';

    public function __construct(private BitCoinServiceInterface $bitCoinService)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->bitCoinService->storeBitCoin();
        Log::info('実行しました。');
    }
}
