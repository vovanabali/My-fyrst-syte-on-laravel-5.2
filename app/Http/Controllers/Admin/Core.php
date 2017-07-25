<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Core extends Controller
{
    protected static $articles;
    //
    //List materials
    public function getArticles(Request $request){

        /*Article::create(
    [
        'name'=>'Hello World',
        'text'=>'create'
    ]
);*/

        /*$articlew = Article::firstOrCreate( // Если запись существует то запись не будет создана
            [
                'name'=>'Hello World',
                'text'=>'firstOrCreate'
            ]
        );
        dump($articlew);
        */

        /*
         * // Если существует запись то не создает иначае создает подготовленную модель для бобовления в БД
        $newArticle = Article::firsOtNew(
            [
                'name'=>'Hello World',
                'text'=>'firstOrCreate'
            ]
        );
        $newArticle->save();
        */

        //Удаление записей
        /*$article = Article::find(22);
        $article->delete();*/

        /*
        Article::destroy(21);
        Article::destroy([20,19]);
        */

        //Article::where('id','>',3)->delete();


        /*$article = Article::find(3);
        $article->delete();*/


       /*
        $articles = Article::withTrashed()->get();
        $articles = Article::withTrashed()->restore(); //Возвращаем все записи и востанавливаем удаленные
        $articles = Article::onlyTrashed()->restore(); // Возвращает только удаленные записи и востанавливает их
       */
        /*
        foreach ($articles as $article){
            if($article->trashed()){
                echo $article->name.' Удалена <br>';
                $article->restore(); // Вотанавливаем удаленные записи
            }else{
                echo 'Не удалена <br>';
            }
        }*/
        $article = Article::find(3);
        $article->forceDelete();
        $articles = Article::all();
        dump($articles);

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
