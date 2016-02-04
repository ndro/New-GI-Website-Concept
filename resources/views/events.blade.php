@extends('single')

@section('addoncss')
	<!-- tambahan css khusus untuk page ini, jika ada (optional) -->
@endsection

@section('addonjs')
	<!-- tambahan js khusus untuk page ini, jika ada (optional) -->
@endsection

@section('content')
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Event</h2>
				<!-- <hr class="star-primary"> -->
				<br><br><br>
			</div>
		</div>
		<div class="row">
			@foreach($events as $event)
			<div class="col-sm-6 portfolio-item">
				<a href="{{ action('HomeController@getEventDetail') }}/{{ $event->id }}" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<!-- <i class="fa fa-search-plus fa-3x"></i> -->
							{{ $event->short_desc }}
						</div>
					</div>
					<img src="{{ asset('/img/portfolio/cabin.png') }}" class="img-responsive" alt=""/>
					<div class="item-detail">
						<h3>{{ $event->title }}</h3>
						<h4>{{ $event->start_datetime }}</h4>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection