@extends('layouts.layouts')
@section('content')

@if (session()->pull('key'))
<div class="alert alert-info" role="alert">
  Massage send sucessfully
</div>
@endif



<form class="dev_form_style" action="{{url('/massage')}}" method='POST'>
  @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" name="massage" id="exampleFormControlTextarea1" rows="3"></textarea>
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