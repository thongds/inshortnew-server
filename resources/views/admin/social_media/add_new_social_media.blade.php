@extends('../../layouts.admin')
@section('title','news media')
@section('content')
    <?php echo Form::open(array('route'=>'addNewSocialMedia','method' => 'post','enctype'=>'multipart/form-data'))?>
    <div class="form-group">
        <label for="exampleInputEmail1">Post title *</label>
        <input type="text" class="form-control" name="title" value="<?php echo $social_data !=null ?$social_data[0]->title:''; ?>" id="exampleInputEmail1" placeholder="post title">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Post image url (*) code separate --inshortnew-- </label>
        <textarea name="post_image_url"  class="form-control" rows="6"><?php echo $social_data !=null ?$social_data[0]->post_image_url:''; ?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Full link *</label>
        <input name="full_link" value="<?php echo $social_data !=null ?$social_data[0]->full_link:''; ?>" class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Video link</label>
        <input name="video_link" value="<?php echo $social_data !=null ?$social_data[0]->video_link:''; ?>" class="form-control" >
    </div>
    <label > Fanpage</label>
    <select class="form-control" name="fanpage_id">
        <?php
            $selected_id = $social_data!=null?$social_data[0]->fan_page_id:-1;
        foreach ($fanpage as $data){
            $selected_text = '';
            if($selected_id == $data->id){
                $selected_text = "selected";
                echo ' <option value="'.$data->id.'"  selected="'.$selected_text.'">'.$data->name.'</option>';
            }else{
                echo ' <option value="'.$data->id.'" >'.$data->name.'</option>';
            }
        }
        ?>

    </select>
    <br>
    <div class="checkbox">
        <label>
            <input type="checkbox" name ="is_video" <?php echo $social_data !=null && $social_data[0]->is_video ==1  ?"checked":''; ?> > Is video
        </label>
    </div>
    <br>
    <div class="checkbox">
        <label>
            <input type="checkbox" name ="status" checked> active
        </label>
    </div>
    <br>
    <input type="hidden" name="id" value="<?php echo $social_data!=null?$social_data[0]->id:'' ?>">
    <button type="submit" class="btn btn-success">Submit</button>
    <?php echo Form::close()?>
@endsection