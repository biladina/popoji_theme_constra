<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div class="sidebar sidebar-right">
		<div class="widget recent-posts">
			<h3 class="widget-title">Berita Terbaru</h3>
			<ul class="unstyled clearfix">
				@foreach(latestPost(5) as $latestPost)
				<li>
					<div class="posts-thumb pull-left">
						<a href="{{ prettyUrl($latestPost) }}"><img alt="img" src="{{ getPicture($latestPost->picture, 'medium', $latestPost->updated_by) }}"></a>
					</div>
					<div class="post-info">
						<h4 class="entry-title">
							<a href="{{ prettyUrl($latestPost) }}">{{ $latestPost->title }}</a>
						</h4>
					</div>
					<div class="clearfix"></div>
				</li>
				@endforeach
			</ul>
		</div>

		<div class="widget">
			<h3 class="widget-title">Kategori</h3>
			<ul class="arrow nav nav-tabs nav-stacked">
				@foreach(getCategory(100) as $category)
					<li><a href="{{ url('category/'.$category->seotitle) }}">{{ $category->title }}</a></li>
				@endforeach
			</ul>
		</div>

		<div class="widget widget-tags">
			<h3 class="widget-title">Tagar</h3>
			<ul class="unstyled clearfix">
				@foreach(getTag(10) as $tag)
					<li><a href="{{ url('tag/'.$tag->seotitle) }}">{{ $tag->title }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>