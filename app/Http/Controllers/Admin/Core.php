<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class Core extends Controller
{
    protected static $articles;
    //
    //List materials
    public function getArticles(Request $request){

        /*
        $country = Country::find(1);
        $user = User::find(2);
        $country->user()->associate($user); //Изменяем связанные записи
        $country->save();
         */
        /*
        $articles = Article::where('id','<','8')->get();
        $user = Article::find(1);
        foreach ($articles as $article){
            $article->user()->associate($user);
            $article->save();
        }
        */
        /*
        $user = User::find(2);
        $role_id = Role::find(2)->id;
        //$user->roles()->attach($role_id);
        $user->roles()->detach($role_id);
        */
        /*
        $article = Article::find(10);
        echo($article->name);
        */

        $article = Article::find(16);
        $article->name = '|';
        $article->save();
        echo $article->name;
        return;
    }

    public static function addArticles($arr){
        return self::$articles[] = $arr;
    }
    //Material
    public function getArticle($id){
        echo 'Ответ - '.$id;
    }

    public function getContact(){
/*        if (view()->exists('Default.contact')){
            $viwe =  view('Default.contact',['title'=>'Новове значение'])->render();
            echo $viwe;
            return;
        }
        abort(404);*/
    }
}
