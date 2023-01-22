<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function show(Request $request) {
        $user = Auth::id();
        dump($user);
        return view('welcome');
    }
}
