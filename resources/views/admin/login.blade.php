@extends('layouts.layouts')
@section('content')
<form  action="{{url('/check')}}" method="get" class="dev_form_style">
  @csrf
    <div class="form-group">
      <label>Email address</label>
      <input type="text" name='name' class="form-control" id="exampleInputEmail1" >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <style>
    .dev_form_style{
      width:90%;
      margin:0 auto;
    }
    </style>
@endsection