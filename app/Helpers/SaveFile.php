<?php

namespace App\Helpers;

use App\Helpers\Contracts\SaveStr;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaveEloquentORM implements SaveStr
{
    public static function save(Request $request, User $user)
    {
        $obj = new self();
        $data = $obj->checkData($request->only(['name', 'text']));
        $str = $data['name']. ' | '.$data['text'];
        Storage::prepend('str.txt', $str);

    }

    public function checkData($array)
    {
        return $array;
    }
}
