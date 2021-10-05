<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function contact(Request $request)
    {
        $this -> validate($request, Person::$rules);
        $form = $request->all();
        Person::create($form);
        return view('thanks');
    }
}
