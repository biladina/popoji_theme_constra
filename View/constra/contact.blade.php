@extends(getTheme('layouts.app'))

@section('content')
	<div id="banner-area" class="banner-area" style="background-color: #ffb600;">
		<div class="banner-text">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="banner-heading">
							<h1 class="banner-title">Kontak</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-title">Jangan Segan-Segan</h2>
				<h3 class="section-sub-title">Kami Siap Membantu</h3>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="ts-service-box-bg text-center">
						<span class="ts-service-icon icon-round">
							<i class="fa fa-map-marker"></i>
						</span>
						<div class="ts-service-box-content">
							<h4>Kunjungi Kantor Kami</h4>
							<p>{{ getSetting('address') }}</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="ts-service-box-bg text-center">
						<span class="ts-service-icon icon-round">
							<i class="fa fa-envelope"></i>
						</span>
						<div class="ts-service-box-content">
							<h4>Email</h4>
							<p>{{ getSetting('email') }}</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="ts-service-box-bg text-center">
						<span class="ts-service-icon icon-round">
							<i class="fa fa-phone-square"></i>
						</span>
						<div class="ts-service-box-content">
							<h4>Hubungi Kami</h4>
							<p>{{ getSetting('telephone') }}</p>
						</div>
					</div>
				</div>
			</div>

			<div class="gap-60"></div>
			<div id="map" class="map"></div>
			<div class="gap-40"></div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="column-title">Kirimkan Saran Atau Pertanyaan Anda</h3>
					@if (Session::has('flash_message'))
						<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
							<span class="icon"><i class="fa fa-check"></i></span> {{ Session::get('flash_message') }}
						</div>
					@endif
					
					@if ($errors->any())
						<div class="alert alert-danger fade in" style="margin-top:18px;">
							<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
							<ul>
								@foreach ($errors->all() as $error)
									<li>
										<span class="icon"><i class="fa fa-remove"></i></span> {{ $error }}
									</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form class="comment-form" action="{{ url('contact/send') }}" method="post">
						{{ csrf_field() }}
						<div class="error-container"></div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Nama</label>
									<input class="form-control form-control-name" id="name" name="name" value="{{ old('name') }}" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control form-control-email" id="email" name="email" value="{{ old('email') }}" placeholder="" type="email" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Subyek</label>
									<input class="form-control form-control-subject" id="subject" name="subject" value="{{ old('subject') }}" placeholder="" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Pesan</label>
							<textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required>{{ old('message') }}</textarea>
						</div>
						<div class="form-group">
							{!! NoCaptcha::display() !!}
						</div>
						<button class="btn btn-primary solid blank" type="submit">Kirim</button>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
