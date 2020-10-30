@extends(getTheme('layouts.app'))

@section('content')
	<div id="box-slide" class="owl-carousel owl-theme page-slider">
		<div class="item" style="background-image:url('{{ asset('po-content/frontend/constra/images/slider-main/bg4.jpg') }}')">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title">17 Years Of Excellence In</h2>
						<h3 class="box-slide-sub-title">Construction Industry</h3>
						<p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward
							thinking team looking for talent like.</p>
						<p>
							<a href="{{ url('/pages/services') }}" class="slider btn btn-primary">Our Service</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="item" style="background-image:url('{{ asset('po-content/frontend/constra/images/slider-main/bg5.jpg') }}')">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title">When Services Matters</h2>
						<h3 class="box-slide-sub-title">Your Choice is Simple</h3>
						<p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward
							thinking team looking for talent like.</p>
						<p>
							<a href="{{ url('/pages/about-us') }}" class="slider btn btn-primary">Know Us</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="call-to-action no-padding">
		<div class="container">
			<div class="action-style-box">
				<div class="row">
					<div class="col-md-10">
						<div class="call-to-action-text">
							<h3 class="action-title">We understand your needs on construction</h3>
						</div>
					</div>
					<div class="col-md-2">
						<div class="call-to-action-btn">
							<a class="btn btn-primary" href="{{ url('/contact') }}">Request Quote</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="ts-features" class="ts-features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="ts-service-box">
						<div class="ts-service-image-wrapper">
							<img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/services/service1.jpg') }}" alt="">
						</div>
						<div class="ts-service-box-img pull-left">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/service-icon1.png') }}" alt="" />
						</div>
						<div class="ts-service-info">
							<h3 class="service-box-title"><a href="#">Zero Harm Everyday</a></h3>
							<p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for
								talent like. Lorem ipsum dolor sit amet integer suscipit.</p>
							<p><a class="learn-more" href="#"><i class="fa fa-caret-right"></i> Learn More</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="ts-service-box">
						<div class="ts-service-image-wrapper">
							<img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/services/service2.jpg') }}" alt="">
						</div>
						<div class="ts-service-box-img pull-left">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/service-icon2.png') }}" alt="" />
						</div>
						<div class="ts-service-info">
							<h3 class="service-box-title"><a href="#">Virtual Construction</a></h3>
							<p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for
								talent like. Lorem ipsum dolor sit amet integer suscipit.</p>
							<p><a class="learn-more" href="#"><i class="fa fa-caret-right"></i> Learn More</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="ts-service-box">
						<div class="ts-service-image-wrapper">
							<img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/services/service3.jpg') }}" alt="">
						</div>
						<div class="ts-service-box-img pull-left">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/service-icon3.png') }}" alt="" />
						</div>
						<div class="ts-service-info">
							<h3 class="service-box-title"><a href="#">Build To Last</a></h3>
							<p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for
								talent like. Lorem ipsum dolor sit amet integer suscipit.</p>
							<p><a class="learn-more" href="#"><i class="fa fa-caret-right"></i> Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="facts" class="facts-area dark-bg">
		<div class="container">
			<div class="row">
				<div class="facts-wrapper">
					<div class="col-sm-3 ts-facts">
						<div class="ts-facts-img">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/fact1.png') }}" alt="" />
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
							<h3 class="ts-facts-title">Total Projects</h3>
						</div>
					</div>

					<div class="col-sm-3 ts-facts">
						<div class="ts-facts-img">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/fact2.png') }}" alt="" />
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
							<h3 class="ts-facts-title">Staff Members</h3>
						</div>
					</div>

					<div class="col-sm-3 ts-facts">
						<div class="ts-facts-img">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/fact3.png') }}" alt="" />
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
							<h3 class="ts-facts-title">Hours of Work</h3>
						</div>
					</div>

					<div class="col-sm-3 ts-facts">
						<div class="ts-facts-img">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/fact4.png') }}" alt="" />
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
							<h3 class="ts-facts-title">Countries Experience</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="ts-service-area" class="ts-service-area">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-title">We Are Specialists In</h2>
				<h3 class="section-sub-title">What We Do</h3>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/service-icon1.png') }}" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Home Construction</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
						</div>
					</div>

					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/service-icon2.png') }}" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Building Remodels</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
						</div>
					</div>

					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/service-icon3.png') }}" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Interior Design</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 text-center">
					<img class="service-center-img img-responsive" src="{{ asset('po-content/frontend/constra/images/services/service-center.jpg') }}" alt="" />
				</div>

				<div class="col-md-4">
					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/service-icon4.png') }}" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Exterior Design</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
						</div>
					</div>

					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/service-icon5.png') }}" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Renovation</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
						</div>
					</div>

					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="{{ asset('po-content/frontend/constra/images/icon-image/service-icon6.png') }}" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Safety Management</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section id="project-area" class="project-area solid-bg">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-title">Work of Excellence</h2>
				<h3 class="section-sub-title">Recent Projects</h3>
			</div>

			<div class="row">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".commercial">Commercial</a></li>
						<li><a href="#" data-filter=".education">Education</a></li>
						<li><a href="#" data-filter=".government">Government</a></li>
						<li><a href="#" data-filter=".infrastructure">Infrastructure</a></li>
						<li><a href="#" data-filter=".residential">Residential</a></li>
						<li><a href="#" data-filter=".healthcare">Healthcare</a></li>
					</ul>
				</div>


				<div id="isotope" class="isotope">
					<div class="col-md-4 col-sm-6 col-xs-12 commercial isotope-item">
						<div class="isotope-img-container">
							<a class="gallery-popup" href="{{ asset('po-content/frontend/constra/images/projects/project1.jpg') }}">
								<img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/projects/project1.jpg') }}" alt="">
								<span class="gallery-icon"><i class="fa fa-plus"></i></span>
							</a>
							<div class="project-item-info">
								<div class="project-item-info-content">
									<h3 class="project-item-title">
										<a href="#">Capital Teltway Building</a>
									</h3>
									<p class="project-cat">Commercial, Interiors</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 healthcare isotope-item">
						<div class="isotope-img-container">
							<a class="gallery-popup" href="{{ asset('po-content/frontend/constra/images/projects/project2.jpg') }}">
								<img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/projects/project2.jpg') }}" alt="">
								<span class="gallery-icon"><i class="fa fa-plus"></i></span>
							</a>
							<div class="project-item-info">
								<div class="project-item-info-content">
									<h3 class="project-item-title">
										<a href="#">Ghum Touch Hospital</a>
									</h3>
									<p class="project-cat">Healthcare</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 government isotope-item">
						<div class="isotope-img-container">
							<a class="gallery-popup" href="{{ asset('po-content/frontend/constra/images/projects/project3.jpg') }}">
								<img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/projects/project3.jpg') }}" alt="">
								<span class="gallery-icon"><i class="fa fa-plus"></i></span>
							</a>
							<div class="project-item-info">
								<div class="project-item-info-content">
									<h3 class="project-item-title">
										<a href="#">TNT East Facility</a>
									</h3>
									<p class="project-cat">Government</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 education isotope-item">
						<div class="isotope-img-container">
							<a class="gallery-popup" href="{{ asset('po-content/frontend/constra/images/projects/project4.jpg') }}">
								<img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/projects/project4.jpg') }}" alt="">
								<span class="gallery-icon"><i class="fa fa-plus"></i></span>
							</a>
							<div class="project-item-info">
								<div class="project-item-info-content">
									<h3 class="project-item-title">
										<a href="#">Narriot Headquarters</a>
									</h3>
									<p class="project-cat">Infrastructure</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 infrastructure isotope-item">
						<div class="isotope-img-container">
							<a class="gallery-popup" href="{{ asset('po-content/frontend/constra/images/projects/project5.jpg') }}">
								<img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/projects/project5.jpg') }}" alt="">
								<span class="gallery-icon"><i class="fa fa-plus"></i></span>
							</a>
							<div class="project-item-info">
								<div class="project-item-info-content">
									<h3 class="project-item-title">
										<a href="#">Kalas Metrorail</a>
									</h3>
									<p class="project-cat">Infrastructure</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 residential isotope-item">
						<div class="isotope-img-container">
							<a class="gallery-popup" href="{{ asset('po-content/frontend/constra/images/projects/project6.jpg') }}">
								<img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/projects/project6.jpg') }}" alt="">
								<span class="gallery-icon"><i class="fa fa-plus"></i></span>
							</a>
							<div class="project-item-info">
								<div class="project-item-info-content">
									<h3 class="project-item-title">
										<a href="#">Ancraft Avenue House</a>
									</h3>
									<p class="project-cat">Residential</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="general-btn text-center">
					<a class="btn btn-primary" href="#">View All Projects</a>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3 class="column-title">Testimonials</h3>

					<div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
						<div class="item">
							<div class="quote-item">
								<span class="quote-text">
									Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
									view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
									subline of her own road.
								</span>

								<div class="quote-item-footer">
									<img class="testimonial-thumb" src="{{ asset('po-content/frontend/constra/images/clients/testimonial1.png') }}" alt="testimonial">
									<div class="quote-item-info">
										<h3 class="quote-author">Gabriel Denis</h3>
										<span class="quote-subtext">Chairman, OKT</span>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="quote-item">
								<span class="quote-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
									labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
									nisi aliquip consequat.
								</span>

								<div class="quote-item-footer">
									<img class="testimonial-thumb" src="{{ asset('po-content/frontend/constra/images/clients/testimonial2.png') }}" alt="testimonial">
									<div class="quote-item-info">
										<h3 class="quote-author">Weldon Cash</h3>
										<span class="quote-subtext">CFO, First Choice</span>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="quote-item">
								<span class="quote-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
									labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
									nisi ut commodo consequat.
								</span>

								<div class="quote-item-footer">
									<img class="testimonial-thumb" src="{{ asset('po-content/frontend/constra/images/clients/testimonial3.png') }}" alt="testimonial">
									<div class="quote-item-info">
										<h3 class="quote-author">Minter Puchan</h3>
										<span class="quote-subtext">Director, AKT</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<h3 class="column-title">Happy Clients</h3>

					<div class="row all-clients">
						<div class="col-sm-4">
							<figure class="clients-logo">
								<a href="#"><img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/clients/client1.png') }}" alt="" /></a>
							</figure>
						</div>

						<div class="col-sm-4">
							<figure class="clients-logo">
								<a href="#"><img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/clients/client2.png') }}" alt="" /></a>
							</figure>
						</div>

						<div class="col-sm-4">
							<figure class="clients-logo">
								<a href="#"><img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/clients/client3.png') }}" alt="" /></a>
							</figure>
						</div>

						<div class="col-sm-4">
							<figure class="clients-logo">
								<a href="#"><img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/clients/client4.png') }}" alt="" /></a>
							</figure>
						</div>

						<div class="col-sm-4">
							<figure class="clients-logo">
								<a href="#"><img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/clients/client5.png') }}" alt="" /></a>
							</figure>
						</div>

						<div class="col-sm-4">
							<figure class="clients-logo">
								<a href="#"><img class="img-responsive" src="{{ asset('po-content/frontend/constra/images/clients/client6.png') }}" alt="" /></a>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="subscribe no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="subscribe-call-to-acton">
						<h3>Hubungi Kami</h3>
						<h4>{{ getSetting('telephone') }}</h4>
					</div>
				</div>

				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="ts-newsletter">
						<div class="newsletter-introtext">
							<h4>Subscribe</h4>
							<p>Berita dan Penawaran Terbaru</p>
						</div>

						<div class="newsletter-form">
							<form action="#" method="post">
								<div class="form-group">
									<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg"
										placeholder="Email" autocomplete="off">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="news" class="news">
		<div class="container">
			<div class="row text-center">
				<h3 class="section-sub-title">Berita Terbaru</h3>
			</div>

			<div class="row">
				@foreach(latestPost(3) as $latestPost)
				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<div class="latest-post-media">
							<a href="{{ prettyUrl($latestPost) }}" class="latest-post-img">
								<img class="img-responsive" src="{{ getPicture($latestPost->picture, 'medium', $latestPost->updated_by) }}" alt="img">
							</a>
						</div>
						<div class="post-body">
							<h4 class="post-title">
								<a href="{{ prettyUrl($latestPost) }}">{{ $latestPost->title }}</a>
							</h4>
							<div class="latest-post-meta">
								<span class="post-item-date">
									<i class="fa fa-clock-o"></i> {{ date('d F Y' , strtotime($latestPost->created_at)) }}
								</span>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

			<div class="general-btn text-center">
				<a class="btn btn-primary" href="{{ url('/category/all') }}">Lihat Semua Berita</a>
			</div>
		</div>
	</section>

@endsection
