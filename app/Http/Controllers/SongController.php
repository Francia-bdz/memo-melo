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
        return view('songs.create');
    }

    public function store(StoreSongRequest $request, Song $song) 
    {

        Song::create([
            'title' => $request->input('title'),
            'artist' => $request->input('artist'), 
            'chordsKnowledge' => $request->input('chordsKnowledge'), 
            'rythmKnowledge' => $request->input('rythmKnowledge'), 
            'globalKnowledge' => $request->input('globalKnowledge'), 
            'tabs' => $request->input('tabs'), 
            'link' => $request->input('link'), 
            'user_id' => auth()->user()->id,
        ] );

        return redirect()->route('songs.index')
            ->with('success', 'Mélodie ajoutée avec succès');
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

        $song->update($request->all());

        return redirect()->route('songs.show', compact('song'))
            ->with('success', 'Mélodie mise à jour avec succès');
    }

    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('songs.index')
            ->with('success', 'Mélodie supprimée avec succès');
    }
    

}
