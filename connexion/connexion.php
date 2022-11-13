
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/connexion.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<script type="text/javascript" src="connexion.js"></script>
	
	
</head>
<body>
<header class="topbar">
<div class="myheader">
<a href="#" class="topbar-logo"></a>
</div>
</header>
<br>
<br>
<br>

<form method="POST" name="formulaire" action="postDataconnexion.php" >
	<div class="row">
	<div class="col-sm-4">
	</div>

	<div class="col-sm-4">

		  
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title" id="bonjour">Bonjour!</h5>
	        <p class="card-text">Connectez-vous pour découvrir
	        toutes nos fonctionnalités</p>
			
				
				<!-- E-mail-->
				<!--
				<div class="row">
					<div class="col-sm-1">
				</div>

	 			<div class="col-sm-3">
	 			-->
	  			<h6>E-mail</h6>
	  			<div class="mb-3">
  				<!--<label for="exampleFormControlInput1" class="form-label">Email address</label>-->
  				<input type="email" class="form-control" name="email" id="email" placeholder="ex: abdellah.papa@gmail.com">
				</div>

				<h6>Mot de Passe</h6>
	  			<div class="mb-3">
  				<!--<label for="exampleFormControlInput1" class="form-label">Email address</label>-->
  				<input type="password" class="form-control" name="password" id="password" >
				</div>

				<div class="d-grid gap-2 col-6 mx-auto">
  				<button type="submit"class="btn btn-primary" type="button">Connecter</button>
				</div>
	 	 	</div>

			

</div>
				


			</form>
		</div>
	</div>
	</div>
</div>

</body>
</html>
