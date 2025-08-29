<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = [
        'kategori_id','judul','penulis','tahun_terbit','stok','cover_path','deskripsi'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class, 'kategori_id');
    }
}