<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact',
        'Address',
        'state',
        'city',
        'country',
        'seller_id',
    ];

    public function seller()
    {
       return $this->belongsTo(Seller::class);
    }
}
