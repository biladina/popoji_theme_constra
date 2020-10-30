@extends(getTheme('layouts.app'))

@section('content')
	<div id="banner-area" class="banner-area" style="background-color: #ffb600;">
		<div class="banner-text">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="banner-heading">
							<h1 class="banner-title">{{ $tag->title }} ({{ $posts->total() }})</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					@foreach($posts as $post)
					<div class="post">
						<div class="post-media post-image">
							<img src="{{ getPicture($post->picture, 'medium', $post->updated_by) }}" class="img-responsive" alt="">
						</div>

						<div class="post-body">
							<div class="entry-header">
								<div class="post-meta">
									<span class="post-author">
										<i class="fa fa-user"></i><a href="javascript:void(0);"> {{ $post->name }}</a>
									</span>
									<span class="post-cat">
										<i class="fa fa-folder-open"></i><a href="{{ url('category/'.$post->cseotitle) }}"> {{ $post->ctitle }}</a>
									</span>
									<span class="post-meta-date"><i class="fa fa-calendar"></i> {{ date('d F Y' , strtotime($post->created_at)) }}</span>
									<span class="post-comment"><i class="fa fa-eye"></i> {{ $post->hits }} Views</span>
								</div>
								<h2 class="entry-title">
									<a href="{{ prettyUrl($post) }}">{{ $post->title }}</a>
								</h2>
							</div>

							<div class="entry-content">
								<p>{{ \Str::limit(strip_tags($post->content), 150) }}</p>
							</div>

							<div class="post-footer">
								<a href="{{ prettyUrl($post) }}" class="btn btn-primary">Lanjut Membaca</a>
							</div>
						</div>
					</div>
					@endforeach

					<div class="paging text-center">
						<ul class="pagination">
							{{ $posts->links() }}
						</ul>
					</div>
				</div>
				
				@include(getTheme('partials.sidebar'))
			</div>
		</div>
	</section>
@endsection
