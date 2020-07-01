<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransOutput extends Model
{
    //
    protected $table = 'trans_output';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'amount',
        'tx_index',
        'public_key_from',
        'block_hash',
        'public_key_to'
    ];
}
