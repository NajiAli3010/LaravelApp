<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Feedbackform;
use Carbon\Carbon;
use Mail;
use App\Mail\FeedbackMail;


class FeedbackController
{

    public function index()
    {
        if (auth()->user()->admin){
            $feeds = Feedbackform::orderBy('created_at','DESC')->get();
            // return $feeds;
            return view('admin.feeds.index', compact('feeds'));
        }else{
            abort(403);
        }

    }

    public function store(Request $request)
    {

        $feedbacks = Feedbackform::where('user_id',auth()->user()->id)->whereDate('created_at', Carbon::today())->get();
        $feedback_count = $feedbacks->count();

        if($feedback_count > 0){

        

            $message = "Feedback already submitted today, please try tomorrow.";
            $alert_class = "alert-danger";
            
        }
        else{

            $data = $request->validate([

                'subject' => ['required','max:225'],
                'feedback' => ['required'],
                'file' => ['required','mimes:jpg,bmp,png,pdf,doc,docx','max:3072']
    
            ]);
    
            
            
            $path = $request->file('file')->store('docs', 'public');
            $feedback = new Feedbackform;
            $feedback->Subject = $request['subject'];
            $feedback->Feedback = $request['feedback'];

        
            $fileName = time() . '.' . $request['file']->extension();
            $feedback->File = $fileName;
            
            

            if($request->hasfile('file')){
                $file = $request->file('file');
                $ext = $file->getClientOriginalExtension();
                $filename = time().".".$ext;
                $file->move('docs/',$filename);
            }

            $feedback->user_id = auth()->user()->id;
            $feedback->save();

            $feedback_data = $request->all();
            
            $request_from = auth()->user()->name;
            $to = 'xosig20235@brandoza.com';
            $title = 'New Feedback Submission';
            $body = 'Hey Manger, Feedback with request "'. $request['subject'] .'" is submitted from '.$request_from;
            $subject = $request['subject'];
            $feedback = $request['feedback'];
            $file = $fileName;
            $created_at = Carbon::now();
            
            $this->feedback_mail($to, $title, $body, $subject, $feedback, $file, $created_at);

            $message = "Feedback submitted successfuly.";
            $alert_class = "alert-success";

        }

      
        return redirect()->back()->with('message',$message)->with('alert-class',$alert_class)->withInput();
    }

    public function feedback_mail($to, $title, $body, $subject, $feedback, $file, $created_at)
    {
        $mailData = [
            'title' => $title,
            'body' => $body,
            'subject' => $subject,
            'feedback' => $feedback,
            'file' => $file,
            'created_at' => $created_at,
        ];

        Mail::to($to)->send(new FeedbackMail($mailData));

    }



}
