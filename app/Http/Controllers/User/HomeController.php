<?php

namespace App\Http\Controllers\User;

use App\Models\Feedbackform;

class HomeController
{
    public function index()
    {
        return view('user.home.index');
    }

    public function feeds()
    {
        $feeds = Feedbackform::where('user_id',auth()->user()->id)->paginate(10);
        return view('user.feeds.index',compact('feeds'));
    }
}
