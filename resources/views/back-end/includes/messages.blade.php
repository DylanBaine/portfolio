
<div class="col-md-8 col-md-offset-2 messages-container">
	<h1 class="text-center">Messages</h1>
	@foreach($messages as $message)

	<div class="well clearfix">
		<div class="col-md-6">
			<h4 class="text-center">Subject:</h4>
			<p class="text-center">{{$message->subject}}</p>
		</div>
		<div class="col-md-6">
			<h4 class="text-center"> From: </h4>
			<p class="text-center">{{$message->name}} | <small> {{$message->email}}</small></p>			
		</div>

		<hr class="col-md-12">
		<div class="col-md-12">
			<h4 class="text-center">Message: </h4>
			<p class="text-center">{{$message->message}}</p>			
		</div>

	</div>

	@endforeach
</div>

