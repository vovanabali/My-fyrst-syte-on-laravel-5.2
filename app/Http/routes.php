<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'home','uses'=>'Admin\IndexController@show']);

/*::get('/page/{id}',function($id) {

    echo "<pre>";

    echo $id;
    //print_r($_ENV);
    //echo Config::get('app.locale');

    echo "</pre>";

});//->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+']);

Route::post('/comments',function (){
    print_r($_POST);
    return;
});

Route::match(['get','post'],'/comments',function (){
    print_r($_POST);
    return;
});

Route::any('/comments',function (){
    print_r($_POST);
    return;
});


Route::group(['prefix'=>'admin'],function (){
    Route::get('page/create',function (){
       return redirect()->route('home') ;
    });

    Route::get('page/edit',function (){
        echo 'page/edit';
    });
});
Route::get('/about','FirstController@show');
*/

Route::get('/about',['uses'=>'Admin\AboutController@show','as'=>'about']);


Route::get('/articles',['uses'=>'Admin\Core@getArticles', 'as'=>'articles']);


Route::get('/article/{page}',['uses'=>'Admin\Core@getArticle','as'=>'article'/*,'middleware'=>'mymiddle'*/]); //Использывание посредника

Route::get('/contact',['uses'=>'Admin\ContactController@show', 'as'=>'contact']);

Route::post('/contact',['uses'=>'Admin\ContactController@store']);
//list pages
//Route::resource('/pages','Admin\CoreResurse');

//Route::controller('/pages','PageController',['getCreate'=>'pages.create']);