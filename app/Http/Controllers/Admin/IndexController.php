<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show(){
        //$date = array('title'=>'Новове значение');
        //return view('Default.template',$date);
        //return view('Default.template')-> with('title','Zi;berg lox)');

        /*    $viwe =  view('Default.template');

            $viwe -> with('title','(Параметр №1)');
            $viwe -> with('title1','(Параметр №2)');
            $viwe -> with('title2','(Параметр №3)');
            return $view;
        */
        // Проверка на существование
        if (view()->exists('Default.index')){
            /*
            viwe()->name('Default.template','myviwe');
            viwe()->of(myviwe)->withTitle('(Параметр №1)');
           */
           $viwe =  view('Default.index',['title'=>'Новове значение'])->render();
           echo $viwe;
           return;
            /*return view('Default.template')->withTitle('(Параметр №1)');*/
        }
        abort(404);
    }
}
