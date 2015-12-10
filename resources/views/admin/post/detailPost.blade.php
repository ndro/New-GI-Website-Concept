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
		Post
		<small>Detail</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="#">Post</a></li>
		<li class="active">Detail Post</li>
	</ol>
</section>

<!-- Main content -->
<section class="content invoice">                    
	<!-- title row -->
	<div class="row">
	<!-- Alert if -->
		@if(Session::has('success'))
			<br/>
			<div class="box-body col-md-6">
				<div class="alert alert-success alert-dismissable">
					<i class="fa fa-check"></i>
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<b>Success!</b> Status has been changed.
				</div>
			</div><!-- /.box-body -->
		@endif
		<div class="col-xs-12">
			
			<h2 class="page-header">
				<i class="fa fa-list"></i> Detail Post
				@if($page == 'published')
				<a href="{{ action('PostController@getSoftDelete') }}/{{ $post->id }}/published" class="btn btn-danger pull-right" style="margin-right: 5px;"><i class="fa fa-trash-o"></i> Delete Post</a>
				<a href="{{ action('PostController@getUnpublish') }}/{{ $post->id }}" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-mail-forward"></i> Unpublished Post</a>  
				@elseif($page == 'unpublished')
				<a href="{{ action('PostController@getSoftDelete') }}/{{ $post->id }}/unpublished" class="btn btn-danger pull-right" style="margin-right: 5px;"><i class="fa fa-trash-o"></i> Delete Post</a>
				<a href="{{ action('PostController@getPublish') }}/{{ $post->id }}" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-mail-reply"></i> Published Post</a>
				@endif
			</h2>                            
		</div><!-- /.col -->
	</div>
	<!-- info row -->
	<div class="row invoice-info">
		<div class="col-sm-2 invoice-col">
			<strong>Title</strong><br />
			<strong>Category</strong><br />
			<strong>Short Description</strong><br />
			<strong>Publish Date</strong><br />
			<strong></strong><br />
			<strong>Content</strong>
		</div><!-- /.col -->
		<div class="col-sm-10 invoice-col">
			: {{ $post->title }}<br />
			: {{ isset($post->category_id) ? $post->get_category->label : 'Uncategories'  }}<br />
			: {{ $post->short_desc }}<br />
			: {{ isset($post->publish_date) ? $post->publish_date : 'Unpublished'  }}<br /><br />
			:
		</div><!-- /.col -->
	</div><!-- /.row -->

	<!-- Table row -->
	<div class="row">
		<div class="col-xs-12 table-responsive">
			{!! $post->long_desc !!}
			<br />
			<br />
			<br />
		</div><!-- /.col -->
	</div><!-- /.row -->

</section><!-- /.content -->
@endsection