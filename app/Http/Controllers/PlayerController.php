<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        $player = Player::all();
        return view('home',compact(['player']));
    }

    public function add(){
        return view('add');
    }

    public function store(Request $request){
        $player = Player::create($request->all());
        return redirect('home');
    }

    public function edit($id){
        $player = Player::find($id);
        return view('update.edit',compact(['player']));
    }

    public function update($id, Request $request){
        $player = Player::find($id);
        $player->update($request->all());
        return redirect('home');
    }

    public function destroy($id){
        $player = Player::find($id);
        $player->delete();
        return redirect('home');
    }
}