<div id="coin-slider"> 
	@foreach ($slides as $slide)
	<a href="{{ $slide->sl_url}}"><img src="{{ $slide->im_url }}" height="320" alt="" />
		<span>{{ $slide->sl_title }}</span>
	</a> 			
	@endforeach
</div>