@extends('layouts.layouts')
@section('content')
<table class="table table-dark dev_tab_1">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">email</th>        
            <th scope="col">massage</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $data)
          <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->massage}}</td>
                
                <td>
                  <a href="{{url('/massage_view_admin/'.$data->id)}}">
                    <button type="button" class="btn btn-success">View</button>
                  </a>
                  <a href="{{url('/massage_delete_admin/'.$data->id)}}">
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