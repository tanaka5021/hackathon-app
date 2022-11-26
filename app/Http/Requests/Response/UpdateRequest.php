<?php

namespace App\Http\Requests\Response;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'question_content' => 'required|max:10'
        ];
    }

    public function questionContent():string
    {
        return $this->input('question_content');
    }    

       public function id():int
    {
        return (int) $this->route('inquiryId');
    }   
}
