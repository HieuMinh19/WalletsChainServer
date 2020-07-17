<?php

namespace App\Model;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{

    use Notifiable;

    public $timestamps = true;
    protected $fillable = [
        'email',
        'name',
        'password',
        'public_key',
        'created_at',
        'updated_at'];
    protected $hidden = [ 'password', 'remember_token',];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
