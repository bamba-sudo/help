<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	
  	.espace {

  		margin: 100px;

  	}

  	.flex {

  		display: flex;
  	}

  </style>
</head>
<body>
	<div class="jumbotron text-center bg-dark text-white">

		<h1> Bonjour Souad ! </h1>

	</div>
	<div class="container bg-dark text-white">
		<div class="row">
			<div class="col-sm-4 espace flex">
				<img style="margin-right: 20px;" src="weather.png" height="40px">
				<h3> Soif </h3>
				<form id="gform" method="POST" class="pure-form pure-form-stacked" data-email="from_email@example.com"
          action="https://script.google.com/macros/s/AKfycbyi9-LOeckOe73YRMPdUfGkDnm3rPLr2xs0fNeV/exec">
					<button style="margin-left: 50px;" type="submit" class="btn btn-light">Envoyer</button>
					<input type="hidden" id="name" value="Maman" name="name"/>
					<input type="hidden" id="message" value="Soif" name="message"/>
					<input type="hidden" id="email" name="email" type="email"/>		

				</form>
			</div>
			<div class="col-sm-4 espace flex">
				<img style="margin-right: 20px;" src="vegetables.png" height="40px">
				<h3> Faim </h3>
				<form id="gform" method="POST" class="pure-form pure-form-stacked" data-email="from_email@example.com"
          action="https://script.google.com/macros/s/AKfycbyi9-LOeckOe73YRMPdUfGkDnm3rPLr2xs0fNeV/exec">
					<button style="margin-left: 50px;" type="submit" class="btn btn-light">Envoyer</button>
					<input type="hidden" id="name" value="Maman" name="name"/>
					<input type="hidden" id="message" value="Faim" name="message"/>
					<input type="hidden" id="email" name="email" type="email"/>		
				</form>
			</div>
			<div class="col-sm-4 espace flex">
				<img style="margin-right: 20px;" src="fashion.png" height="40px">
				<h3> Habit </h3>
				<form id="gform" method="POST" class="pure-form pure-form-stacked" data-email="from_email@example.com"
          action="https://script.google.com/macros/s/AKfycbyi9-LOeckOe73YRMPdUfGkDnm3rPLr2xs0fNeV/exec">
					<button style="margin-left: 50px;" type="submit" class="btn btn-light">Envoyer</button>
					<input type="hidden" id="name" value="Maman" name="name"/>
					<input type="hidden" id="message" value="Habit" name="message"/>
					<input type="hidden" id="email" name="email" type="email"/>		
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 espace flex">
				<img style="margin-right: 20px;" src="signs.png" height="40px">
				<h3> Autre </h3>
				<form id="gform" method="POST" class="pure-form pure-form-stacked" data-email="from_email@example.com"
          action="https://script.google.com/macros/s/AKfycbyi9-LOeckOe73YRMPdUfGkDnm3rPLr2xs0fNeV/exec">
					<button style="margin-left: 50px;" type="submit" class="btn btn-light">Envoyer</button>
					<input type="hidden" id="name" value="Maman" name="name"/>
					<input type="hidden" id="message" value="Autre" name="message"/>
					<input type="hidden" id="email" name="email" type="email"/>		
				</form>
			</div>
		</div>
	</div>
</body>
</html>
