@if((count($menu->children) > 0) && ($menu->parent == 0))
	<li class="dropdown">
		<a href="{{ url($menu->url) }}" class="dropdown-toggle" data-toggle="dropdown">{!! $menu->title !!} <i class="fa fa-angle-down"></i></a>
@else
	<li>
		@if($menu->target == 'none')
		<a href="{{ url($menu->url) }}">{!! $menu->title !!}</a>
		@else
		<a href="{{ $menu->url }}" target="_blank">{!! $menu->title !!}</a>
		@endif
@endif
	@if (count($menu->children) > 0)
		<ul class="dropdown-menu" role="menu">
			@foreach($menu->children as $menu)
				@include(getTheme('partials.submenu'), $menu)
			@endforeach
		</ul>
	@endif
</li>