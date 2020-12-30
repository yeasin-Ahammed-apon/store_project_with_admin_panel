@extends('layouts.layouts')
@section('content')

  <div class="card mb-3" style="max-width:90%;">
    <div class="row no-gutters">
      <div class="col-md-4">
      <img src="{{$data->image}}" class="card-img" alt="{{$data->name}}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$data->name}}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <button class="btn btn-primary" type="submit">price:{{$data->price}} tk</button>
        <button class="btn btn-success" type="submit">weight:{{$data->weight}}</button>
      </div>
    </div>
  </div>
  <style>
.card{
    margin-top:30px;
    
    margin: 0 auto;
    }

  </style>
@endsection