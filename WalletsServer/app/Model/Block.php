<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    //
    protected $table = 'blocks';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = true;
    protected $fillable = ['previous_hash','transacions','hash_data','nonce','timestamp','created_at','updated_at'];
}
