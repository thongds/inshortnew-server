<?php
/**
 * Created by PhpStorm.
 * User: ssd
 * Date: 8/26/16
 * Time: 5:10 PM
 */

namespace App\Http\Controllers\Api\v1;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class SocialController extends Controller{
    public function getSocial(){
        $data = DB::table('social_media')->where('status',1)->get();
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }
}