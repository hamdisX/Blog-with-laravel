<style>
select#soflow  {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   /*margin: 20px;*/
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}
</style>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('panel1')
@section('content')

<div style="margin-left:0%">
<div class="container">
  <div class="row">
    <div class="col-md-6">

      <form action="{{url('panel/' .$ecv->id)}}" method="post">
        <input type="hidden" name="_method" value="PUT">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for=""> name</label>
          <input type="text" name="name" class="form-control" value="{{$ecv->name}}" readonly>
        </div>
        <div class="form-group">
          <label for="">email</label>
          <input type="email" name="email" class="form-control" value="{{$ecv->email}}" readonly>
        </div>
        <div class="form-group">
          <label for=""> role</label><br>

        <select name="role" id="soflow" >

<option value="author">author</option>
<option value="admin" >admin</option>
<option value="subscriber">subscriber</option>

     </select>

   </div>

        <div class="form-group">
          <input type="submit" class=" btn btn-danger" value="Edit">
        </div>

    </div>
  </div>
</div>
</div>
@endsection
