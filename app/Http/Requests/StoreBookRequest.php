<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'genre_id' => 'required|exists:genres,id',
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'about' => 'required|string',
            'status' => 'required|integer',
        ];
    }
}
