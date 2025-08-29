<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBukuRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array {
        return [
            'kategori_id'  => 'required|exists:kategori_buku,id',
            'judul'        => 'required|string|max:200',
            'penulis'      => 'nullable|string|max:150',
            'tahun_terbit' => 'nullable|digits:4',
            'stok'         => 'required|integer|min:0',
            'cover'        => 'nullable|image|max:2048', // jpg/png/webp dsb
            'deskripsi'    => 'nullable|string',
        ];
    }
}