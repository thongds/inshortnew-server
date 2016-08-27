<?php

/**
 * Created by PhpStorm.
 * User: ssd
 * Date: 8/26/16
 * Time: 4:23 PM
 */
namespace App\Http\Controllers\Api\v1;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class NewsController extends Controller{

    public function getNews(){
       $data =DB::table('news')->where('status',1)->get();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}