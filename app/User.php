<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Один к одному
    public function country(){ // Указывает фреймворку что модель конкретного пользывателя связываеться с моделью конкретной страны
        return $this->hasOne('App\Country','user_id','id');// Определена связь между моделью User и App\Country. Если имя класса не совпадет с именем вешнего ключа т.е user_id == user то через запятую необходимо указать имя поля внешнего ключа. Третий параметр это имя первичного ключа

    }

    //Один ко ногим
    public function articles(){
        return $this->hasMany('App\Article');
    }

    //Многие ко многим
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
}
