<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjet extends FormRequest
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
            'titre'=>'required|max:255',
            'contenu'=>'required',
            'entreprise'=>'required|max:255',
            'image'=>'image|max:200000'
        ];
    }
    public function messages()
    {
        return [
            'required' => trans('validation.champ-requis'),
            'max' => trans('validation.max-requis')
        ];
    }
}
