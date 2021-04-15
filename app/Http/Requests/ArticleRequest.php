<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=>'required|min:2|max:30',
            'img'=>'required|image',
            'description'=>'required|min:20|max:300',
        ];
    }
    public function messages()
{
    return [
        'title.required' => 'il titolo è obbligatorio',
        'title.min' => 'Il titolo deve essere almeno di 5 caratteri',
        'title.max' => 'Il titolo deve essere al massimo di 30 caratteri',
        'body.required' => 'A message is required',
    ];
}
}



