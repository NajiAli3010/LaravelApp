<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedbackform;


class ControllerFeedback extends Controller
{
    public function store(Request $request)
    {

        $data = $request->validate([


            'subject'=>['required', 'max:111'],
            'feedback'=>['required',''],
            'file' => ['required', 'mimes:jpg,bmp,png,pdf,doc,docx,','max:3072']

        ]);

        $path =  $request->file('file')->store('docs','public');

        $feedback = new Feedbackform;
        $feedback->Subject = $request['subject'];
        $feedback->Feedback = $request['feedback'];
        $feedback->File = $path;
        $feedback->user_id = auth()->user()->id;
        $feedback->save();

        return back();
    }
}
