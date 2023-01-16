<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{

    public function show(Request $request, $id = FALSE)
    {

        return view('default.contact', ['title' => 'Contacts']);


    }

    public function store(Requests\ContactRequest $request)
    {
        dump($request->validated());

        return view('default.contact', ['title' => 'Contacts']);
    }

}
