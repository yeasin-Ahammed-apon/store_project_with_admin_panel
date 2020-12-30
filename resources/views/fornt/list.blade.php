@extends('layouts.layouts')
@section('content')

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($data as $data)
    
    <div class="col">
      <div class="card">
        <img src="{{$data->image}}" class="card-img-top img-fluid" alt="{{$data->image}}">
        <div class="card-body">
          <h5 class="card-title">{{$data->name}}</h5>
          <button class="btn btn-primary" type="submit">price:{{$data->price}} tk</button>
          <button class="btn btn-success" type="submit">weight:{{$data->weight}}</button>
          <a href="{{url('/view/'.$data->id)}}">
          <button class="btn btn-danger btn_margin" type="button">View more details</button>
          </a>
         

        </div>
      </div>
    </div>
    @endforeach
  </div>

  <style>
.row{
    width:90%;
    margin: 0 auto;
}
.btn_margin{
    margin-top:10px;
}
  </style>
@endsection