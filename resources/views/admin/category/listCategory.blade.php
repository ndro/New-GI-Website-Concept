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
                $('#list_category').dataTable({
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
		Category
		<small>List Category</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="#">Category</a></li>
		<li class="active">List Category</li>
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
	<!-- Alert if -->
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
		<div class="col-md-12">
			<!-- left column -->
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">LIST CATEGORY</h3>                                    
					</div><!-- /.box-header -->
					<div class="box-body table-responsive">
						<table id="list_category" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Label</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								{{--*/ $i = 1 /*--}}
								@foreach($categories as $category)
								<tr>
									<td style="width:20px">{{ $i }}</td>
									<td>{{ $category->label }}</td>
									<td style="width:150px">
										<a href="{{ action('CategoryController@getEdit') }}/{{ $category->id }}">
											<i class="fa fa-edit"></i> Edit
										</a> &nbsp;&nbsp;
										<a href="{{ action('CategoryController@getDelete') }}/{{ $category->id }}">
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
			<!-- right column -->
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Entry new category</h3>
					</div><!-- /.box-header -->
					<!-- form start -->
					<form id="form" action="{{ action('CategoryController@postSave') }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="box-body">
							<div class="form-group">
								<label for="title">Label Category</label>
								<input name="category" id="category" type="text" class="form-control" placeholder="Enter category">
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