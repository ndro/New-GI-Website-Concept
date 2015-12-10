@extends('base')

@section('addoncss')
	<!-- tambahan css khusus untuk page ini, jika ada (optional) -->
	<link href="{{ asset('/css/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection

@section('addonjs')
	<!-- tambahan js khusus untuk page ini, jika ada (optional) -->
	<!-- DATA TABES SCRIPT -->
	<script src="{{ asset('/js/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>
	
	<!-- page script -->
        <script type="text/javascript">
            $(function() {
                $('#list_event').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Event
		<small>Published Event</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="#">Event</a></li>
		<li class="active">Published Event</li>
	</ol>
	<!-- Alert if -->
	@if(Session::has('update'))
		<br/>
		<div class="box-body col-md-6">
			<div class="alert alert-success alert-dismissable">
				<i class="fa fa-check"></i>
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<b>Success!</b> Data has been updated.
			</div>
		</div><!-- /.box-body -->
	@endif
	@if(Session::has('delete'))
		<br/>
		<div class="box-body col-md-6">
			<div class="alert alert-success alert-dismissable">
				<i class="fa fa-check"></i>
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<b>Success!</b> Data has been deleted.
			</div>
		</div><!-- /.box-body -->
	@endif
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">PUBLISHED EVENT</h3>                                    
				</div><!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="list_event" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Title</th>
								<th>Short Description</th>
								<th>Category</th>
								<th>Location</th>
								<th>Guest</th>
								<th>Endate</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							{{--*/ $i = 1 /*--}}
							@foreach($events as $event)
							<tr>
								<td>{{ $i }}</td>
								<td>{{ $event->title }}</td>
								<td>{{ $event->short_desc }}</td>
								<td>{{ isset($event->category_id) ? $event->get_category->label : 'Uncategories'  }}</td>
								<td>{{ $event->location }}</td>
								<td>{{ $event->guest }}</td>
								<td>{{ $event->end_datetime }}</td>
								<td> <span class="label label-primary">Published</span></td>
								<td style="width:180px">
									<a href="{{ action('EventController@getDetail') }}/{{ $event->id }}/published">
                                        <i class="fa fa-list"></i> Detail
                                    </a> &nbsp;&nbsp;
									<a href="{{ action('EventController@getEdit') }}/{{ $event->id }}/published">
                                        <i class="fa fa-edit"></i> Edit
                                    </a> &nbsp;&nbsp;
									<a href="{{ action('EventController@getDelete') }}/{{ $event->id }}/published">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
									
								</td>
							</tr>
							{{--*/ $i++ /*--}}
							@endforeach
						</tbody>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
			
		</div>
	</div>

</section><!-- /.content -->
@endsection