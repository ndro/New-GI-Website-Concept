@extends('base')

@section('addoncss')
	<!-- tambahan css khusus untuk page ini, jika ada (optional) -->
@endsection

@section('addonjs')
	<!-- tambahan js khusus untuk page ini, jika ada (optional) -->
	<!-- CK Editor -->
	<script src="{{ asset('/js/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
		$(function() {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('content');
		});
	</script>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Post
		<small>Edit Post</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="#">Post</a></li>
		<li class="active">Edit Post</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<form id="form" action="{{ action('PostController@postEdit') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="id" value="{{ $post->id }}">
		<input type="hidden" name="page" value="{{ $page }}">
			<div class="col-md-12">
				<!-- left column -->
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Entry new post</h3>
						</div><!-- /.box-header -->
						<div class="box-body">
							<div class="form-group">
								<label for="title">Title</label>
								<input name="title" id="title" type="text" class="form-control" placeholder="Enter title" value="{{ $post->title }}">
								<p class="help-block">Judul post</p>
							</div>
							<div class="form-group">
								<label for="short_desc">Short Description</label>
								<input name="short_desc" id="short_desc" type="text" class="form-control" placeholder="Enter Description" value="{{ $post->short_desc }}">
								<p class="help-block">Deskripsi singkat mengenai konten</p>
							</div>
						</div><!-- /.box-body -->
					</div><!-- /.box -->
				</div><!--/.col-->
				<!-- right column -->
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Choose Category</h3>
						</div><!-- /.box-header -->
						<div class="box-body">
							<!-- radio -->
							<div class="form-group">
								@if(count($categories) !== 0)
									@foreach($categories as $category)
									<div class="radio">
										<input type="radio" name="category" value="{{ $category->id }}" <?php if($category->id == $post->category_id){ echo 'checked'; } ?> >
										{{ $category->label }}
									</div>
									@endforeach
								@else
									<span class="label label-danger" style="font-style:italic">Category not available</span>
								@endif
							</div>
						</div>
					</div><!-- /.box -->
				</div><!--/.col-->
			</div><!--/.col-->
			<div class="col-md-12">
				<div class='box'>
					<div class='box-body pad'>
						<label for="content">Content</label>
						<textarea id="content" name="content" rows="10" cols="80">
							{{ $post->long_desc }}
						</textarea>                        
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div><!-- /.box -->
			</div><!--/.col-->
		</form>
	</div>   <!-- /.row -->
</section><!-- /.content -->
@endsection