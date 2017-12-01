<!DOCTYPE html>
<html lang="en">
	<head>

<style>

span:hover {
   color: #4A7AAC;
 height:300x;
}
</style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CARTHAGE|BLOG</title>

		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


        <link rel="stylesheet" href="{{ asset('css/search.css')}}" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" >
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

						<li >
							<a href="{{ url('/') }}"><span class="fa fa-home w3-xlarge" ">Home</span></a>
						</li>
                        <li>
									<a href="{{ url('/user/'.Auth::id()) }}"  ><span class="fa fa-list-alt w3-xlarge">My Profile</span></a>
					   </li>

                       <li>
											<form action="" method="post">

                    	<input type="search" name="q" class="search-text" placeholder="Search..." autocomplete="off">
										</form>
                      </li>
<li style="padding-left:350px;">
					<a class="navbar-brand" href=""{{ url('/') }}""> <img src="{{URL::asset('/images/lufy.png')}}" height="35" width="48"></a>
</li>

					</ul>

					<ul class="nav navbar-nav navbar-right">

						@if (Auth::guest())
						<li>
							<a href="{{ url('/login') }}">Login</a>
						</li>
						<li>
							<a href="{{ url('/register') }}">Register</a>
						</li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class=" fa fa-user w3-xlarg ">{{ Auth::user()->name }}</span> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								@if (Auth::user()->can_post())
								<li>
									<a href="{{ url('/new-post') }}">Add new post</a>
								</li>
								<li>
									<a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
								</li>
								@endif
								<li>
									<a href="{{ url('/user/'.Auth::id()) }}">My Profile</a>
								</li>
								<li>

<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>


								</li>
							</ul>
						</li>
						@endif
						@if (Auth::check())
						@if(Auth::user()->is_admin())

						<li>
							<a href="{{ url('/panel') }}">Dashbord</a>
						</li>
						@endif
						@endif
					</ul>
				</div>
			</div>
		</nav>
		<br><br><br>

		<div class="container">
			@if (Session::has('message'))
			<div class="flash alert-info">
				<p class="panel-body">
					{{ Session::get('message') }}
				</p>
			</div>
			@endif
			@if ($errors->any())
			<div class='flash alert-danger'>
				<ul class="panel-body">
					@foreach ( $errors->all() as $error )
					<li>
						{{ $error }}
					</li>
					@endforeach
				</ul>
			</div>
			@endif




			<div >


			<div class="row">
				


				<div class="col-sm-3">

 
   
<div style="padding-left:7px;">
				<iframe src="http://www.facebook.com/plugins/likebox.php?href= https://www.facebook.com/ENICarthage/&amp;width=300&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:250px;" allowtransparency="true"></iframe>
</div>





<div style="padding-left:7px;" >
<iframe src="https://feed.mikle.com/widget/v2/40575/" name="interclubs" width="300" marginwidth="5" height="408" marginheight="5" align="middle" scrolling="no" frameborder="0"></iframe>
</div>






<div  width:300px;" >
      <div class="wrapper" style="width : 320px ;">


          		<div class="wrapper card radius shadowDepth1">
          			<div class="card__image border-tlr-radius">
          				<img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius">
                      </div>

          			<div class="card__content card__padding">
                          <div class="card__share">
                              <div class="card__social">
                                  <a class="share-icon facebook" href="https://www.facebook.com/hamdi.miled.31"><span class="fa fa-facebook"></span></a>
                                  <a class="share-icon twitter" href="https://twitter.com/hamdi__miled?lang=fr"><span class="fa fa-twitter"></span></a>
                                  <a class="share-icon googleplus" href="https://aboutme.google.com/u/0/?referer=gplus"><span class="fa fa-google-plus"></span></a>
                              </div>

                              <a id="share" class="share-toggle share-icon" href="#"></a>
                          </div>

          				<div class="card__meta">
          					<a href="#">Web Design</a>
                              <time>17th August</time>
          				</div>

          				<article class="card__article">
      	    				<h2><a href="#">Material Design Card - For Blog Post Article</a></h2>

      	    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...</p>
      	    			</article>
          			</div>

          			<div class="card__action">

          				<div class="card__author">
          					<img src="http://lorempixel.com/40/40/sports/" alt="user">
          					<div class="card__author-content">
          						By <a href="https://twitter.com/hamdi__miled?lang=fr" target="_blank">Miled Hamdi</a>
          					</div>
          				</div>
          			</div>
          		</div>

          	</div>
          </div>

            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

              <script >
              $(document).ready(function($) {

	$('.card__share > a').on('click', function(e){
		e.preventDefault() // prevent default action - hash doesn't appear in url
   		$(this).parent().find( 'div' ).toggleClass( 'card__social--active' );
		$(this).toggleClass('share-expanded');
    });

});
              </script>













				</div>

 
				<div class=" col-sm-9" ">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>@yield('title')</h2>
							@yield('title-meta')
						</div>
						<div class="panel-body">
							@yield('content')
						</div>
					</div>
				</div>








			</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<p>Copyright &copy; 2017 | <a href="https://github.com/hamdimiled">Miled Hamdi</a></p>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min-3.3.1.js') }}"></script>
	</body>
</html>
