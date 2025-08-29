<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKategoriBukuRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array {
        return [
            'nama' => 'required|string|max:100|unique:kategori_buku,nama',
            'deskripsi' => 'nullable|string',
        ];
    }
}