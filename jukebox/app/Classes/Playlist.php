<?php

namespace App\Classes;
 
use Illuminate\Http\Request;
use App\Http\Controllers\SongController;
use App\Models\Song;


class Playlist
{
    public function addSong(Request $request, Song $song){
        $request->session()->put('song', $song);
    }

    public function viewQueue(Request $request){
        $request->session()->get('song');
    }
}