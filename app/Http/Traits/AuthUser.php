<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;

trait AuthUser
{
    public function getAuthUserSecretKey()
    {
        return Auth::user()->APISecretKey;
    }
}