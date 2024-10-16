<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'po_code',
        'description',
        'date',
        'status_id',
    ];

    public function status() 
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function d_purchase_order() 
    {
        return $this->hasMany(PurchaseOrder::class, 'purchase_order_id');
    }

    public function d_delivery_note() 
    {
        return $this->hasMany(PurchaseOrder::class, 'purchase_order_id');
    }
}
