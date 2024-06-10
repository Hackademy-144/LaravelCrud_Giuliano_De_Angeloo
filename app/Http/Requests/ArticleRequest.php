<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Stmt\Return_;

class ArticleRequest extends FormRequest
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
        return  [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required|max:20000',
            'img' => 'mimes:jpg,png,svg,jpeg,gif'
        ];
    }

public function messages() {
    return [
            'required' => 'il :attribute è richiestissimo',
        ];
    
}



}
