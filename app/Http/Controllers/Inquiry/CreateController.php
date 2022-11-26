<?php

namespace App\Http\Controllers\Inquiry;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inquiry\CreateRequest;
use App\Models\Inquiry;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        //
        $inquiry = new Inquiry;
        $inquiry->question_content = $request->QuestionContent();
        $inquiry->customer_name = $request->CustomerName();
        $inquiry->save();

        return redirect()->route('response.index');
    }
}
