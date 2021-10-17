<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index', [
            "title" => "Contact"
        ]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'body'=>'required'
        ]);

        $query = DB::table('contacts')->insert([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'body'=>$request->input('body')
        ]);

       if($query){
           return back()->with('success','Message has been added!');
       }
    }

}
