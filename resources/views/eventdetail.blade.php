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
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2 style="text-align:center">{{ $event->title }}</h2>
                            <hr class="star-primary">
                            <img src="{{ asset('/img/portfolio/cabin.png') }}" class="img-responsive img-centered" alt="no-image">
                            <p>{!! $event->long_desc !!}</p>
                            <ul class="list-inline item-details">
                                <li>
                                    <strong><a href="{{ action('HomeController@getEvents') }}">Lihat Semua Event</a>
                                    </strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
</section>
@endsection