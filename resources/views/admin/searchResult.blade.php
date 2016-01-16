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
                $('#list_result').dataTable({
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
		Result
		<small>Search Result</small>
	</h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-dashboard"></i>  <a href="{{ action('AdminController@getIndex') }}">Dashboard</a></li>
		<li><a href="#">Search</a></li>
		<li class="active">Result</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">SEARCH RESULT keyword = '{{ $keyword }}'</h3>                                    
				</div><!-- /.box-header -->
				<div class="box-body table-responsive">
					@foreach($searchs as $post)
						<div>
							<h3>{{ $post->title }}</h3>
							<div>
								{{ $post->short_desc }}
							</div>
							<div>
								<a href="{{ action('PostController@getDetail') }}/{{ $post->id }}/published" class="btn btn-primary btn-xs" >Read more</a>
							</div>
						</div>
					@endforeach
					
				</div><!-- /.box-body -->
			</div><!-- /.box -->
			
		</div>
	</div>

</section><!-- /.content -->
@endsection