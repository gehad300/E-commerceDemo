<?php

namespace App\Http\Requests\Dashboard\Product;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class CategoryRequest extends FormRequest
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
            'name' => 'array',
            'name' => 'required',
            'name.en' => 'required',
            'name.ar' => 'required',
            'descroption' => 'nullable',
            'descroption' => 'array',
            'descroption.en' => 'nullable',
            'descroption.ar' => 'nullable',
            'active' => 'nullable|max:1',
            'parent_id' => 'nullable',
        ];
    }
}
