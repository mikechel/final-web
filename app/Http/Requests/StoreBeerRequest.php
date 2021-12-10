<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBeerRequest extends FormRequest
{
    public function rules(){
        return[
            'name' =>[
                'required',
            ],
            'origem' =>[
                'required',
            ],
            'value' =>[
                'required',
            ],
        ];
    }
}
