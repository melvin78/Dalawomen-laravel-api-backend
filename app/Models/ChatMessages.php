<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
    use HasFactory;

    protected $table='chat_messages';

    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
