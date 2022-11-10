<?php

namespace App\Services\Business;

use App\Models\User;
use App\Models\Wallet as Model;
use App\Services\Verification\VerifiedAfrica;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use stdClass;

class Wallet
{
    public function __construct(
        private User $user,
        private VerifiedAfrica $verifyService,
        private stdClass $payload
    ) {
    }

	public function getUserNinDetail($ssn)
	{
        try {
            $user = $this->user->where('ssn', $ssn)->firstOrFail();

            $wallet = $user->wallets()->where('type', Model::TYPE_NIN)->firstOrFail();

            $payload = (object)json_decode($wallet->payload);
            $response = $this->verifyService->getNinDetails($payload, true);

            $this->payload->message = "User nin details";
            $this->payload->data = $response->data;
            $this->payload->status = 200;

            return $this->payload;


        } catch (Exception $exception) {
            if ($exception instanceof ModelNotFoundException) {
                $this->payload->message = "invalid user security ID / Required ID isn't assigned to user security ID";
                $this->payload->status = 404;

                return $this->payload;
            }

            $this->payload->message = $exception->getMessage();
            $this->payload->status = 500;

            return $this->payload;
        }
	}
}
