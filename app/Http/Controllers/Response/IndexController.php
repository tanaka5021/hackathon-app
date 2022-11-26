<?php

namespace App\Http\Controllers\Response;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

        $inquiry = Inquiry::orderBy('created_at','DESC')->get();
       
        
        return  view('response.index')
            ->with('inquiry',$inquiry);
        
    }
}
