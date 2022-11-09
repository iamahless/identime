<?php

namespace App\Services\Dashboard;

use App\Models\Business as Model;
use stdClass;
use Exception;

class Business
{
    public function __construct(
        private Model $business,
        private stdClass $payload
    )
    {
    }

    public function getKeys($businessId)
    {
        try {
            $business = $this->business->findOrFail($businessId);

            $this->payload->message = 'success';
            $this->payload->business = $business;
            $this->payload->keys = $business->businessKey()->first();
            $this->payload->success = false;

            return $this->payload;
        } catch (Exception $exception) {
            $this->payload->message = $exception->getMessage();
            $this->payload->success = false;
            return $this->payload;
        }
    }
}
