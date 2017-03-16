<div class="contact-form col-md-12 col-xs-12">

<div class="exit flex-center">X</div>

<div class="full-height flex-center">
		<div class="col-md-4">

			<form action="/message" method="POST">

				{{csrf_field()}}

				<label for="name"> Name </label>
				<input type="text" name="name" id="name" class="form-control">

				<br>

				<label for="email"> Email </label>
				<input type="text" name="email" id="name" class="form-control">

				<br>

				<label for="subject"> Subject </label>
				<input type="text" name="subject" id="subject" class="form-control">

				<br>

				<label for="message"> Message </label>
				<textarea type="text" name="message" id="message" rows="5" class="form-control"></textarea>

				<br>

				<input type="submit" class="btn btn-block btn-primary" value="SEND">

			</form>
		</div>
</div>
</div>