<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateKategoriBukuRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array {
        $id = $this->route('kategori'); // param resource
        return [
             'nama' => [
                'required','string','max:100',
                Rule::unique('kategori_buku', 'nama')->ignore($id), // ⬅️ ini yang penting
            ],
            'deskripsi' => 'nullable|string',
        ];
    }
}
