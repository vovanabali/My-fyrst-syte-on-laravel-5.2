<?php
/**
 * Created by PhpStorm.
 * User: Филин Вячеслав
 * Date: 09.07.2017
 * Time: 20:24
 */

namespace App\Http\Controllers; // Указыветься расположение данного файла

use App\Http\Controllers\Controller;

class FirstController extends Controller{

    public function show($id)
    {
       echo $id;
    }
}