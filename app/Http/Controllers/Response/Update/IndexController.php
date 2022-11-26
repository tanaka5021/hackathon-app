<?php

namespace App\Http\Controllers\Response\Update;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Services\InquiryService; //InquiryServiceのインポート

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,InquiryService $inquiryService)
    {
        //
        /*
        $inquiryId = (int) $request->route('inquiryId');
        $inquiry = Inquiry::where('id',$inquiryId)->firstOrFail();
        */

        //$inquiryService = new InquiryService();//インスタンス作成
        $inquiries = $inquiryService->getInquiries();

        //dd($inquiry);

        return view('response.update')->with('inquiry',$inquiries);
    }
}
