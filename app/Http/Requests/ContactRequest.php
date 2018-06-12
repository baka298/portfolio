<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nom'=>'required|max:255',
            'prenom'=>'required|max:255',
            'email'=>'required|email',
            'societe'=>'required|max:255',
            'message'=>'required|min:10'
        ];
    }
    public function message()
    {
        return [
            'required' => trans('validation.champ-requis'),
            'max' => trans('validation.max-requis')
        ];
    }
}
