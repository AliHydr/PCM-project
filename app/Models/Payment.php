<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 'date', 'payee', 'currency_id',
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
