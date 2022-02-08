<?php
namespace App\Classes;
 
use Illuminate\Http\Request;

class Playlist
{
    public function add(Request $request, $id){
        $request->session()->put('songName', 'name');

        session(['songName' => 'name']);
    }

    public function store(Request $request, $id){
        $value = $request->session()->get('songName');
    }
}