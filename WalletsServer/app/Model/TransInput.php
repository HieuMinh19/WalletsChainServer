<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransInput extends Model
{
    //
    protected $table = 'trans_input';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = true;
    protected $fillable = ['tx_hash','tx_index','strip_sign','block_hash','created_at','updated_at'];
}
