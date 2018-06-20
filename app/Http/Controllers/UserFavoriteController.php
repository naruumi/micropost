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
    
    public function favorite($id)
    {
        $favorite = $favorite->favorite()->paginate(10);

        $data = [
            'favorite' => $favorite,
        ];

        $data->counts($favorite);

        return view('users.favorite', $data);
    }
}
