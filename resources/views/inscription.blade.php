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
				<form id="example-advanced-form" action ="enregistrement" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="pseudo" id="pseudo" placeholder="Lien du Parrain (Facultatif)">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="nom" id="nom" placeholder="Nom">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="prenom" id="prenom" placeholder="Prenom">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="radio" name="sexe" id="sexe" value="Homme"> &nbsp; Homme &nbsp;
						<input type="radio" name="sexe" id="sexe" value="Femme"> &nbsp; Femme
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="email" id="email" placeholder="Email">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="date" class="form-control has-feedback-left"name="datenaissance" id="datenaissance" placeholder="Date de Naissance">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left"name="fonction" id="fonction" placeholder="Fonction">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left"name="pays" id="pays" placeholder="Pays">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="ville" id="ville" placeholder="Ville">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="numeropiece" id="numeropiece" placeholder="Numero CNI / Passeport">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="contact" id="contact" placeholder="Contact">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="file" class="form-control has-feedback-left" name="photo" id="photo" placeholder="Photo">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="numeromobile" id="numeromobile" placeholder="Numero Mobile">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="numeroperfectmoney" id="numeroperfectmoney" placeholder="Numero Perfect Money">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="text" class="form-control has-feedback-left" name="username" id="username" placeholder="Username">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
						<input type="password" class="form-control has-feedback-left" name="password" id="password" placeholder="Mot de passe">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<input type='submit' style='width:20%; margin:auto; display:block;' name='submit' id='submit' value='Valider' class='btn btn-lg btn-primary btn-block'><br>
				</form>
			</center>	
			</div>
		</div>
  </body>
</html>