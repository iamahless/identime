<?php

namespace App\Services\Auth;

use App\Mail\UserVerificationMail;
use App\Models\Business;
use App\Models\User;
use Exception;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use stdClass;

class AuthService
{
    private const OTP_VALIDITY = 15;

    public function __construct(
        private User     $user,
        private stdClass $payload,
        private Otp      $otp
    ) {
    }

    public function register($payload): stdClass
    {
        try {
            $isBusiness = isset($payload->business_name);

            $user = $this->user->create([
                'name' => "{$payload->first_name} {$payload->last_name}",
                "email" => $payload->email,
                'type' => $isBusiness ? User::TYPE_BUSINESS : User::TYPE_DEFAULT,
                "phone" => $payload->phone,
                "password" => bcrypt($payload->password),
                "ssn" => strtoupper(uniqid('ime-'))
            ]);

            if ($isBusiness) {
                $business = $user->business()->create([
                    'name' => $payload->business_name
                ]);

                $this->payload->business = $business;
            }

            Auth::login($user);

            $this->payload->message = "Registration successful";
            $this->payload->user = $user;
            $this->payload->success = true;

            return $this->payload;
        } catch (Exception $exception) {
            $this->payload->message = $exception->getMessage();
            $this->payload->success = false;

            return $this->payload;
        }
    }

    public function redirect(): RedirectResponse
    {
        if (Auth::user()->isBusinessType()) {
            return redirect()->intended(route('dashboard-business'));
        }

        return redirect()->intended(route('dashboard-user'));
    }

    public function login($payload)
    {
        try {
            $user = $this->user->where('email', $payload->email)->first();

            if ($user instanceof User && Hash::check($payload->password, $user->password)) {
                Auth::login($user);
                $this->payload->message = "User logged in successfully";
                $this->payload->success = true;

                return $this->payload;
            }

            $this->payload->message = "Invalid credentials";
            $this->payload->success = false;

            return $this->payload;
        } catch (Exception $exception) {
            $this->payload->message = $exception->getMessage();
            $this->payload->success = false;

            return $this->payload;
        }
    }
}
