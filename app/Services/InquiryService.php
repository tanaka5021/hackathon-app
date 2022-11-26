<?php

namespace App\Services;

use App\Models\Inquiry;

class InquiryService
{

    public function getInquiries()
    {
        
        return Inquiry::orderBy('created_at','DESC')->get();
    
    }
}