<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'status',
    ];

    /**
     * Define the relationship with the sender alumni.
     */
    public function sender()
    {
        return $this->belongsTo(Alum::class, 'sender_id');
    }

    /**
     * Define the relationship with the receiver alumni.
     */
    public function receiver()
    {
        return $this->belongsTo(Alum::class, 'receiver_id');
    }
}