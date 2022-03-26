<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
        $rules = [
            'sent_by' =>[
                'required',
                'string',
                'max:200'
            ],
            'number' =>[
             'nullable',
             'string',
             'max:200'
            ],
            'email' =>[
             'required',
             'string',
            ],
            'message' =>[
             'required',
             'string',
            ]
 
         ];
         return $rules;
     }
    
}
