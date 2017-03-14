@extends('layouts.base')

@section('body')
	<p class="livestreamTitle">Livestream title</p>
	<div class="livestream-box">
		<div class="livestreamVideo">
			<iframe src="https://www.ustream.tv/embed/23061549?html5ui" style="border: 0 none transparent;"  webkitallowfullscreen allowfullscreen frameborder="no" width="720" height="405"></iframe>
		</div>
		<div class="livestreamChatbox">
			
		</div>
	</div>
@endsection