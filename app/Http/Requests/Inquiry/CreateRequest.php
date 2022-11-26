<?php

namespace App\Http\Requests\Inquiry;

use App\Models\Inquiry;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string,mixed>
     */
    public function rules()
    {
        return [
            //
            'question_content' => 'required|max:10',
            'customer_name' => 'required|max:20'
            
        ];
    }

    public function QuestionContent():string
    {
        return $this->input('question_content');
    }   
    
    public function CustomerName():string
    {
        return $this->input('customer_name');
    }
}
