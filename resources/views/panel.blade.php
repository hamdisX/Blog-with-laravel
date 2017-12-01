<style>

body {
  font-family: 'Rubik', sans-serif;
}
ul {
  margin: 0;
  padding: 0;
}
li {
  list-style: none;
}
.navbar {
  position: absolute;
  width: 137px;
  height: 100%;
  background: linear-gradient(#3465A4,#3F4344);
  transition: 0.3s;
  overflow: hidden;
  z-index: 1;
}
.navbar:hover {
  width: 190px;
}
.navbar li {
  padding: 15px;
  width: 250px;
}
.navbar li a {
  color: #ffffff;
  text-decoration: none;
  display: block;
}
.navbar li i {
  margin-right: 15px;
  font-size: 16px;
}
.content {
  padding: 15px 30px;
  position: relative;
  display: inline-block;
  left: 50px;
}


</style>

<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{ asset('css/search.css')}}" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<div class="navbar">
  <ul>
    <li><a href=""><i class="fa fa-home"></i> Dashbord</a></li>
    <li><a href="{{url('panel/' )}}"><i class="fa  fa-users"></i> User</a></li>
    <li><a href="{{url('panel/post' )}}"><i class="fa fa-envelope"></i> Post</a></li>
    <li><a href="{{url('panel/comment' )}}"><i class="fa fa-home"></i> Comment</a></li>
    <li><a href=""><i class="fa fa-home"></i> Home</a></li>
  </ul>
</div>
<div class="content">
@yield('content')
</div>
