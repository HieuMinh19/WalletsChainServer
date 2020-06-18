<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransOutput extends Model
{
    //
    protected $table = 'trans_input';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = true;
    protected $fillable = ['amount','tx_index','public_key','block_hash','created_at','updated_at'];
}
