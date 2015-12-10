@extends('base')

@section('addoncss')
	<!-- tambahan css khusus untuk page ini, jika ada (optional) -->
	<!-- daterange picker -->
	<link href="{{ asset('/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
@endsection

@section('addonjs')
	<!-- tambahan js khusus untuk page ini, jika ada (optional) -->
	<!-- CK Editor -->
	<script src="{{ asset('/js/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
	<!-- date-range-picker -->
	<script src="{{ asset('/js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
		$(function() {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('content');
		});
		
		//Date range picker with time picker
		$('#date_event').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY/MM/DD h:mm:ss'});
	</script>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Event
		<small>New Event</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="#">Event</a></li>
		<li class="active">New Event</li>
	</ol>
	<!-- Alert if -->
	@if(Session::has('success'))
		<br/>
		<div class="box-body col-md-6">
			<div class="alert alert-success alert-dismissable">
				<i class="fa fa-check"></i>
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<b>Success!</b> Data has been saved.
			</div>
		</div><!-- /.box-body -->
	@endif
</section>

<!-- Main content -->
<section class="content">
	<form id="form" action="{{ action('EventController@postSave') }}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-md-12">
				<!-- left column -->
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Entry new Event</h3>
						</div><!-- /.box-header -->
						<div class="box-body">
							<div class="form-group">
								<label for="title">Title</label>
								<input name="title" id="title" type="text" class="form-control" placeholder="Enter title">
								<p class="help-block">Judul Event</p>
							</div>
							<div class="form-group">
								<label for="location">Location</label>
								<input name="location" id="location" type="text" class="form-control" placeholder="Enter Location">
								<p class="help-block">Lokasi acara berlangsung</p>
							</div>
							 <!-- Date and time range -->
							<div class="form-group">
								<label>Date and time</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-clock-o"></i>
									</div>
									<input name="date_event" type="text" class="form-control pull-right" id="date_event"/>
								</div><!-- /.input group -->
							</div><!-- /.form group -->
							<div class="form-group">
								<label for="short_desc">Short Description</label>
								<input name="short_desc" id="short_desc" type="text" class="form-control" placeholder="Enter Description">
								<p class="help-block">Deskripsi singkat mengenai konten</p>
							</div>
							<div class="form-group">
								<label for="guest">Guest</label>
								<input name="guest" id="guest" type="text" class="form-control" placeholder="Enter Guest">
								<p class="help-block">Tamu yang akan hadir</p>
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
										<input type="radio" name="category" value="{{ $category->id }}">
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
		</div>   <!-- /.row -->
		<div class="row">
			<div class="col-md-12">
				<div class='box'>
					<div class='box-body pad'>
						<label for="content">Content</label>
						<textarea id="content" name="content" rows="10" cols="80">
							Content...
						</textarea>                        
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div><!-- /.box -->
			</div><!--/.col-->
		</div>   <!-- /.row -->
	</form>
</section><!-- /.content -->
@endsection