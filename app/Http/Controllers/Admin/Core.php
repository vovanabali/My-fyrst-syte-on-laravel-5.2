<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Core extends Controller
{
    //
    //List materials
    public function getArticles(){

    }

    //Material
    public function getArticle(){

    }

    public function getContact(){
        if (view()->exists('Default.contact')){
            $viwe =  view('Default.contact',['title'=>'Новове значение'])->render();
            echo $viwe;
            return;
        }
        abort(404);
    }
}
