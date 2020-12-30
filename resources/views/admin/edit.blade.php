@extends('layouts.layouts')
@section('content')
<form  action="{{url('/update_admin/'.$data->id)}}" method="post" class="dev_form_style">
  @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" name='name' value="{{$data->name}}" class="form-control" >
    </div>
    <div class="form-group">
        <label>price</label>
        <input type="text" name='price' value="{{$data->price}}" class="form-control" >
    </div>
    <div class="form-group">
        <label>weight</label>
        <input type="text" name='weight' value="{{$data->weight}}" class="form-control" >
    </div>
    <div class="form-group">
        <label>image</label>
        <input type="text" name='image' value="{{$data->image}}" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
  </form>

  <style>
    .dev_form_style{
      width:90%;
      margin:0 auto;
    }
    </style>
@endsection