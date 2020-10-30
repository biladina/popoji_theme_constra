@extends(getTheme('layouts.app'))

@section('content')
	<div id="banner-area" class="banner-area" style="background-color: #ffb600;">
		<div class="banner-text">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="banner-heading">
							<h1 class="banner-title" style="font-size: 45px;">{{ $pages->title }}</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-inner-page">
						@if($pages->picture != '')
							<div class="owl-carousel owl-theme page-slider page-slider-small">
								<div class="item">
									<img src="{{ getPicture($pages->picture, null, $pages->updated_by) }}" alt="{{ $pages->title }}" />
								</div>
							</div>
						@endif

						<div class="gap-40"></div>
						
						<div class="row">
							<div class="col-md-12">
								{!! $pages->content !!}
							</div>
						</div>

						<div class="gap-40"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
