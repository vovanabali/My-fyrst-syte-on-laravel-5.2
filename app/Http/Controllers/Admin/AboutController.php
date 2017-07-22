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

            /*$sql = "Select * from `articles` where id = :id";
            $articles =  DB::select($sql,['id'=>2]);*/  // для именования перед именем необходимо поставить двоеточее; иначе просто ?

            //DB::insert("insert into `articles` (name,text) values (?,?)",['test 1','TEXT']);
            //$result = DB::connection()->getPdo()->lastInsertId();

            //$result = DB::update("update `articles` set `name` = ? where `id` = ?", ["test 2",2]);

            //$result = DB::delete("delete from `articles` where `id` = ?",[6]);

            //DB::statement("drop table `articles`");

            //dump($result);


            $articles =  DB::select("Select * from `articles`");

            dump($articles); //dd() после die();

            return view('Default.about')->withTitle('Hello World');
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
