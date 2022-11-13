<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/inscription.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<script type="text/javascript" src="inscription.js"></script>
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
<br>


<!--<form method="POST" name="formulaire">-->
<!-- Civilité -->
<div class="row">
	<div class="col-sm-1">
	</div>

	<div class="col-sm-1">
		<h6>Civilité</h6>
	</div>

	<!--<h6>Civilité</h6>-->
</div>
<div class="row">
	<div class="col-sm-1">
	</div>

	
	
	<div class="col-sm-1">
		<div>
		<input type="radio" id="monsieur" name="Genre" value="monsieur"
				        >
		<label for="monsieur">Monsieur</label>
		</div>
		
		
	</div>
	
	<div class="col-sm-1">
		
		<input type="radio" id="madame" name="Genre" value="madame"
				        >
		<label for="madame">Madame</label>


	</div>

</div>

<!-- Prenom d'utilisateur -->
<div class="row">
	  <div class="col-sm-1">
	  </div>

	  <div class="col-sm-3">
	  		<h6>Prenom d'utilisateur</h6>
	  		<div class="mb-3">
  				<!--<label for="exampleFormControlInput1" class="form-label">Email address</label>-->
  				<input type="texte" class="form-control" name="prenom" id="prenom" placeholder="ex: Abdellah">
			</div>
	  </div>
  
</div>
<!-- Telephone-->
<div class="row">
	  <div class="col-sm-1">
	  </div>

	  <div class="col-sm-3">
	  		<h6>Telephone</h6>
    		<input class="form-control" type="tel" value="+222" id="telephone">
  	
	  </div>
  
</div>
<!-- CATEGORIE DE VOTRE ACTIVIVITE -->
<div class="row">
	<div class="col-sm-1">
	</div>

	<div class="col-sm-3">
		<h6>Catégorie associée à votre activité</h6>
		<select id="activites"class="form-select" aria-label="Default select example">
  			<option selected>Sélectionner</option>
  			<option value="VEHICULE">VEHICULE</option>
  			<option value="IMMOBILIER">IMMOBILIER</option>
  			<option value="MULTIMEDIA">MULTIMEDIA</option>
  			<option value="MAISON">MAISON</option>
  			<option value="LOISIRS">LOISIRS</option>
  			<option value="SERVICES">SERVICES</option>
  			<option value="MATERIEL PROFESSIONNEL">MATERIEL PROFESSIONNEL</option>
  			<option value="EMPLOI">EMPLOI</option>
		</select>


	</div>
</div>

<!-- E-mail-->
<div class="row">
	<div class="col-sm-1">
	</div>
	 <div class="col-sm-3">
	  		<h6>E-mail</h6>
	  		<div class="mb-3">
  				<!--<label for="exampleFormControlInput1" class="form-label">Email address</label>-->
  				<input type="email" class="form-control" id="email" placeholder="ex: abdellah.papa@gmail.com">
			</div>
	  </div>
			

</div>



<!-- Mot de passe -->
<div class="row">
	<div class="col-sm-1">
	</div>
	 <div class="col-sm-3">
	  		<h6>Mot de Passe</h6>
	  		<div class="mb-3">
  				<!--<label for="exampleFormControlInput1" class="form-label">Email address</label>-->
  				<input type="password" class="form-control" id="password" >
			</div>
	  </div>
	 
</div>


<!--  -->
<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-3">
	<p class="notice_utilisateur">
	 En créant mon compte je reconnais avoir lu et accepté les<a href="#"> Conditions Générales de vente</a> et <a href="#">les Conditions générales d'utilisations</a>, et je confirme être âgé d'au moins 18 ans.
	 </p>
	</div>

</div>
<!--  -->
<div class="row">
	<div class="col-sm-1">
	</div>
	 <div class="col-sm-3">
	  		<div class="mb-3">
  				<button type="submit" class="btn btn-primary btn-lg btn-block" onclick="postDataInscription()" name="formsend">inscription</button>


			</div>
	  </div>
	 
</div>

<!--</form>-->

</body>
</html>