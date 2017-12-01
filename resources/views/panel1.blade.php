<style>

body {
  padding-top: 80px;
}

#sidebar {
  position: fixed;
  top: 50px;
  left: 220px;
  width: 163px;
  margin-left: -220px;
  border: none;
  border-radius: 0;
  overflow-y: auto;
  background-color: #222;
  bottom: 0;
  overflow-x: hidden;
  padding-bottom: 40px;
}

.side-bar > li > a {
  color: #eee;
  width: 220px;
}

.side-bar li a:hover,
.side-bar li a:focus {
  background-color: #333;
}

.tmargin {
  margin-top: 15px;
}






</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">








<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand fa fa-home w3-xlarge" href="/">Home</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user ">&nbsp;</span>Hello Admin</a></li>
        <li class="active"><a title="View Website" href="#"><span class="glyphicon glyphicon-globe"></span></a></li>
        <li>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

</li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="col-md-3">
    <div id="sidebar">
      <div class="container-fluid tmargin">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search..." />
          <span class="input-group-btn">
              <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div>
      </div>

      <ul class="nav navbar-nav side-bar">
        <li><a href="#"><i class="fa fa-area-chart"></i> Dashbord</a></li>
        <li><a href="{{url('panel/' )}}"><i class="fa  fa-users"></i> User</a></li>
        <li><a href="{{url('panel/post' )}}"><i class="fa fa-location-arrow"></i> Post</a></li>
        <li><a href="{{url('panel/comment' )}}"><i class="fa fa-comment-o"></i> Comment</a></li>
        <li class="side-bar"><a href="#"><span class="glyphicon glyphicon-cog ">&nbsp;</span>Settings</a></li>
        <li>


<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>






</li>


      </ul>
    </div>
  </div>
  <div class="col-md-9 animated bounce" style="margin-left:-13% ;display: inline;" >
    <h1 style="display: inline;">Dashboard</h1>
    <hr></hr>
    <ul class="breadcrumb">
      <li><span class="glyphicon glyphicon-home">&nbsp;</span>Home</li>
      <li><a href="#">Dashboard</a></li>
    </ul>

<div style="margin-left:35px ;">
         @yield('content')
</div>


  </div>
</div>

</div>
