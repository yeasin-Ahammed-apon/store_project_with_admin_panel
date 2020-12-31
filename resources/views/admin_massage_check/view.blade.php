@extends('layouts.layouts')
@section('content')

<div class="card">
    <div class="card-header">
      Full Massage
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$data->email}}</h5>
      <p class="card-text">{{$data->massage}}</p>
      <a href="{{url('/massage_delete_admin/'.$data->id)}}">
        <button type="button" class="btn btn-danger">Delete</button>
        </a>
    </div>
  </div>
  <style>
.card{
    margin-top:30px;
    width:90%;
    margin: 0 auto;
    }

  </style>
@endsection