<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;


class DemoSessionController extends Controller
{
    public function store() : RedirectResponse
    {
        $user = User::where('email', 'demo@example.com')->first();

        if (!$user) {
            $user = User::create([
                'name' => 'Demo',
                'email' => 'demo@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        Auth::login($user);

        return redirect('/songs');
    }
}
