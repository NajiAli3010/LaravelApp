<?php

namespace App\Http\Controllers\User;

class HomeController
{
    public function index()
    {
        if (auth()->user()->admin) {
            abort(403);

        }else {
            return view('user.home.index');
        }
    }

    public function success()
    {
        return view('user.home.success');
    }

}
