<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBitCoinRequest;
use App\Http\Requests\UpdateBitCoinRequest;
use App\Models\BitCoin;
use App\Services\BitCoinServiceInterface;
use Inertia\Inertia;

class BitCoinController extends Controller
{
    public function __construct(private BitCoinServiceInterface $bitCoinService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBitCoinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BitCoin $bitCoin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BitCoin $bitCoin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBitCoinRequest $request, BitCoin $bitCoin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BitCoin $bitCoin)
    {
        //
    }

    public function execution()
    {
        $this->bitCoinService->storeBitCoin();

        return to_route('dashboard');
    }
}
