<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use App\Model\TransOutput;
use App\Model\User;

class UserServices
{
    public function getHistory($userData, $type)
    {
        $result = User::select('users.email', 'out.amount', 'b.transaction',
            'b.timestamp', 'out.public_key_from', 'out.public_key_to')
            ->join('trans_output as out', 'users.public_key', '=', 'out.public_key_to')
            ->join('blocks as b', 'b.hash_data', '=', 'out.block_hash');

        if($type == TRANSACTION_RECEIVE_TYPE){
            //receive transaction
            $result->where('out.public_key_to', $userData->public_key);
        }else{
            $result->where('out.public_key_from', $userData->public_key);
        }


        return $result->get();
    }
}
