@extends('../../layouts.admin')
@section('title','news media')
@section('content')
<?php echo Form::open(array('route'=>'addNewsMedia','method' => 'post','enctype'=>'multipart/form-data'))?>
<div class="form-group">
    <label for="exampleInputEmail1">Post title *</label>
    <input type="text" class="form-control" name="post_title" id="exampleInputEmail1" placeholder="post title">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Post content *</label>
    <textarea name="post_content" class="form-control" rows="6"></textarea>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Full link *</label>
    <input name="full_link" class="form-control" >
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Video link</label>
    <input name="video_link" class="form-control" >
</div>
<div class="form-group">
    <label for="exampleInputPassword1">post image </label>
    <input type="text"   class="form-control" name="post_image"  id="exampleInputPassword1"/>
</div>
<label > Category </label>
<select class="form-control" name="category_id">
    <?php
    foreach ($category as $data){
        echo ' <option value="'.$data->id.'">'.$data->category_name.'</option>';
    }
    ?>
</select>
<label > Newspaper</label>
<select class="form-control" name="newspaper_id">
    <?php
        foreach ($newspaper as $data){
            echo ' <option value="'.$data->id.'">'.$data->newspaper_name.'</option>';
        }
    ?>

</select>
<br>
<div class="checkbox">
    <label>
        <input type="checkbox" name ="is_video" > Is video
    </label>
</div>
<br>
<div class="checkbox">
    <label>
        <input type="checkbox" name ="status" checked> active
    </label>
</div>
<br>
<button type="submit" class="btn btn-success">Submit</button>
<?php echo Form::close()?>
@endsection