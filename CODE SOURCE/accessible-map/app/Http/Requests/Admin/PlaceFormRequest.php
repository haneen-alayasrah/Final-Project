<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PlaceFormRequest extends FormRequest
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
            'city_id' =>[
                'required',
                'integer'
            ],
            'type_id' =>[
                'required',
                'integer'
            ],
            'name' =>[
                'required',
                'string',
                'max:200'
            ],
            'description' =>[
                'required',
            ],
            'image' =>[
                'nullable',
                'mimes:jpeg,jpg,png'

            ],
            'location' =>[
                'required',
                'string',  
            ],
            'phone' =>[
                'required',
                'string',
            ],
            'social' =>[
                'nullable',
                'string',
                'max:200'
            ],
            'features' =>[
                'nullable',
                'string',
            ],
            'features_and_facilities' =>[
                'required',
                'string',
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
