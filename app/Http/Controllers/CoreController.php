<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function rel_1_1() {

        $user = User::find(1);
        dd($user->articles[0]->user->roles[0]->users);
        return 'hhh';
    }
}
