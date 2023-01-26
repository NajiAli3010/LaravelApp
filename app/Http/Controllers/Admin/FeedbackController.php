<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedbackform;

class FeedbackController
{

    public function index()
    {
        if (auth()->user()->admin){
            $feeds = Feedbackform::All()->sortByDesc('id');
            return view('admin.feeds.index', compact('feeds'));
        }else{
            abort(403);
        }

    }



}
