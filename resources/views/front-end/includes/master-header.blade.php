@foreach($header as $header)


	<div class="jumbotron col-md-12 flex-center full-height" style="background-image: url(images/{{$header->image}}); background-repeat: repeat; background-size: cover; ">
		<div class="header-text">
			<h1 class="text-center">{{$header->title}}</h1>
			<p class="text-center"> {!! $header->body !!} </p>		
		</div>
	</div>

@endforeach