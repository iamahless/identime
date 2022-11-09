<?php

namespace App\Services\User;

use App\Models\Wallet as WalletModel;
use Exception;
use Illuminate\Support\Facades\Auth;
use stdClass;

class Wallet
{
    public function __construct(
        private stdClass $payload
    )
    {
    }

    public function create($payload, $type): stdClass
    {
        try {
            $user = Auth::user();

            $wallet = $user->wallets()->where(['type' => $type])->first();

            if (!$wallet instanceof WalletModel) {
                $payloadParameters = $payload->except([
                    '_token',
                ]);

                $wallet = $user->wallets()->create([
                    'type' => $type,
                    "payload" => json_encode($payloadParameters)
                ]);
            }

            $this->payload->wallet = $wallet;
            $this->payload->message = 'User Wallet Created';
            $this->payload->success = true;

            return $this->payload;
        } catch (Exception $e) {
            $this->payload->message = $e->getMessage();
            $this->payload->success = false;

            return $this->payload;
        }
    }

    public function verifyNin($wallet, $payload, $userPayload)
    {
        try {
            $payloadName = explode(" ", $payload->name);
            $username = explode(" ", $userPayload->name);

            if (array_intersect($payloadName, $username) >= 2 && ($userPayload->birthdate === $payload->birthdate)) {
                $wallet->wallet->update([
                    'is_verified_at' => now()->toDateTimeString()
                ]);
            }

            $this->payload->wallet = $wallet->wallet->fresh();
            $this->payload->message = strtoupper($wallet->wallet->type).' has been verified and also added to your Wallet ';
            $this->payload->success = true;

            return $this->payload;
        } catch (Exception $e) {
            $this->payload->message = $e->getMessage();
            $this->payload->success = false;

            return $this->payload;
        }
    }

    public function verifyBVN(stdClass $wallet, stdClass $verifiedAfrica): stdClass
    {
        try {
            if ($verifiedAfrica->validity) {
                $wallet->wallet->update([
                    'is_verified_at' => now()->toDateTimeString()
                ]);
            }

            $this->payload->wallet = $wallet->wallet->fresh();
            $this->payload->message = strtoupper($wallet->wallet->type).' has been verified and also added to your Wallet ';
            $this->payload->success = true;

            return $this->payload;
        } catch (Exception $e) {
            $this->payload->message = $e->getMessage();
            $this->payload->success = false;

            return $this->payload;
        }
    }
}
