<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax',
        'discount',
        'total',
        'status',
        'customer_id',
    ];

    public function customers()
    {
       return $this->belongsTo(Customer::class);
    }

    public function orderItems()
    {
       return $this->belongsTo(Order::class);
    }
    
}
