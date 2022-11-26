<?php

namespace App\Http\Controllers\Response\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Response\UpdateRequest;
use App\Models\Inquiry;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request)
    {
        //
        $inquiry = Inquiry::where('id',$request->id())->firstOrFail();
        $inquiry -> question_content = $request->questionContent();
        $inquiry -> save();
        return redirect()
            ->route('response.update.index',['inquiryId' => $inquiry->id]) 
            ->with('feedback.success',"問い合わせの編集が完了しました");
    }
}
