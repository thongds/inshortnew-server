<?php
/**
 * Created by PhpStorm.
 * User: ssd
 * Date: 8/23/16
 * Time: 2:45 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller{

    public function index(){
        return view('admin.index');
    }
    public function login(Request $request){
        if($request->isMethod('post')){
            $email = $request->input('inputEmail');
            $password = $request->input('inputPassword');
            var_dump($email);
            var_dump($password);
        }

        return view('admin.login');
    }
    public function social(Request $request){
        return view('admin.social');
    }
    public function news(Request $request){
        return view('admin.news');
    }
}