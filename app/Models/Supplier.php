<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    public function d_purchase_order() 
    {
        return $this->hasMany(Supplier::class, 'supplier_id');
    }

    public function d_delivery_note() 
    {
        return $this->hasOne(Supplier::class, 'supplier_id');
    }
}
