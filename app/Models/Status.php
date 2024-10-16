<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function purchase_order() 
    {
        return $this->hasMany(Status::class, 'status_id');
    }

    public function delivery_note() 
    {
        return $this->hasMany(Status::class, 'status_id');
    }
}
