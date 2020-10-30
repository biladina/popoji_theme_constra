@extends(getTheme('layouts.app'))

@section('content')
	<div id="banner-area" class="banner-area" style="background-color: #ffb600;">
		<div class="banner-text">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="banner-heading">
							@if(isset($album))
								<h1 class="banner-title">{{ $album->title }}</h1>
							@else
								<h1 class="banner-title">Semua Album</h1>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="news" class="news">
		<div class="container">
			<div class="row">
				@if(isset($album))
					@foreach($gallerys as $gallery)
						<div class="col-md-4 col-xs-12" style="padding-bottom: 20px;">
							<div class="latest-post">
								<div class="latest-post-media">
									<a href="{{ getPicture($gallery->picture, 'original', $gallery->updated_by) }}" class="latest-post-img" data-fancybox="images" data-caption="{{ $gallery->title }}">
										<img class="img-responsive" src="{{ getPicture($gallery->picture, 'medium', $gallery->updated_by) }}" alt="{{ $gallery->title }}">
									</a>
								</div>
								<div class="post-body">
									<h4 class="post-title">
										{{ $gallery->title }}
									</h4>
								</div>
							</div>
						</div>
					@endforeach
				@else
					@foreach($gallerys as $gallery)
						<div class="col-md-4 col-xs-12" style="padding-bottom: 20px;">
							<div class="latest-post">
								<div class="latest-post-media">
									<a href="{{ url('album/'.$gallery->seotitle) }}" class="latest-post-img">
										<img class="img-responsive" src="{{ getPicture($gallery->gallerys[0]->picture, 'medium', $gallery->gallerys[0]->updated_by) }}" alt="{{ $gallery->title }}">
									</a>
								</div>
								<div class="post-body">
									<h4 class="post-title">
										<a href="{{ url('album/'.$gallery->seotitle) }}">{{ $gallery->title }} ({{ count($gallery->gallerys) }})</a>
									</h4>
								</div>
							</div>
						</div>
					@endforeach
				@endif

				<div class="post-footer text-center"> 
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							{{ $gallerys->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('styles')
<link href="{{ asset('po-content/frontend/constra/vendor/fancybox/jquery.fancybox.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('po-content/frontend/constra/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
@endpush
