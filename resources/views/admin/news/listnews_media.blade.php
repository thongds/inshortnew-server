@extends('../../layouts.admin')
@section('title','list news')
@section('content')
   <a href="{{url('/admin/addnewsmedia')}}"> <button type="button" class="btn btn-success">Add news</button></a>
   <br><br>
   <table class="table table table-striped">

       <thead>
       <tr>
           <th class="col-xs-2">post title</th>
           <th class="col-xs-3">post content </th>
           <th class="col-xs-2">full link</th>
           <th class="col-xs-2">post image</th>
           <th class="col-xs-2"> link video</th>
           <th class="col-xs-3"> action </th>
       </tr>
       </thead>
       <tbody>

       <tr>
           <?php
           foreach ($news as $data){
               $delete_url =url()->current().'?type=news&delete=true&id='.$data->id;
               $edit_url = url('/').'/admin/addnewsmedia?id='.$data->id;
               if($data->status == 0){
                   $class = "danger";
                   $active_url =url()->current().'?type=news&active=1&id='.$data->id;
                   $status_button = '&nbsp;<a href='.$active_url.' <button type="button" class="btn btn-success">active</button></a>';
               }else{
                   $class = "";
                   $active_url =url()->current().'?type=news&active=0&id='.$data->id;
                   $status_button = '&nbsp;<a href='.$active_url.' <button type="button" class="btn btn-warning">deactive</button></a>';
               }

               echo'<tr class ="'.$class.'">';
               echo '<td>'.$data->post_title.'</td>';
               echo '<td>'.$data->post_content.'</td>';
               echo '<td><a href="'.$data->full_link.'">'.$data->full_link.'</a></td>';
               echo '<td> <img src="'.$data->post_image.'"style="width:80px;height:80px;"></td>';
               echo '<td><a href="'.$data->video_link.'">'.$data->video_link.'</a></td>';
               echo '<td><a href='.$edit_url.'><button type="button" class="btn btn-success">edit</button></a><br><br><a href='.$delete_url.'><button type="button" class="btn btn-danger">delete</button></a></br><br>
                        '.$status_button.'
                    </td>';
               echo '</tr>';
           }
           ?>
       </tr>
       </tbody>
   </table>
{{$news->links()}}



@endsection