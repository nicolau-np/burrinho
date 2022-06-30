<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = "mensagems";

    protected $fillable = [
        'send_id',
        'receive_id',
        'message',
        'status',
    ];

    public function send_user(){
        return $this->belongsTo(User::class, 'send_id', 'id');
    }

    public function receive_user(){
        return $this->belongsTo(User::class, 'receive_id', 'id');
    }
}