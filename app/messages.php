<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{


    protected $fillable = [
        'id', 'conversation_id', 'user_id', 'message','created_at', 'updated_at'
    ];

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}