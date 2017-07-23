<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Core extends Controller
{
    protected static $articles;
    //
    //List materials
    public function getArticles(){

    }

    public static function addArticles($arr){
        return self::$articles[] = $arr;
    }
    //Material
    public function getArticle(){
        //$articles = DB::table('articles')->get(); // Все записи
        //$articles = DB::table('articles')->first(); // Первое поле
        //$articles = DB::table('articles')->value('name'); // первое поле и имя столбца
        /*DB::table('articles')->chunk(2,function ($articles){ // Выберает данные из бд частями
            foreach ($articles as $article){ // запсываем выбранные данне в переменную
                Core::addArticles($article); // передаем выбранные данные в функцию
            }
        });
        //dump($articles);
        dump(self::$articles);*/

        //$articles = DB::table('articles')->pluck('name'); // Возвращает все записи по определенному полю
        //$articles = DB::table('articles')->count(); // Количество записей в таблице
        //$articles = DB::table('articles')->max('id');// Максимальное значение с опеделенного поля
        //$articles = DB::table('articles')->select('name','id','text')->get();
        //$articles = DB::table('articles')->distinct()->select('name')->get();// Возвращет только уникальные значения
        /*$query = DB::table('articles')->select('name');
        ///
        /// Код
        ///
        $articles = $query->addSelect('text' )->get();*/
/*        $articles = DB::table('articles')->select('id','name')
                                                                ->where('id','=',3)
                                                                ->where('id','=',5,'or')
                                                                ->get();*/

/*        $articles = DB::table('articles')->select('id','name')->where(
            [
                ['id','=',2],
                ['id','=',3,'or']
            ])
            ->get();*/
        //$articles = DB::table('articles')->select('id','name')->whereBetween('id',[1,5])->get(); // whereNotBetween
        //$articles = DB::table('articles')->select('id','name')->whereIn('id',[1,5,3,10])->get();// whereNotIn
        //$articles = DB::table('articles')->select('id','name')->groupBy('name')->get();
        //$articles = DB::table('articles')->select('id','name')->take(4)->get();
        //dump($articles);

/*        DB::table('articles')->insert([
            [
                'name'=>'Проба 23.07.17 №1', 'text'=>'Hello #1', 'img'=>1
            ],
            [
                'name'=>'Проба 23.07.17 №2', 'text'=>'Hello #2','img'=>2
            ]
        ]);*/

        /*$id = DB::table('articles')->insertGetId(
            [
            'name'=>'Проба 23.07.17 №1', 'text'=>'Hello #1', 'img'=>1
            ]);
        dump($id);*/

        /*$result = DB::table('articles')->where('id',14)->update(['name'=>'Hello World']);
        dump($result);*/

        /*$result = DB::table('articles')->where('id',14)->delete();
        dump($result);*/
    }

    public function getContact($id){
        echo 'Ответ - '.$id;
/*        if (view()->exists('Default.contact')){
            $viwe =  view('Default.contact',['title'=>'Новове значение'])->render();
            echo $viwe;
            return;
        }
        abort(404);*/
    }
}
