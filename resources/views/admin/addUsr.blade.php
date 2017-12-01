<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{url('panel')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="form-group">
          <label for=""> name</label>
          <input type="text" name="name" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label for=""> email</label>
          <input type="email" name="email" class="form-control" required="required">
        </div>
         <div class="form-group">
            <label for=""> password</label>
            <input type="password" name="password" class="form-control" required="required">
          </div>
          <div class="form-group">
          <select name="role">
  <option value="author">author</option>
  <option value="admin">admin</option>
  <option value="subscriber">subscriber</option>
       </select>
     </div>

        <div class="form-group">
          <input type="submit" class=" btn btn-primary" value="add user">
        </div>





    </div>
  </div>
</div> -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
