<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name' => ['required', 'min:8'],
            'desc' => ['required', 'max:100'],
            'price' => ['required'],
            'imageUrl' => ['required'],
            'size' => ['required'],
            'isPublished' => ['required'],
            'state' => ['required'],
            'category_id' => ['required'],
            'reference' => ['required', 'size:16'],
        ];
    }

}
