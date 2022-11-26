<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    //
    public function show(){
        return 'Hello';

        //return view('response.index');

    }

    public function showId($id)
    {
        # code...
        return "Hello {$id}";
    }

    
}
