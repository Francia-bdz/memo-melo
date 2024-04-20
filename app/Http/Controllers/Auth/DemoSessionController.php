<?php

namespace App\Http\Controllers\Auth;

use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


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

            Song::create([
                'title' => 'KNOCKING ON THE HEAVEN’S DOOR',
                'artist' => 'Bob Dylan',
                'chordsKnowledge' => 4,
                'rythmKnowledge' => 3,
                'globalKnowledge' => 4,
                'tabs' => 'https://tabs.ultimate-guitar.com/tab/bob-dylan/knockin-on-heavens-door-chords-66559',
                'link' => 'https://www.youtube.com/watch?v=rm9coqlk8fY',
                'user_id' => $user->id,
            ]);
            
        }

        Auth::login($user);


        return redirect('/songs');
    }
}
