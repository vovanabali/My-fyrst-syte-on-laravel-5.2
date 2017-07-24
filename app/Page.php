<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    //protected $table = 'articles';
    protected $primaryKey = 'id';
    public $incrementing = false; //Есть ли автоинкрементное поле
    public $timestamps =  false; // Время создания и обновления
}
