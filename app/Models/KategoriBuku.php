<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    protected $table = 'kategori_buku';
    protected $fillable = ['nama','slug','deskripsi'];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'kategori_id');
    }
}

