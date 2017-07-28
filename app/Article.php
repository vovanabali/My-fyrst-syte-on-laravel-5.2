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

    protected $casts = [
        'name'=>'string',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    //Метод читатеть во время вызова свойства name у обьекта Article выполниться данна шляпа
    public function getNameAttribute($value){
       // return 'Погнали ебана рот - '.$value.' Не лезь она тебя сожрет';
        return $value;
    }

    //Метод преобразователь
    public function setNameAttribute($value){
        $this->attributes['name'] = 'Погнали ебана рот - '.$value;
    }
}
