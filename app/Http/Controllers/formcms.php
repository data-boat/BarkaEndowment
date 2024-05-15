<?php

namespace App\Http\Controllers;

use App\Models\form;

use Illuminate\Http\Request;

class formcms extends Controller
{
    public function index()
    {
        $form = Form::all();
        return view('formcms/create', ["form" => $form]);
    }
}
