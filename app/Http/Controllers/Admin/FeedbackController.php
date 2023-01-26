<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedbackform;

class FeedbackController
{

    public function index()
    {
        if (auth()->user()->admin){
            $feeds = Feedbackform::orderBy('created_at','DESC')->paginate(10);
            return view('admin.feeds.index', compact('feeds'));
        }else{
            abort(403);
        }

    }



}
