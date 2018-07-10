<ul>
	@foreach ($menus as $menu)
		<li><a href="/Hang/{{ $menu->hang_id }}"><span>{{ $menu->hang_name }}</span></a></li>
	@endforeach
</ul>