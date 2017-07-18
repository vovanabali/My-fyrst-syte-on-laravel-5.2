<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('articles')){
            Schema::table('articles', function (Blueprint $table) {
                //
                if(!Schema::hasColumn('alias')){
                    $table->string('alias',100);//->default('Значение по умолчанию');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
            $table->dropColumn('alias');
        });
    }
}
