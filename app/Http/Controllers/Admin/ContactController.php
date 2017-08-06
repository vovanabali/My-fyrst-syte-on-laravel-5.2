<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use  App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function store(Request $request,$id=false){
        if($request->isMethod('post')){

            //Пользывательские сообщения
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
            ];
            $validator = Validator::make($request->all(),[
                'name'=>'sometime|required'//Если поле есть то проверять
            ],$messages);

            $validator->sometimes('email','required',function ($input){
                return strlen($input->name) >= 10;
            });

            if($validator->fails()){
               return redirect()->route('contact')->withErrors($validator)->withInput();
            }
        }
        return view('Default.contact',['title'=>'Contact']);
    }
    public function show(){
        return view('Default.contact',['title'=>'Contact']);
    }

}
