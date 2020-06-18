<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
 
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = true;
    protected $fillable = ['email','password','public_key','created_at','updated_at'];
    protected $hidden = [ 'password', 'remember_token',];
    
}
