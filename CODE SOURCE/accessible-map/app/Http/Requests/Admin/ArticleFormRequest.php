<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
            'title' =>[
                'required',
                'string',
                'max:200'
            ],
            'article' =>[
                'required',
            ],
            'image' =>[
                'nullable',
                'mimes:jpeg,jpg,png'
            ],  
            'type' =>[
                'required',
            ],          
            'meta_title' =>[
             'nullable',
             'string',
             'max:200'
            ],
            'meta_description' =>[
             'nullable',
             'string',
            ],
            'meta_keyword' =>[
             'nullable',
             'string',
            ],
            'status' =>[
             'nullable'
            ],
 
         ];
         return $rules;
     }  
    
}
