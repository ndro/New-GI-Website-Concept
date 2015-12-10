@extends('base')

@section('addoncss')
	<!-- tambahan css khusus untuk page ini, jika ada (optional) -->
@endsection

@section('addonjs')
	<!-- tambahan js khusus untuk page ini, jika ada (optional) -->
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Category
		<small>Edit Category</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="#">Category</a></li>
		<li class="active">Edit Category</li>
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
						<h3 class="box-title">Edit category</h3>
					</div><!-- /.box-header -->
					<!-- form start -->
					<form id="form" action="{{ action('CategoryController@postEdit') }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="id" value="{{ $category->id }}">
						<div class="box-body">
							<div class="form-group">
								<label for="title">Label Category</label>
								<input name="category" id="category" type="text" class="form-control" value="{{ $category->label }}">
								<p class="help-block">Judul Category</p>
							</div>
						</div><!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div><!-- /.box -->
			</div><!--/.col-->
		</div>
	</div>

</section><!-- /.content -->
@endsection