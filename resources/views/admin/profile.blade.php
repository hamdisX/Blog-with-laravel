<link href='https://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

 <link rel='stylesheet prefetch' href='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/css/demo.css'>

     <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="{{ asset('css/ds.css')}}" type="text/css">



 <div id="large-header" class="large-header">
 <canvas id="demo-canvas"></canvas>
   <h1 class="main-title">Connect <span class="thin">Three</span></h1>
</div>
 <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script>

   <script src="{{ asset('/js/indexs.js') }}"></script>
































<div style="float:right">

@extends('app')

@section('title')
{{ $user->name }}
@endsection

@section('content')

	<ul class="list-group">
		<li class="list-group-item">
			Joined on {{$user->created_at->format('M d,Y \a\t h:i a') }}
		</li>
		<li class="list-group-item panel-body">
			<table class="table-padding">
				<style>
					.table-padding td{
						padding: 3px 8px;
					}
				</style>
				<tr>
					<td>Total Posts</td>
					<td> {{$posts_count}}</td>
					@if($author && $posts_count)
					<td><a href="{{ url('/my-all-posts')}}">Show All</a></td>
					@endif
				</tr>
				<tr>
					<td>Published Posts</td>
					<td>{{$posts_active_count}}</td>
					@if($posts_active_count)
					<td><a href="{{ url('/user/'.$user->id.'/posts')}}">Show All</a></td>
					@endif
				</tr>
				<tr>
					<td>Posts in Draft </td>
					<td>{{$posts_draft_count}}</td>
					@if($author && $posts_draft_count)
					<td><a href="{{ url('my-drafts')}}">Show All</a></td>
					@endif
				</tr>
			</table>
		</li>
		<li class="list-group-item">
			Total Comments {{$comments_count}}
		</li>
	</ul>
</div>

<div class="panel panel-default">
	<div class="panel-heading"><h3>Latest Posts</h3></div>
	<div class="panel-body">
		@if(!empty($latest_posts[0]))
		@foreach($latest_posts as $latest_post)
			<p>
				<strong><a href="{{ url('/'.$latest_post->slug) }}">{{ $latest_post->title }}</a></strong>
				<span class="well-sm">On {{ $latest_post->created_at->format('M d,Y \a\t h:i a') }}</span>
			</p>
		@endforeach
		@else
		<p>You have not written any post till now.</p>
		@endif
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading"><h3>Latest Comments</h3></div>
	<div class="list-group">
		@if(!empty($latest_comments[0]))
		@foreach($latest_comments as $latest_comment)
			<div class="list-group-item">
				<p>{{ $latest_comment->body }}</p>
				<p>On {{ $latest_comment->created_at->format('M d,Y \a\t h:i a') }}</p>
				<p>On post <a href="{{ url('/'.$latest_comment->post->slug) }}">{{ $latest_comment->post->title }}</a></p>
			</div>
		@endforeach
		@else
		<div class="list-group-item">
			<p>You have not commented till now. Your latest 5 comments will be displayed here</p>
		</div>
		@endif
	</div>

@endsection

</div>
