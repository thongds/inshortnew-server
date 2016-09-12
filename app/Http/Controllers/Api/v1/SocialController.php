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
        $social_media ='social_media';
        $fan_page ='fan_page';
        $social_info = 'social_info';
        $data = DB::table($social_media)->join($fan_page,$social_media.'.fan_page_id','=',$fan_page.'.id')
            ->join($social_info,$social_info.'.id','=',$fan_page.'.social_info_id')
            ->select($social_media.'.title',$social_media.'.post_image_url',$social_media.'.separate_image_tag',$social_media.'.is_video'
                ,$social_media.'.full_link',$social_media.'.video_link',$fan_page.'.name as fanpage_name'
                ,$fan_page.'.logo as fanpage_logo',
                $social_info.'.name as social_name',$social_info.'.logo as social_logo',$social_info.'.color_tag',$social_info.'.video_tag')
            ->where([['social_media.status',1],['fan_page.status',1],['social_info.status',1]])->orderBy('created','desc')->get();
        echo json_encode($data);
    }
}