<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Controllers\Micropost;

class FavoritesController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $micropost = $user->feed_favorite_microposts()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'microposts' => $microposts,
                ];
        }
        return view('welcome', $data);
    }
    
    //
    public function store($id)
    {
        
        \Auth::user()->favorite($id);
        
        return back();
    }
    
    public function destroy($id)
    {
        
        \Auth::user()->unfavorite($id);
        
        return back();
    }
}
