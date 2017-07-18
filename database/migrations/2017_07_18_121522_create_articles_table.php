<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //создаем
    {
        //
        Schema::create('articles', function (Blueprint $table) {
            //$table->engine = 'InnoDB'; //Когда нужно использывать определенный движок
            $table->increments('id');
            $table->string('name',100);//varchar 100
            $table->text('text');//text
            $table->string('img',255);//varchar 255
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//удаляем
    {
        //
        Schema::drop('articles');
    }
}
