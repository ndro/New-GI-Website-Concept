@extends('base')

@section('addoncss')
	<!-- tambahan css khusus untuk page ini, jika ada (optional) -->
@endsection

@section('addonjs')
	<!-- tambahan js khusus untuk page ini, jika ada (optional) -->
	<script>
		$("#form").validate({
			 rules: {
				 password: {
					 required: true,
					 minlength: 3
				 },
				 confirm: {
					 equalTo: "#password"
				 }
			 }
		 });
	</script>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Management Account
		<small>Edit User</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="{{ action('AdminController@getAll') }}">Management Account</a></li>
		<li class="active">Edit User</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Edit user</h3>
					</div><!-- /.box-header -->
					<!-- form start -->
					<form id="form" action="{{ action('AdminController@postEdit') }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="id" value="{{ $d_user->id }}">
						<div class="box-body">
							<div class="form-group">
								<label for="title">Name</label>
								<input type="text" class="form-control" name="name" value="{{ $d_user->name }}">
							</div>
							<div class="form-group">
								<label for="title">Email</label>
								<input type="email" class="form-control" name="email" value="{{ $d_user->email }}">
							</div>
							<div class="form-group">
								<label for="title">Password</label>
								<input id="password" type="password" class="form-control" name="password">
							</div>
							<div class="form-group">
								<label for="title">Confirm Password</label>
								<input id="confirm" type="password" class="form-control" name="confirm">
							</div>
						</div><!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Update</button>
							<a href="{{ action('AdminController@getAll') }}" class="btn btn-default">Cancel</a>
						</div>
					</form>
				</div><!-- /.box -->
			</div><!--/.col-->
		</div>
	</div>

</section><!-- /.content -->
@endsection