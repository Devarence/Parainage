<!doctype html>
<html lang="en">
  <head>
    <title>Inscription</title>
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
					<form id="example-advanced-form" action ="parrain" method="post">
					{{csrf_field()}}
					<?php
						foreach ($info as $totu)
						{ ?>
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" name="nom" value="<?php echo $totu->Nom; ?>" id="nom" placeholder="Nom" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" name="prenom" id="prenom" value="<?php echo $totu->Prenom; ?>" placeholder="Prenom" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="radio" name="sexe" id="sexe" value="Homme" required <?php if ($totu->Sexe == "Homme") { echo "checked";}?>> &nbsp; Homme &nbsp;
							<input type="radio" name="sexe" id="sexe" value="Femme" required <?php if ($totu->Sexe == "Femme") { echo "checked";} ?>> &nbsp; Femme
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="email" class="form-control has-feedback-left" name="email" id="email" value="<?php echo $totu->Email; ?>" placeholder="Email" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="date" class="form-control has-feedback-left"name="datenaissance" id="datenaissance" value="<?php echo $totu->DateNaissance; ?>" placeholder="Date de Naissance" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left"name="fonction" id="fonction" value="<?php echo $totu->Fonction; ?>" placeholder="Fonction" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left"name="pays" id="pays" value="<?php echo $totu->Pays; ?>" placeholder="Pays" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" name="ville" id="ville" value="<?php echo $totu->Ville; ?>" placeholder="Ville" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" name="numeropiece" id="numeropiece" value="<?php echo $totu->NumeroPiece; ?>" placeholder="Numero CNI / Passeport" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" name="contact" id="contact" value="<?php echo $totu->Contact; ?>" placeholder="Contact" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" name="numeromobile" id="numeromobile" value="<?php echo $totu->NumeroMobile; ?>" placeholder="Numero Mobile" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" name="numeroperfectmoney" id="numeroperfectmoney" value="<?php echo $totu->NumeroPerfectMoney; ?>" placeholder="Numero Perfect Money" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" name="username" id="username" value="<?php echo $totu->Username; ?>" placeholder="Username" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
	
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="password" class="form-control has-feedback-left" name="password" id="password" value="<?php echo $totu->Password; ?>" placeholder="Mot de passe" required>
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
						<?php
						}
					?>
						<input type='submit' style='width:20%; margin:auto; display:block;' name='submit' id='submit' value='Valider' class='btn btn-lg btn-primary btn-block'><br>
					</form>
				</center>	
				</div>
			</div>
  </body>
</html>