@extends('layouts.layouts')
@section('content')
<table class="table table-dark dev_tab_1">

  <div class="dev_tab_1">
    <a href="{{url('/add_admin')}}" class="btn btn-success btn-lg" role="button" aria-pressed="true">Add New Item</a>
  </div>
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">image</th>        
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">weight</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $data)
          <tr>
                <td>{{$data->id}}</td>
                <td>
                  <img src="{{$data->image}}" class="img-fluid" width="50px" alt="{{$data->image}}" >
                </td>
                <td>{{$data->name}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->weight}}</td>
                <td>
                  <a href="{{url('/view_admin/'.$data->id)}}">
                    <button type="button" class="btn btn-success">View</button>
                  </a>
                  <a href="{{url('/edit_admin/'.$data->id)}}">
                  <button type="button" class="btn btn-primary">Edit</button>
                  </a>
                  <a href="{{url('/delete_admin/'.$data->id)}}">
                  <button type="button" class="btn btn-danger">Delete</button>
                  </a>
                </td>
              </tr>
                @endforeach
    </tbody>
  </table>

  <style>
.dev_tab_1{
    width:90%;
    margin: 0 auto;
}
  </style>
@endsection