
<style>
td:hover {
  color: blue;
}
</style>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- <div style="margin-left:50%">

<div class="w3-container"> -->
@extends('panel1')
@section('content')
<div style="margin-left:0%">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1> List USers </h1>
      <!-- <div class="pull-right">
        <a href="{{url('panel/adds')}}" class="btn btn-success">add user</a>
      </div> -->

      <table class="table">
        <head>
        <tr>
          <th> Name  </th>
          <th>Email  </th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </head>
      <body>
        @foreach($tes as $cv)

        <tr>
          <td> {{$cv->name}} </td>
          <td > {{$cv->email}} </td>
          <td>{{$cv->created_at}}</td>
          <td>{{$cv->role}}</td>

          <td>
            <a href="" class="btn btn-primary">Details</a>
            <a href="{{url('panel/' .$cv->id. '/edit')}}" class="btn btn-default">Edit</a>
            <a href="{{url('panel/' .$cv->id)}}" class="btn btn-danger">Delete</a>
           </td>

        </tr>
        @endforeach
      </body>
      </table>
  </div>
</div>
</div>
</div>
@endsection
