<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_code',
        'category_id',
        'name',
        'stock',
        'price',
        'min_stock',
        'max_stock',
    ];

    public function category() 
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function d_purchase_order() 
    {
        return $this->hasMany(Item::class, 'item_id');
    }
}
