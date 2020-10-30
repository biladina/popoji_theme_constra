<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="robots" content="index, follow" />
    <meta name="generator" content="{{ config('app.version') }}" />
    <meta name="author" content="{{ getSetting('web_author') }}" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	{!! SEO::generate() !!}

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('po-content/uploads/'.getSetting('favicon')) }}" />

	<link rel="stylesheet" href="{{ asset('po-content/frontend/constra/css/bootstrap.min.css') }}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ asset('po-content/frontend/constra/css/style.css') }}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ asset('po-content/frontend/constra/css/responsive.css') }}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ asset('po-content/frontend/constra/css/font-awesome.min.css') }}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ asset('po-content/frontend/constra/css/animate.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('po-content/frontend/constra/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('po-content/frontend/constra/css/owl.theme.default.min.css') }}">
	<!-- Colorbox -->
	<link rel="stylesheet" href="{{ asset('po-content/frontend/constra/css/colorbox.css') }}">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="{{ asset('po-content/frontend/constra/js/html5shiv.js') }}"></script>
      <script src="{{ asset('po-content/frontend/constra/js/respond.min.js') }}"></script>
    <![endif]-->

	@stack('styles')

	<script>
		window.Laravel = <?php echo json_encode([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>

	{!! NoCaptcha::renderJs() !!}

	@if(getSetting('google_analytics_id') != '')
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', "{{ getSetting('google_analytics_id') }}"]);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	@endif
</head>
<body>
	<div class="body-inner">
		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
						<ul class="top-info">
							<li><i class="fa fa-map-marker">&nbsp;</i>
								<p class="info-text">{{ getSetting('address') }}</p>
							</li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
						<ul class="unstyled">
							<li>
								<a title="Facebook" href="{{ getSetting('facebook') }}">
									<span class="social-icon"><i class="fa fa-facebook"></i></span>
								</a>
								<a title="Twitter" href="{{ getSetting('twitter') }}">
									<span class="social-icon"><i class="fa fa-twitter"></i></span>
								</a>
								<a title="Instagram" href="{{ getSetting('youtube') }}">
									<span class="social-icon"><i class="fa fa-youtube-play"></i></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<header id="header" class="header-one">
			<div class="container">
				<div class="row">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-md-3">
							<a href="{{ url('/') }}">
								<img src="{{ asset('po-content/uploads/'.getSetting('logo')) }}" alt="">
							</a>
						</div>

						<div class="col-xs-12 col-md-9 header-right">
							<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Hubungi Kami</p>
											<p class="info-box-subtitle">{{ getSetting('telephone') }}</p>
										</div>
									</div>
								</li>
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Email</p>
											<p class="info-box-subtitle">{{ getSetting('email') }}</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<nav class="site-navigation navigation navdown">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="site-nav-inner pull-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<div class="collapse navbar-collapse navbar-responsive-collapse">
									<ul class="nav navbar-nav">
										@each(getTheme('partials.menu'), getMenus(), 'menu', getTheme('partials.menu'))
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="nav-search">
						<span id="search"><i class="fa fa-search"></i></span>
					</div>

					<div class="search-block" style="display: none;">
						<form method="get" action="{{ url('search') }}">
							<input type="text" name="terms" class="form-control" placeholder="Ketik Pencarian dan Tekan Enter">
						</form>
						<span class="search-close">&times;</span>
					</div>
				</div>
			</nav>
		</header>

		@yield('content')

		<footer id="footer" class="footer bg-overlay">
			<div class="footer-main">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12 footer-widget footer-about">
							<img class="footer-logo" src="{{ asset('po-content/uploads/'.getSetting('logo_footer')) }}" alt="" />
							<p>{{ \Str::limit(strip_tags(getPages(1)->content), 200) }}</p>
							<div class="footer-social">
								<ul>
									<li><a href="{{ getSetting('facebook') }}"><i class="fa fa-facebook"></i></a></li>
									<li><a href="{{ getSetting('twitter') }}"><i class="fa fa-twitter"></i></a></li>
									<li><a href="{{ getSetting('youtube') }}"><i class="fa fa-youtube-play"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 col-sm-12 footer-widget">
							<!-- <h3 class="widget-title">ALAMAT</h3>
							<div class="working-hours">
								<i class="fa fa-location-arrow"></i> {{ getSetting('address') }}
							</div> -->
						</div>

						<div class="col-md-4 col-sm-12 footer-widget">
							<h3 class="widget-title">SITEMAP</h3>
							<ul class="list-arrow">
								<li><a href="{{ url('/') }}">Home</a></li>
								<li><a href="{{ url('pages/about-us') }}">About Us</a></li>
								<li><a href="{{ url('pages/services') }}">Services</a></li>
								<li><a href="{{ url('album/all') }}">Gallery</a></li>
								<li><a href="{{ url('contact') }}">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="copyright-info">
								<span>Copyright &copy; {{ date('Y') }} {{ getSetting('web_author') }}. All Rights Reserved.</a></span>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6">
							<div class="footer-menu">
								<ul class="nav unstyled">
									<li><a href="{{ url('pages/about-us') }}">About Us</a></li>
									<li><a href="{{ url('pages/services') }}">Services</a></li>
									<li><a href="{{ url('contact') }}">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
						<button class="btn btn-primary" title="Back to Top">
							<i class="fa fa-angle-double-up"></i>
						</button>
					</div>
				</div>
			</div>
		</footer>

		<!-- initialize jQuery Library -->
		<script type="text/javascript" src="{{ asset('po-content/frontend/constra/js/jquery.js') }}"></script>
		<!-- Bootstrap jQuery -->
		<script type="text/javascript" src="{{ asset('po-content/frontend/constra/js/bootstrap.min.js') }}"></script>
		<!-- Owl Carousel -->
		<script type="text/javascript" src="{{ asset('po-content/frontend/constra/js/owl.carousel.min.js') }}"></script>
		<!-- Color box -->
		<script type="text/javascript" src="{{ asset('po-content/frontend/constra/js/jquery.colorbox.js') }}"></script>
		<!-- Isotope -->
		<script type="text/javascript" src="{{ asset('po-content/frontend/constra/js/isotope.js') }}"></script>
		<script type="text/javascript" src="{{ asset('po-content/frontend/constra/js/ini.isotope.js') }}"></script>


    	<!-- Google Map API Key-->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
		<!-- Google Map Plugin-->
		<script type="text/javascript" src="{{ asset('po-content/frontend/constra/js/gmap3.js') }}"></script>
 
	 	<!-- Template custom -->
	 	<script type="text/javascript" src="{{ asset('po-content/frontend/constra/js/custom.js') }}"></script>

	 	@stack('scripts')
	</div>
</body>
</html>
