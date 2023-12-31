<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 'date', 'payer', 'currency_id',
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}

