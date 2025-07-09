<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'kd_transaksi',
        'status',
        'tgl_transfer',
        'nim',
        'user_id',
        'tagihan_id'
    ];

    public function tagihan()
    {
        return $this->belongsTo(Tagihan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
