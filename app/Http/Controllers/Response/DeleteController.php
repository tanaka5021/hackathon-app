<?php

namespace App\Http\Controllers\Response;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;

class DeleteController extends Controller
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
        $inquiryId = (int) $request->route('inquiryId');
        $inquiry = Inquiry::where('id',$inquiryId)->firstOrFail();
        $inquiry->delete();
        return redirect()
            ->route('response.index')
            ->with('feedback.success',"問い合わせを削除しました");        
    }
}
