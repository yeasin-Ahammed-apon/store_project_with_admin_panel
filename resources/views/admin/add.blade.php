@extends('layouts.layouts')
@section('content')
<form  action="{{url('/create_admin')}}" method="post" class="dev_form_style">
  @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" name='name' class="form-control" >
    </div>
    <div class="form-group">
        <label>price</label>
        <input type="text" name='price' class="form-control" >
    </div>
    <div class="form-group">
        <label>weight</label>
        <input type="text" name='weight' class="form-control" >
    </div>
    <div class="form-group">
        <label>image</label>
        <input type="text" name='image' class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">ADD</button>
  </form>

  <style>
    .dev_form_style{
      width:90%;
      margin:0 auto;
    }
    </style>
@endsection