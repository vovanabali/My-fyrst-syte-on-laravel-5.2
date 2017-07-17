<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    //
    public function show(){
        if (view()->exists('Default.about')){
           /* $viwe =  view('Default.about',['title'=>'Новове значение'])->render();
            echo $viwe;
            return;*/

           //return viwe('Default.about')->withTitle('Новове значение');

            /*$view = view('Default.about')->withTitle('Новове значение')->render();
            return (new Response($view))->header('Content-Type','newType');*/
            //return response()->view('Default.about',['title'=>'New Title']);

            //return response()->download('..\gulpfile.js');
        }
        abort(404);
    }
}
