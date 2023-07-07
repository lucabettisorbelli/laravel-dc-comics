<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
            "title" => "required|min:5|max:50",
            "description" => "required|min:5|max:65535",
            "image" => "required",
            "price" => "max:255",
            "series" => "min:5|max:255",
            "type" => "required|max:20",
            "artists" => "required|max:20",
            "writers" => "required|max:20",
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",
            "description.required" => "la descrizione è obbligatoria"
        ];
    }
}
