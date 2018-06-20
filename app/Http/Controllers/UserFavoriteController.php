<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
   public function store(Request $request, $id)
    {
        \Auth::user()->favorite($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return redirect()->back();
    }
    
    public function favorite_micropost($id)
    {
        $user = User::find($id);
        $favorite_micropost = $user->favorite_micropost()->paginate(10);

        $data = [
            'user' => $user,
            'microposts' => $favorite_micropost,
        ];

        $data += $this ->counts($user);

        return view('users.favorite_micropost', $data);
    }
}
