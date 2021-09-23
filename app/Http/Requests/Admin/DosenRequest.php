<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
class DosenRequest extends FormRequest
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
            'nidn_dosen'=>'required|max:9',
            'nama_dosen'=>'required|max:255',
            'no_hp'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
            
        ];
    }
}