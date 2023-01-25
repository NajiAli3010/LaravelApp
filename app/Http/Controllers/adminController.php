<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedbackform;
use DB;

class adminController extends Controller
{
    public function feed(){

    $feeds= Feedbackform::All()->sortByDesc('id');
    return view('admin', [
        'feeds' => $feeds
    ]);
    }


}
