<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Business\Wallet as WalletService;

class WalletController extends Controller
{
    public function __construct(
        private WalletService $wallet
    )
    {
    }

    public function getUserNinDetails($ssn)
    {
        $payload = $this->wallet->getUserNinDetail($ssn);

        if ($payload->status == 200) {
            return response()->json([
                'message' => $payload->message,
                'data' => $payload->data,
            ], $payload->status);
        }

        return response()->json([
            'message' => $payload->message
        ], $payload->status);
    }
}
