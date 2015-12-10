@extends('app')

@section('addoncss')
	<!-- tambahan css khusus untuk page ini, jika ada (optional) -->
@endsection

@section('addonjs')
	<!-- tambahan js khusus untuk page ini, jika ada (optional) -->
@endsection

@section('content')
<!-- Header -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- <img class="img-responsive" src="img/profile.png" alt=""> -->
				<div class="intro-text">
					<span class="name">Gebrak Indonesia</span>
					<!-- <hr class="star-light"> -->
					<span class="skills">Acara ini ngapain blablabla ...</span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Berita</h2>
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
			<div class="col-sm-12 text-center" >
				<a href="#" class="btn btn-success btn-lg">Lihat Semua Berita</a>
			</div>
		</div>
	</div>
</section>

<!--Event Section -->
<section class=" " id="event">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Acara</h2>
				<!-- <hr class="star-light"> -->
			</div>
			<div class="col-lg-12">
				<div id="carousel-year" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators indicators-year">
					<li data-target="#carousel-year" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-year" data-slide-to="1"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <!-- <img src="img/portfolio/safe.png" alt="..."> -->
					  <div class="carousel-caption caption-year">
						<h3>2015</h3>
						<br><br>
						<div id="carousel-month-2015" class="carousel slide carousel-month" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators indicators-month">
							<li data-target="#carousel-month-2015" data-slide-to="0" class="active">Jan</li>
							<li data-target="#carousel-month-2015" data-slide-to="1">Feb</li>
							<li data-target="#carousel-month-2015" data-slide-to="2">Mar</li>
							<li data-target="#carousel-month-2015" data-slide-to="3">Apr</li>
							<li data-target="#carousel-month-2015" data-slide-to="4">Mei</li>
							<li data-target="#carousel-month-2015" data-slide-to="5">Jun</li>
							<li data-target="#carousel-month-2015" data-slide-to="6">Jul</li>
							<li data-target="#carousel-month-2015" data-slide-to="7">Aug</li>
							<li data-target="#carousel-month-2015" data-slide-to="8">Sep</li>
							<li data-target="#carousel-month-2015" data-slide-to="9">Okt</li>
							<li data-target="#carousel-month-2015" data-slide-to="10">Nov</li>
							<li data-target="#carousel-month-2015" data-slide-to="11">Des</li>
						  </ol>
						  <hr class="month-line">
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <!-- <img src="img/portfolio/safe.png" alt="..."> -->
							  <div class="carousel-caption caption-month">

								<div id="carousel-day-2015-1" class="carousel slide carousel-day" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
									<li data-target="#carousel-day-2015-1" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-day-2015-1" data-slide-to="1"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									<div class="item active">
									  <!-- <img src="img/portfolio/safe.png" alt="..."> -->
									  <div class="carousel-caption caption-day">
										<h3>Event 1</h3>
										<div class="text-center" >
											<a href="all-news.html" class="btn btn-success btn-lg">Baca</a>
										</div>
									  </div>
									</div>
									<div class="item">
									  <!-- <img src="img/portfolio/cabin.png" alt="..."> -->
									  <div class="carousel-caption caption-day">
										<h3>Event 2</h3>
										<div class="text-center" >
											<a href="all-news.html" class="btn btn-success btn-lg">Baca</a>
										</div>
									  </div>
									</div>
								  </div>

								  <!-- Controls -->
								  <a class="left carousel-control control-day" href="#carousel-day-2015-1" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control control-day" href="#carousel-day-2015-1" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								  </a>
								</div>

							  </div>
							</div>
							<div class="item">
							  <!-- <img src="img/portfolio/cabin.png" alt="..."> -->
							  <div class="carousel-caption caption-month">
								<div id="carousel-day-2015-2" class="carousel slide carousel-day" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
									<li data-target="#carousel-day-2015-2" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-day-2015-2" data-slide-to="1"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									<div class="item active">
									  <!-- <img src="img/portfolio/safe.png" alt="..."> -->
									  <div class="carousel-caption caption-day">
										<h3>Event 1</h3>
										<div class="text-center" >
											<a href="all-news.html" class="btn btn-success btn-lg">Baca</a>
										</div>
									  </div>
									</div>
									<div class="item">
									  <!-- <img src="img/portfolio/cabin.png" alt="..."> -->
									  <div class="carousel-caption caption-day">
										<h3>Event 2</h3>
										<div class="text-center" >
											<a href="all-news.html" class="btn btn-success btn-lg">Baca</a>
										</div>
									  </div>
									</div>
								  </div>

								  <!-- Controls -->
								  <a class="left carousel-control control-day" href="#carousel-day-2015-2" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control control-day" href="#carousel-day-2015-2" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								  </a>
								</div>
							  </div>
							</div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control control-month" href="#carousel-month-2015" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control control-month" href="#carousel-month-2015" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					  </div>
					</div>
					<div class="item">
					  <!-- <img src="img/portfolio/cabin.png" alt="..."> -->
					  <div class="carousel-caption caption-year">
						<h3>2016</h3>
						<br><br>
						<div id="carousel-month-2016" class="carousel slide carousel-month" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators indicators-month">
							<li data-target="#carousel-month-2016" data-slide-to="0" class="active">Jan</li>
							<li data-target="#carousel-month-2016" data-slide-to="1">Feb</li>
							<li data-target="#carousel-month-2016" data-slide-to="2">Mar</li>
							<li data-target="#carousel-month-2016" data-slide-to="3">Apr</li>
							<li data-target="#carousel-month-2016" data-slide-to="4">Mei</li>
							<li data-target="#carousel-month-2016" data-slide-to="5">Jun</li>
							<li data-target="#carousel-month-2016" data-slide-to="6">Jul</li>
							<li data-target="#carousel-month-2016" data-slide-to="7">Aug</li>
							<li data-target="#carousel-month-2016" data-slide-to="8">Sep</li>
							<li data-target="#carousel-month-2016" data-slide-to="9">Okt</li>
							<li data-target="#carousel-month-2016" data-slide-to="10">Nov</li>
							<li data-target="#carousel-month-2016" data-slide-to="11">Des</li>
						  </ol>
						  <hr class="month-line">
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <!-- <img src="img/portfolio/safe.png" alt="..."> -->
							  <div class="carousel-caption caption-month">

								<div id="carousel-day-2016-1" class="carousel slide carousel-day" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
									<li data-target="#carousel-day-2016-1" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-day-2016-1" data-slide-to="1"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									<div class="item active">
									  <!-- <img src="img/portfolio/safe.png" alt="..."> -->
									  <div class="carousel-caption caption-day">
										<h3>Event 1</h3>
										<div class="text-center" >
											<a href="all-news.html" class="btn btn-success btn-lg">Baca</a>
										</div>
									  </div>
									</div>
									<div class="item">
									  <!-- <img src="img/portfolio/cabin.png" alt="..."> -->
									  <div class="carousel-caption caption-day">
										<h3>Event 2</h3>
										<div class="text-center" >
											<a href="all-news.html" class="btn btn-success btn-lg">Baca</a>
										</div>
									  </div>
									</div>
								  </div>

								  <!-- Controls -->
								  <a class="left carousel-control control-day" href="#carousel-day-2016-1" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control control-day" href="#carousel-day-2016-1" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								  </a>
								</div>

							  </div>
							</div>
							<div class="item">
							  <!-- <img src="img/portfolio/cabin.png" alt="..."> -->
							  <div class="carousel-caption caption-month">
								<h3>2016</h3>
							  </div>
							</div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control control-month" href="#carousel-month-2016" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control control-month" href="#carousel-month-2016" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					  </div>
					</div>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control control-year" href="#carousel-year" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control control-year" href="#carousel-year" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
		<br>
	</div>
