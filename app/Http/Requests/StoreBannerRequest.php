<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannerRequest extends FormRequest
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
            'gambar_banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_banner' => 'required|string',
            'deskripsi_banner' => 'nullable|string',
        ];
    }
}
