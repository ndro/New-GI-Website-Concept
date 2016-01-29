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
			<div class="col-sm-6 portfolio-item">
				<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<!-- <i class="fa fa-search-plus fa-3x"></i> -->
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus beatae, nostrum cumque esse ratione maxime, voluptatum suscipit incidunt maiores nesciunt obcaecati debitis, laborum eius quos. Nemo dignissimos animi tempore obcaecati!
						</div>
					</div>
					<img src="{{ asset('/img/portfolio/cabin.png') }}" class="img-responsive" alt=""/>
					<div class="item-detail">
						<h3>Judul Acara</h3>
						<h4>xx-Agustus-2015</h4>
					</div>
				</a>
			</div>
			<div class="col-sm-6 portfolio-item">
				<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<!-- <i class="fa fa-search-plus fa-3x"></i> -->
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus beatae, nostrum cumque esse ratione maxime, voluptatum suscipit incidunt maiores nesciunt obcaecati debitis, laborum eius quos. Nemo dignissimos animi tempore obcaecati!
						</div>
					</div>
					<img src="{{ asset('/img/portfolio/cake.png') }}" class="img-responsive" alt=""/>
					<div class="item-detail">
						<h3>Judul Acara</h3>
						<h4>xx-Agustus-2015</h4>
					</div>
				</a>
			</div>
			<div class="col-sm-6 portfolio-item">
				<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<!-- <i class="fa fa-search-plus fa-3x"></i> -->
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus beatae, nostrum cumque esse ratione maxime, voluptatum suscipit incidunt maiores nesciunt obcaecati debitis, laborum eius quos. Nemo dignissimos animi tempore obcaecati!
						</div>
					</div>
					<img src="{{ asset('/img/portfolio/circus.png') }}" class="img-responsive" alt=""/>
					<div class="item-detail">
						<h3>Judul Acara</h3>
						<h4>xx-Agustus-2015</h4>
					</div>
				</a>
			</div>
			<div class="col-sm-6 portfolio-item">
				<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<!-- <i class="fa fa-search-plus fa-3x"></i> -->
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus beatae, nostrum cumque esse ratione maxime, voluptatum suscipit incidunt maiores nesciunt obcaecati debitis, laborum eius quos. Nemo dignissimos animi tempore obcaecati!
						</div>
					</div>
					<img src="{{ asset('/img/portfolio/game.png') }}" class="img-responsive" alt=""/>
					<div class="item-detail">
						<h3>Judul Acara</h3>
						<h4>xx-Agustus-2015</h4>
					</div>
				</a>
			</div>
			<div class="col-sm-6 portfolio-item">
				<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<!-- <i class="fa fa-search-plus fa-3x"></i> -->
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus beatae, nostrum cumque esse ratione maxime, voluptatum suscipit incidunt maiores nesciunt obcaecati debitis, laborum eius quos. Nemo dignissimos animi tempore obcaecati!
						</div>
					</div>
					<img src="{{ asset('/img/portfolio/safe.png') }}" class="img-responsive" alt=""/>
					<div class="item-detail">
						<h3>Judul Acara</h3>
						<h4>xx-Agustus-2015</h4>
					</div>
				</a>
			</div>
			<div class="col-sm-6 portfolio-item">
				<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<!-- <i class="fa fa-search-plus fa-3x"></i> -->
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus beatae, nostrum cumque esse ratione maxime, voluptatum suscipit incidunt maiores nesciunt obcaecati debitis, laborum eius quos. Nemo dignissimos animi tempore obcaecati!
						</div>
					</div>
					<img src="{{ asset('/img/portfolio/submarine.png') }}" class="img-responsive" alt=""/>
					<div class="item-detail">
						<h3>Judul Acara</h3>
						<h4>xx-Agustus-2015</h4>
					</div>
				</a>
			</div>
			
		</div>
	</div>
</section>
@endsection