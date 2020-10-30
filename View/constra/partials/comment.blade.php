<li>
	<div class="comment">
		<img class="comment-avatar pull-left" alt="" src="{{ asset('po-admin/assets/img/avatar.jpg') }}">
		<div class="comment-body">
			<div class="meta-data">
				<span class="comment-author">{{ $comment->name }}</span>
				<span class="comment-date pull-right">{{ date('d F Y', strtotime($comment->created_at)) }}</span>
			</div>
			<div class="comment-content">
				<p>{{ strip_tags($comment->content) }}</p>
			</div>
			<div class="text-left">
				<a class="comment-reply po-reply" href="javascript:void(0);" id="{{ $comment->id }}">Balas</a>
			</div>
		</div>
	</div>

	@if (count($comment->children) > 0)
		<ul class="comments-reply">
			@foreach($comment->children as $comment)
				@include(getTheme('partials.subcomment'), $comment)
			@endforeach
		</ul>
	@endif
</li>