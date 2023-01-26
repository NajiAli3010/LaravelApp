<?php

namespace App\Http\Controllers\User;

class HomeController
{
    public function index()
    {
        if (!auth()->user()->admin) {
            return view('user.home.index');
        }else {
            abort(403);
        }
    }

}
