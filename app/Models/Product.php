<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'unit_price',
        'quantity',
        'total_cost',
        'user_id'
    ];

    public function setTotalCostAttribute($value)
    {
        $this->attributes['total_cost'] = $this->unit_price * $this->quantity;
    }
}
