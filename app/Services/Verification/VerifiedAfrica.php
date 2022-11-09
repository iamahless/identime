<?php

namespace App\Services\Verification;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use stdClass;

class VerifiedAfrica
{
    public function __construct(
        private stdClass $payload
    )
    {
    }

    public function getNinDetails($payload): stdClass
    {
        try {
            $request = Http::withHeaders([
                'userid' => env('VERIFIED_AFRICA_USER_ID'),
                'apiKey' => env('VERIFIED_AFRICA_NIN_API_KEY')
            ])->post(env('VERIFIED_AFRICA_API_URL'), [
                'searchParameter' => $payload->nin,
                'verificationType' => 'NIN-SEARCH',
                "transactionReference" => ""
            ]);

            if ($request->successful()) {
                $response = $request->object();

                $this->payload->name = $this->trimString("{$response->response[0]->firstname} {$response->response[0]->middlename} {$response->response[0]->surname}");
                $this->payload->birthdate = $response->response[0]->birthdate;
                $this->payload->success = true;

                return $this->payload;
            }

            $this->payload->message = "cannot get nin details at the moment";
            $this->payload->success = false;

            return $this->payload;
        } catch (Exception $exception) {
            $this->payload->message = "something went wrong";
            $this->payload->success = false;

            return $this->payload;
        }
    }

    public function getBVNDetails($payload): stdClass
    {
        try {
            $request = Http::withHeaders([
                'userid' => env('VERIFIED_AFRICA_USER_ID'),
                'apiKey' => env('VERIFIED_AFRICA_BVN_API_KEY')
            ])->post(env('VERIFIED_AFRICA_API_URL'), [
                'firstName' => $payload->first_name,
                'lastName' => $payload->last_name,
                'searchParameter' => $payload->bvn,
                'dob' => $payload->date_of_birth,
                'phone' => $payload->phone,
                'verificationType' => 'BVN-BOOLEAN-MATCH',
                "email" => $payload->email
            ]);

            if ($request->successful()) {
                $response = $request->object();

                $this->payload->validity = $response->response->validity === "VALID";
                $this->payload->success = true;

                return $this->payload;
            }

            $this->payload->validity = false;
            $this->payload->message = "cannot get bvn details at the moment";
            $this->payload->success = false;

            return $this->payload;

        } catch (Exception $exception) {
            $this->payload->message = "something went wrong";
            $this->payload->success = false;

            return $this->payload;
        }
    }

    public function getInternationalPassportDetails(): stdClass
    {
        return $this->payload;
    }

    public function getVotersCardDetails(): stdClass
    {
        return $this->payload;
    }

    public function getDriverLicenseDetails(): stdClass
    {
        return $this->payload;
    }

    private function trimString($string): string
    {
        return trim(preg_replace('/[\t\n\r\s]+/', ' ', $string));
    }

}
