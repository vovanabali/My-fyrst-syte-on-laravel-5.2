<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    public function show(){
        if (view()->exists('Default.about')){
            $viwe =  view('Default.about',['title'=>'Новове значение'])->render();
            echo $viwe;
            return;
        }
        abort(404);
    }
}
