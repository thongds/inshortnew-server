@extends('../layouts.admin')
@section('title','home')
@section('content')
  <?php
    echo url()->full();
  ?>
@endsection