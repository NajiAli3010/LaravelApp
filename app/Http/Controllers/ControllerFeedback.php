<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedbackform;


class ControllerFeedback extends Controller
{
    public function store(Request $request)
    {

        return $request->file('file')->store('docs');

        $feedback = new Feedbackform;
        $feedback->Subject = $request['subject'];
        $feedback->Feedback = $request['feedback'];
        $feedback->File = $request['file'];
        $feedback->save();
    }
}
