<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use  App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function store(ContactRequest $request,$id=false){
        if($request->isMethod('post')){

            /*$messages = [];
            $validator = Validator::make($request->all(),[
                'name'=>'required'
            ],$messages);

            if($validator->fails()){
               return redirect()->route('contact')->withErrors($validator)->withInput();
            }*/
        }
        return view('Default.contact',['title'=>'Contact']);
    }
    public function show(){
        return view('Default.contact',['title'=>'Contact']);
    }

}
