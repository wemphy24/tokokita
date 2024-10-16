<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'dn_code',
        'description',
        'date',
        'status_id',
    ];

    public function status() 
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function d_delivery_note() 
    {
        return $this->hasOne(DeliveryNote::class, 'delivery_note_id');
    }
}
