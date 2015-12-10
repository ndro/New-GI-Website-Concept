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
		Event
		<small>Detail</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="#">Event</a></li>
		<li class="active">Detail Event</li>
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
				<i class="fa fa-list"></i> Detail Event
				@if($page == 'published')
				<a href="{{ action('EventController@getDelete') }}/{{ $event->id }}/published" class="btn btn-danger pull-right" style="margin-right: 5px;"><i class="fa fa-trash-o"></i> Delete Event</a>
				<a href="{{ action('EventController@getUnpublish') }}/{{ $event->id }}" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-mail-forward"></i> Unpublished Event</a>  
				@elseif($page == 'unpublished')
				<a href="{{ action('EventController@getDelete') }}/{{ $event->id }}/unpublished" class="btn btn-danger pull-right" style="margin-right: 5px;"><i class="fa fa-trash-o"></i> Delete Event</a>
				<a href="{{ action('EventController@getPublish') }}/{{ $event->id }}" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-mail-reply"></i> Published Event</a>
				@endif
			</h2>                            
		</div><!-- /.col -->
	</div>
	<!-- info row -->
	<div class="row invoice-info">
		<div class="col-sm-2 invoice-col">
			<strong>Title</strong><br />
			<strong>Category</strong><br />
			<strong>Location</strong><br />
			<strong>Guest</strong><br />
			<strong>Start Date - End Date</strong><br />
			<strong>Short Description</strong><br />
			<strong>Publish Date</strong><br />
			<strong></strong><br />
			<strong>Content</strong>
		</div><!-- /.col -->
		<div class="col-sm-10 invoice-col">
			: {{ $event->title }}<br />
			: {{ isset($event->category_id) ? $event->get_category->label : 'Uncategories'  }}<br />
			: {{ isset($event->location) ? $event->location : 'Unknown'  }}<br />
			: {{ isset($event->guest) ? $event->guest : 'None'  }}<br />
			: {{ $event->start_datetime }} s.d. {{ $event->end_datetime }}<br />
			: {{ $event->short_desc }}<br />
			: {{ isset($event->publish_date) ? $event->publish_date : 'Unpublished'  }}<br /><br />
			:
		</div><!-- /.col -->
	</div><!-- /.row -->

	<!-- Table row -->
	<div class="row">
		<div class="col-xs-12 table-responsive">
			{!! $event->long_desc !!}
			<br />
			<br />
			<br />
		</div><!-- /.col -->
	</div><!-- /.row -->

</section><!-- /.content -->
@endsection