<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\Wallet as WalletModel;
use App\Services\User\Wallet as WalletService;
use App\Services\Verification\VerifiedAfrica;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function __construct(
        private VerifiedAfrica $verify,
        private WalletService $walletService
    )
    {
    }

    public function createNinWallet(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'nin' => 'required|string|digits:11',
            'date_of_birth' => 'required|string'
        ]);

        $wallet = $this->walletService->create($request, WalletModel::TYPE_NIN);
        $verifiedAfrica = $this->verify->getNinDetails($request);
        $userPayload = $this->getUserPayload($request);

        if ($verifiedAfrica->success) {
            $response = $this->walletService->verifyNin($wallet, $verifiedAfrica, $userPayload);

            if($response->success) {
                return redirect()->back()->with('success', $response->message);
            }

            return redirect()->back()->withErrors($response->message);
        }

        return redirect()->back()->withErrors($verifiedAfrica->message);
    }

    public function createBvnWallet(Request $request)
    {

    }

    private function getUserPayload($request)
    {
        $payload = [
            "name" => "{$request->first_name} {$request->last_name}",
            "birthdate" => $request->date_of_birth
        ];

        return (object)$payload;
    }
}
