<?php

namespace App\Http\Requests\FormRequests;

use Illuminate\Foundation\Http\FormRequest;

class MeetingsFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'agenda' => 'required' ,
            'date' => 'required',
            'committee' => 'required',
            'location' => 'required'
        ];
    }
}
