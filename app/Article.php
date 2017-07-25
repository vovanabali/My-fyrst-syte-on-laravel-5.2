<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes; //Мягкое удаление
    //

    protected $fillable = ['name','text']; // Разрешаем добовление записей в данные столбцы
    protected $guarded = []; // те поля в которые мы запрещаем добовлять записи

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
