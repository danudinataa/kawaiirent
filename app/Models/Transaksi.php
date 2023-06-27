<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $guard = ['id'];

    public function detailTransaksi() : HasOne {
        return $this->hasOne(DetailTransaksi::class, 'id_transaksi', 'id');
    }
    
    public function kostum() : BelongsTo {
        return $this->belongsTo(Kostum::class, 'id_kostum', 'id');
    }
    
    public function user() : BelongsTo {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
