<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kostum extends Model
{
    use HasFactory;

    protected $table = 'kostum';
    protected $guarded = ['id'];

    public function kategori() : BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function transaksi() : HasMany
    {
        return $this->hasMany(Transaksi::class, 'id_kostum', 'id');
    }
}
