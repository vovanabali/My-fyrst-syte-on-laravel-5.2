<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class AdminController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    //
    public function show(Request $request){
        $user = Auth::user();
        //$user = $request->user();


        if(Auth::viaRemember()){
            echo 'yes';
        }

        if(!Auth::check()){
            $user = User::find(9);

           /* Auth::guard('web')->login($user);
            Auth::guard('web')->logout();*/

           Auth::loginUsingId(9);

            // return redirect('/login');
        }

        dump(Auth::id());
        return view('welcome');
    }
}
