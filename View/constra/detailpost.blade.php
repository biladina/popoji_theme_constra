@extends(getTheme('layouts.app'))

@section('content')
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="post-content post-single">
						<div class="post-media post-image image-angle">
							<img src="{{ getPicture($post->picture, 'medium', $post->updated_by) }}" class="img-responsive" alt="{{ $post->picture_description }}">
							<i>{{ $post->picture_description }}</i>
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
								{!! $content !!}
							</div>

							@php
								$post_gallery = App\PostGallery::where('post_id', '=', $post->id)->get();
							@endphp
							@if(count($post_gallery) > 0)
								<div id="page-slider" class="owl-carousel owl-theme page-slider small-bg">
									@foreach ($post_gallery as $gallery)
									<div class="item" style="background-image:url('{{ getPicture($gallery->picture, 'medium', $gallery->updated_by) }}')">
										<div class="container">
											<div class="box-slider-content">
												<div class="box-slider-text">
													<h2 class="box-slide-title">{{ $gallery->title }}</h2>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							@endif

							@if($post->type == 'pagination')
								<div class="post-footer text-center"> 
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 thm-padding">
											<ul class="pagination">
												{!! postWithPagination($paginator, '<span><</span>', '<span>></span>') !!}
											</ul>
										</div>
									</div>
								</div>
							@endif

							<div class="tags-area clearfix">
								<div class="post-tags pull-left">
									@php $tags = explode(',', $post->tag); @endphp
									@foreach ($tags as $tag)
									<a href="javascript:void(0);">{{ $tag }}</a>
									@endforeach
								</div>

								<div class="share-items pull-right">
									<ul class="post-social-icons unstyled">
										<li class="social-icons-head">Share:</li>
										<li><a href="http://www.facebook.com/sharer.php?u={{ prettyUrl($post) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/share?url={{ prettyUrl($post) }}&amp;text={{ $post->title }}&amp;hashtags={{ $post->tag}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://plus.google.com/share?url={{ prettyUrl($post) }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ prettyUrl($post) }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					@if(getSetting('comment') == 'Y' && $post->comment == 'Y')
						@if($post->comments_count > 0)
							<div id="comments" class="comments-area">
								<h3 class="comments-heading">{{ $post->comments_count }} Komentar</h3>
								<ul class="comments-list">
									@each(getTheme('partials.comment'), getComments($post->id, 5), 'comment', getTheme('partials.comment'))
								</ul>

								<div class="post-footer text-center"> 
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12">
											{{ getComments($post->id, 5)->links() }}
										</div>
									</div>
								</div>
							</div>
						@else
							<p class="text-center">Belum Ada Komentar.</p>
						@endif

						<div class="comments-form border-box">
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
							<h3 class="title-normal">Tambah Komentar</h3>
							<form class="comment-form" id="comment-form" action="{{ url('comment/send/'.$post->seotitle) }}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="parent" id="parent" value="{{ old('parent') == null ? 0 : old('parent') }}" />
								<input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}" />
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nama" type="text" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email" type="email" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control required-field" id="content" name="content" placeholder="Komentar" rows="10" required>{{ old('content') }}</textarea>
										</div>
									</div>
								</div>
								<div class="form-group">
									{!! NoCaptcha::display() !!}
								</div>
								<div class="clearfix">
									<button class="btn btn-primary" type="submit">Submit</button> 
								</div>
							</form>
						</div>
					@else
						<p class="text-center">Komentar Untuk Sementara Ditutup.</p>
					@endif
				</div>

				@include(getTheme('partials.sidebar'))
			</div>
		</div>
	</section>
@endsection

@push('scripts')
<script type="text/javascript">
	$(function() {
		$('.po-reply').on('click', function() {
			var id = $(this).attr('id');
			$('#comment-form #parent').val(id);
			
			$('html, body').animate({
				scrollTop: $("#comment-form").offset().top
			}, 1000);
		});
	});
</script>
@endpush
