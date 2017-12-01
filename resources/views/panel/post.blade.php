<style>
td:hover {
  color: blue;
}
</style>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@extends('panel1')
@section('content')

<div style="margin-left:0%">

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1> List Posts </h1>
      <!-- <div class="pull-right">
        <a href="{{url('panel/adds')}}" class="btn btn-success">add user</a>
      </div> -->

      <table class="table">
        <head>
        <tr>
          <th> title  </th>
          <th>slug  </th>
          <th>author</th>
          <th>Date</th>
        </tr>
      </head>
      <body>
        @foreach($tes as $cv)

        <tr>
          <td> {{$cv->title}} </td>
          <td > {{$cv->slug}} </td>
          <td>{{$cv->author->name}}</td>
          <td>{{$cv->created_at}}</td>

          <td>
            <a href="{{url('/' .$cv->slug)}}" target="_blank" class="btn btn-primary">Details</a>
            <a href="{{url('panel/post/' .$cv->id)}}" class="btn btn-danger">Delete</a>
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
