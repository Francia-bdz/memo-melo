<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreSongRequest;


class SongController extends Controller
{

    public function index(User $user)
    {
        $mySongs = Song::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        return view('songs.index', compact('mySongs'));
    }


    public function create()
    {
        
        $instruments = [
            'Guitare',
            'Basse',
            'Batterie',
            'Piano',
            'Violon',
            'Saxophone',
            'Trompette',
            'Flûte',
            'Harpe',
            'Ukulélé',
            'Autre',
        ];
        return view('songs.create' , compact('instruments'));
    }

    public function store(StoreSongRequest $request, Song $song)
    {
        if (auth()->user()->email === 'demo@example.com') {
            return redirect()->route('songs.index')
                ->with('error', 'Créez vous un compte pour ajouter une mélodie');
        } else {
            Song::create([
                'title' => $request->input('title'),
                'artist' => $request->input('artist'),
                'chordsKnowledge' => $request->input('chordsKnowledge'),
                'rythmKnowledge' => $request->input('rythmKnowledge'),
                'globalKnowledge' => $request->input('globalKnowledge'),
                'tabs' => $request->input('tabs') ? $request->input('tabs') : null,
                'link' => $request->input('link') ? $request->input('link') : null,
                'user_id' => auth()->user()->id,
            ]);

            return redirect()->route('songs.index')
                ->with('success', 'Mélodie ajoutée avec succès');
        }
    }

    public function show(Song $song)
    {
        $model = Song::findOrfail($song->id);

        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    } 

    public function update(StoreSongRequest $request, Song $song)
    {

        if (auth()->user()->email === 'demo@example.com') {
            return redirect()->route('songs.index')
                ->with('error', 'Créez vous un compte pour modifier une mélodie');
        } else {

            $song->update($request->all());

            return redirect()->route('songs.show', compact('song'))
                ->with('success', 'Mélodie mise à jour avec succès');
        }
    }

    public function destroy(Song $song)
    {

        if (auth()->user()->email === 'demo@example.com') {
            return redirect()->route('songs.index')
                ->with('error', 'Créez vous un compte pour supprimer une mélodie');
        } else {

            $song->delete();

            return redirect()->route('songs.index')
                ->with('success', 'Mélodie supprimée avec succès');
        }
    }
}