</section>

<!-- About Section -->
<section class="success" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Tentang</h2>
				<!-- <hr class="star-light"> -->
				<br><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-lg-offset-1 visi">
				<h2>Visi</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic esse excepturi omnis minus reiciendis consequuntur nulla corporis suscipit eos quod laboriosam sapiente, impedit aspernatur labore. Sunt molestiae explicabo facilis aspernatur.</p>
			</div>
			<div class="col-lg-5 misi">
				<h2>Misi</h2>
				<ul>
					<li> Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </li>
					<li> Eius ratione distinctio, ab reprehenderit veritatis ullam porro provident tempore quidem, </li>
					<li> fugiat quibusdam quis earum reiciendis inventore consequatur iure molestias similique nostrum.  </li>
					<li> Lorem ipsum dolor sit amet, consectetur adipisicing elit.   </li>
					<li> Odio corporis accusamus quos esse error alias explicabo quas asperiores,a </li>
					<li> animi amet soluta exercitationem molestias ut facilis, dolorem dolorum nobis illum! Id. </li>
				</ul>
			</div>
			<!-- <div class="col-lg-8 col-lg-offset-2 text-center">
				<a href="#" class="btn btn-lg btn-outline">
					<i class="fa fa-download"></i> Download Theme
				</a>
			</div> -->
		</div>
		<div class="row team">
			<div class="col-sm-3">
				<div class="team-person">
					<img src="{{ asset('/img/portfolio/submarine.png') }}" class="img-responsive" alt=""/>
					<div class="person-detail">
						<div class="person-name">
							<h5 >Riva Syafri R</h5>    
						</div>
						<div class="person-rank">
							<h5>Double Standard</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="team-person">
					<img src="{{ asset('/img/portfolio/game.png') }}" class="img-responsive" alt=""/>
					<div class="person-detail">
						<div class="person-name">
							<h5 >Rafi Ramadhan</h5>    
						</div>
						<div class="person-rank">
							<h5>Single Gaul</h5>
						</div>
					</div>  
				</div>
			</div>
			<div class="col-sm-3">
				<div class="team-person">
					<img src="{{ asset('/img/portfolio/circus.png') }}" class="img-responsive" alt=""/>
					<div class="person-detail">
						<div class="person-name">
							<h5 >M. Lutfi Fadlan</h5>    
						</div>
						<div class="person-rank">
							<h5>3 Lebih Baik</h5>
						</div>
					</div>  
				</div>
			</div>
			<div class="col-sm-3">
				<div class="team-person">
					<img src="{{ asset('/img/portfolio/cabin.png') }}" class="img-responsive" alt=""/>
					<div class="person-detail">
						<div class="person-name">
							<h5 >Hendro Triokta B.</h5>    
						</div>
						<div class="person-rank">
							<h5>Utamakan Pengalaman</h5>
						</div>
					</div>  
				</div>
			</div>
		</div>
		<div class="row office">
			<div class="col-lg-4 col-lg-offset-1">
				<h3>Lokasi</h3>
				<p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>

				<h3>Kontak</h3>
				<p>Adi: (+62)81234567890</p>
				<ul class="list-inline">
					<li>
						<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
					</li>
					<li>
						<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
					</li>
					<li>
						<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
					</li>
					<li>
						<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-lg-6">
				<div style="width:600px;max-width:100%;overflow:hidden;height:350px;color:red;">   
					<div id="embedded-map-canvas" style="height:350px;width:600px;max-width:100%;">
						<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Institut+Teknologi+Bandung,+Bandung,+West+Java,+Indonesia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
					</div>
					<a class="google-map-code" href="https://www.tubeembed.com/" id="grab-map-info">youtube iframe</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact Section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Donasi</h2>
				<!-- <hr class="star-primary"> -->
				<br><br><br>
			</div>
		</div>
		<div class="row">
			<!-- <div class="col-lg-10 col-lg-offset-1"> -->

				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
				<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				<!-- <form name="sentMessage" id="contactForm" novalidate>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Email Address</label>
							<input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Phone Number</label>
							<input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Message</label>
							<textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<br>
					<div id="success"></div>
					<div class="row">
						<div class="form-group col-xs-12">
							<button type="submit" class="btn btn-success btn-lg">Send</button>
						</div>
					</div>
				</form> -->
			<!-- </div> -->

			<div class="col-sm-6 contact-item">
				<div class="contact-item-detail">
					<img src="{{ asset('/img/portfolio/cabin.png') }}" class="img-responsive" alt=""/>
					<h4>a.n. Riva Syafri</h4>
					<h4>Nomor Rekening</h4>
				</div>
			</div>
			<div class="col-sm-6 contact-item">
				<div class="contact-item-detail">
					<img src="{{ asset('/img/portfolio/cake.png') }}" class="img-responsive" alt=""/>
					<h4>a.n. Rafi Ramadhan</h4>
					<h4>Nomor Rekening</h4>
				</div>
			</div>
			<div class="col-sm-6 contact-item">
				<div class="contact-item-detail">
					<img src="{{ asset('/img/portfolio/circus.png') }}" class="img-responsive" alt=""/>
					<h4>a.n. M. Lutfi Dadlan</h4>
					<h4>Nomor Rekening</h4>
				</div>
			</div>
			<div class="col-sm-6 contact-item">
				<div class="contact-item-detail">
					<img src="{{ asset('/img/portfolio/game.png') }}" class="img-responsive" alt=""/>
					<h4>a.n. Hendro Triokta B.</h4>
					<h4>Nomor Rekening</h4>
				</div>
			</div>
			<div class="col-lg-12 text-center">
				<a href="#" class="btn btn-success btn-lg">Lihat Laporan Keuangan</a>
			</div>
		</div>
	</div>
</section>
@endsection
