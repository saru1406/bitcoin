<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBitCoinRequest;
use App\Http\Requests\UpdateBitCoinRequest;
use App\Models\BitCoin;
use Inertia\Inertia;

class BitCoinController extends Controller
{
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
        $strUrl = "https://coincheck.com/api/accounts/balance";
        $intNonce = time();
        $arrQuery = array("hoge" => "foo");
        $strAccessSecret = "API_SECRET";
        $strMessage = $intNonce . $strUrl . http_build_query($arrQuery);
        $strSignature = hash_hmac("sha256", $strMessage, $strAccessSecret);
        # => "3bc1f33d802056c61ba8c8108f6ffb7527bcd184461a3ea0fed3cee0a22ae15d"
        return Inertia::render('Execution');
    }
}
