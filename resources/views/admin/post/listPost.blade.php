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
                $('#list_post').dataTable({
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
		Post
		<small>Unpublished Post</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="#">Post</a></li>
		<li class="active">Unpublished Post</li>
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
					<h3 class="box-title">UNPUBLISHED POST</h3>                                    
				</div><!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="list_post" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Title</th>
								<th>Short Description</th>
								<th>Category</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							{{--*/ $i = 1 /*--}}
							@foreach($posts as $post)
							<tr>
								<td>{{ $i }}</td>
								<td>{{ $post->title }}</td>
								<td>{{ $post->short_desc }}</td>
								<td>{{ isset($post->category_id) ? $post->get_category->label : 'Uncategories'  }}</td>
								<td> <span class="label label-success">Unpublished</span></td>
								<td style="width:180px">
									<a href="{{ action('PostController@getDetail') }}/{{ $post->id }}/unpublished">
                                        <i class="fa fa-list"></i> Detail
                                    </a> &nbsp;&nbsp;
									<a href="{{ action('PostController@getEdit') }}/{{ $post->id }}/unpublished">
                                        <i class="fa fa-edit"></i> Edit
                                    </a> &nbsp;&nbsp;
									<a href="{{ action('PostController@getSoftDelete') }}/{{ $post->id }}/unpublished">
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