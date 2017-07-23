<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    //
    public function show(){
        if (view()->exists('Default.about')){

            $page =  DB::select("Select `name`, `text` from `pages` where alias = :alias",['alias'=>'about']);
            return view('Default.about',['title'=>'Hello World','page'=>$page[0]]);
        }
        abort(404);
    }
}
