<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
   /* protected $request;
    public function __construct(Request $request){
        $this->request = $request;
    }*/

    public function show(Request $request,$id=false){

        //print_r(/*$this->request*/$request->all());

        //print_r(/*$this->request*/$request->only('name','email'));
        //echo '<h1 style="margin-top:100px">'.$request->input('name','').'</h1>';

        /*if($request->has('name')){
            echo '<h1 style="margin-top:100px">'.$request->input('name','').'</h1>';
        }*/

        //echo '<h1 style="margin-top:100px">'.$request->name.'</h1>';

        /*if($request->is('contact/*')){
            echo '<h1 style="margin-top:100px">'.$request->path().'</h1>';
        }*/

        //echo '<h1 style="margin-top:100px">'.$request->url().'</h1>';

        //echo '<h1 style="margin-top:100px">'.$request->method().'</h1>';

        if($request->isMethod('post')){

            ////
            /// validation
            ////
            //echo '<h1 style="margin-top:100px">'.$request->method().'</h1>';
            //$request->flash();
            //$request->flashOnly('name','text');
            //$request->flashExcept('name');
            //return redirect()->route('contact');

            return redirect()->route('contact')->withInput();
        }

        if (view()->exists('Default.contact')){
            $viwe =  view('Default.contact',['title'=>'Contact'])->render();
            echo $viwe;
            return;
        }
        abort(404);
    }
}
