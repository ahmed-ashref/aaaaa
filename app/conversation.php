<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conversation extends Model
{


    protected $fillable = [
        'id ', 'sender_id', 'receiver_id', 'title ', 'sender_viewed', 'receiver_viewed', 'created_at', 'updated_at'
    ];

    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}