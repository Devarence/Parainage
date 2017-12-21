<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  </head>

  <body>
  @include('header')

		<div class="container-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12">
			<br>
			<br>
			<center>
				<div  class="col-xs-3 col-sm-3 col-md-3" style='text-align: center;'>
					<a href="admin"><button class='btn btn-lg btn-primary btn-block'>Administrateur</button></a>
				</div>
				<br>
				<div class="col-xs-3 col-sm-3 col-md-3" style='text-align: center;'>
					<a href="parrain"><button class='btn btn-lg btn-primary btn-block'>Parrain</button></a>
				</div>
				<br>
				<div class="col-xs-3 col-sm-3 col-md-3" style='text-align: center;'>
					<a href="inscription"><button class='btn btn-lg btn-primary btn-block'>Inscription</button></a>
				</div>
			</center>	
			</div>
		</div>
  </body>
</html>