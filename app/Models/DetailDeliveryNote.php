<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDeliveryNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'delivery_note_id',
        'purchase_order_id',
        'item_id',
        'received_qty',
        'qty',
        'supplier_id',
    ];

    public function delivery_note() 
    {
        return $this->belongsTo(DeliveryNote::class, 'delivery_note_id', 'id');
    }

    public function purchase_order() 
    {
        return $this->belongsTo(PurchaseOrder::class, 'purchase_order_id', 'id');
    }

    public function item() 
    {
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }

    public function supplier() 
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
