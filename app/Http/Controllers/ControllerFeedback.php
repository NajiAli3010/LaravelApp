<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedbackform;
use Carbon\Carbon;
use Mail;
use App\Mail\FeedbackMail;

class ControllerFeedback extends Controller
{
    public function store(Request $request)
    {

        $feedbacks = Feedbackform::where('user_id',auth()->user()->id)->whereDate('created_at', Carbon::today())->get();
        $feedback_count = $feedbacks->count();
        // return $feedback_count;

        if($feedback_count > 0){

            // return "Feedback already submitted today, please try tomorrow.";

            $message = "Feedback already submitted today, please try tomorrow.";
            $alert_class = "alert-danger";
            
        }
        else{

            $data = $request->validate([

                'subject' => ['required', 'max:225'],
                'feedback' => ['required'],
                'file' => ['required', 'mimes:jpg,bmp,png,pdf,doc,docx,', 'max:3072']
    
            ]);
    
            
            
            $path = $request->file('file')->store('docs', 'public');
    
            $feedback = new Feedbackform;
            $feedback->Subject = $request['subject'];
            $feedback->Feedback = $request['feedback'];

            if ($request->hasfile('file')) {
                $imageName = time() . '.' . $request->file->extension();
                $request->file->move(public_path('recipts'), $imageName);
            }
            
            $feedback->user_id = auth()->user()->id;
            // $feedback->save();

            $feedback_data = $request->all();
            return $feedback_data;

            // Send Email to Manager

            $request_from = auth()->user()->name;
            $to = 'xosig20235@brandoza.com';
            $title = 'New Feedback Submission';
            $body = 'Hey Manger, Feedback with request "'. $request['subject'] .'" is submitted from '.$request_from;
            $this->feedback_mail($to, $title, $body, $request->all());

            $message = "Feedback submitted successfuly.";
            $alert_class = "alert-success";

        }

        return redirect()->back()->with('message',$message)->with('alert-class',$alert_class);
    }

    public function feedback_mail($to, $title, $body, $feedback_data)
    {
        $mailData = [
            'title' => $title,
            'body' => $body,
            'data' => $feedback_data,
        ];

        Mail::to($to)->send(new FeedbackMail($mailData));

    }
}
