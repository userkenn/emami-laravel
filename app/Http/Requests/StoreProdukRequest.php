<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdukRequest extends FormRequest
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
            'nama_produk' => 'required|string',
            'harga_produk' => 'required|numeric',
            'produk_terjual' => 'required|numeric',
            'deskripsi_produk' => 'string',
            'stok_produk' => 'required|numeric',
            'kategori_produk' => 'required|string',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
