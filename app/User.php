<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "usuarios";

    protected $fillable = [
        'name',
        'email',
        'password',
        'morada',
        'phone',
        'status',
    ];

    public function send_messagems()
    {
        return $this->hasMany(Mensagem::class, 'send_id', 'id');
    }

    public function receive_messagems()
    {
        return $this->hasMany(Mensagem::class, 'receive_id', 'id');
    }
}