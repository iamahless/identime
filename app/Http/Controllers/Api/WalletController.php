<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Business\Wallet as WalletService;
use Illuminate\Http\JsonResponse;

class WalletController extends Controller
{
    public function __construct(
        private WalletService $wallet
    ) {
    }

    public function getUserNinDetails(string $ssn): JsonResponse
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

    public function getUserBvnDetails(string $ssn): JsonResponse
    {
        $payload = $this->wallet->getUserBvnDetail($ssn);

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
