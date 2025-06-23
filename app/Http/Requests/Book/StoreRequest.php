<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'cover' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'description' => ['nullable', 'string', 'min:3', 'max:255'],
            'publication_year' => ['required', 'date_format:Y'],
            'genre_id' => ['required'], //'exists:genres', 'id'],
            'author_id' => ['required'], //, 'exists:authors', 'id'],
            'price' => ['required', 'numeric'],
            'count' => ['required', 'integer', 'min:0'],
        ];
    }
}
