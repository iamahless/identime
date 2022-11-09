<?php

namespace App\Services\Verification;

use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use stdClass;

class VerifiedAfrica
{
    private PendingRequest $verifiedAfrica;
    private stdClass $payload;

    public function __construct()
    {
        $this->verifiedAfrica = Http::withHeaders([
            'api-key' => env('VERIFIED_AFRICA_SECRET_KEY')
        ])->baseUrl(env('VERIFIED_AFRICA_BASE_URL'));
        $this->payload = new stdClass();
    }

    public function getNinDetails(): stdClass
    {
        return $this->payload;
    }

    public function getInternationalPassportDetails(): stdClass
    {
        return $this->payload;
    }

    public function getVotersCardDetails(): stdClass
    {
        return $this->payload;
    }

    public function getBVNDetails(): stdClass
    {
        return $this->payload;
    }

    public function getDriverLicenseDetails(): stdClass
    {
        return $this->payload;
    }

}
