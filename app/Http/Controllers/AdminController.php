<?php
/**
 * Created by PhpStorm.
 * User: ssd
 * Date: 8/23/16
 * Time: 2:45 PM
 */

namespace App\Http\Controllers;


class AdminController extends Controller{

    public function index(){
        return view('admin.index');
    }
    public function login(){
        return view('admin.login');
    }
}