<?php
	include '../include/database.php';
	$db;
	if(isset($_GET['id']) AND !empty($_GET['id'])){
		$del_m=$db->prepare("DELETE  from inscription WHERE id=? ");
		$del_m->execute(array($_GET['id']));
	}
	//Cette requete permet de compter le nombre d'inscrit
	$q_count_ins=$db->prepare("SELECT COUNT(*) from inscription");
	$q_count_ins->execute();
	$result=$q_count_ins->fetch();
	$nb_total=$result[0];
	
	//echo '<center><h3>Le nombre d\'inscrit  Total est :'.$result[0].'</h3><center>';
	//Cette requete permet de compter le nombre d'annonces ou d'images dans la base de donnée
	$q_count_ann=$db->prepare("SELECT COUNT(*) from annonces");
	$q_count_ann->execute();
	$result=$q_count_ann->fetch();
	$nb_ann_total=$result[0];
	//echo '<center><h3>Le nombre d\'annonces Total est:'.$result[0].'</h3><center>';

	$q_membres=$db->prepare("SELECT * from inscription ORDER BY id DESC LIMIT 0,2");
	$q_membres->execute();
	
?>	
<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<style type="text/css">
			table
			{
			border-collapse: collapse;
			}
			td,th{
				border:1px solid black;
			}
			#mycard{
				display: flex;
				justify-content: center;
			}
	</style>
</head>
<body>
	<br>
<div class="row">
	<div class="col-sm-3">
	</div>

	<div class="col-sm-6">
		<div class="card">
			      <div class="card-body" id="mycard">

			      	<div class="col-sm-4">
				      	<div class="mb-3" style="font-size:3em;">
				      		<?=$nb_total ?>
				      	</div>
				      	<p class="card-text">Nombre Total d'inscrit</p>
			      	</div>

			      	<div class="col-sm-4">
				      	<div class="mb-3" style="font-size:3em;">
				      		<?=$nb_ann_total ?>
				      	</div>
				      	<p class="card-text">Nombre d'annonces Total</p>
			      	</div>

			      	<div class="col-sm-4">
				      	<div class="mb-3" style="font-size:3em;">
				      		<?=ajout_vue() ?>
				      	</div>
				      	<p class="card-text">Nombre Total de vues</p>
			      	</div>

			        	
			     </div>
		</div>
	</div>
</div>


<!---------------LA TABLE------------------------------>
<br>
<br>
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4">
			<center><h4>Liste des Membres</h4></center>
				<table>
					<tr>
						<th>Prénom</th>
						<th>Email</th>
						<th>Téléphone</th>
						<th>Suppression</th>
					</tr>
				<?php while($m=$q_membres->fetch()){?>
					<tr><td><?= $m['prenom'] ?></td>  <td><?= $m['email'] ?></td>
					<td><?= $m['telephone'] ?></td>	
					<td><a href="admin.php?id=<?=$m['id'] ?>">supprimer</a></td>
					</tr>



				<?php } ?>
			</table>
	</div>
</div>
<?php

function ajout_vue(){
	//require_once 
	$fichier=dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur.txt';
	$c_compteur=1;
	if(file_exists($fichier)){
		$compteur=(int)file_get_contents($fichier);
		$compteur++;
		$c_compteur=$compteur;
		file_put_contents($fichier, $compteur);
	}
	else{
		file_put_contents($fichier,'1');
	}
	return $c_compteur;


}



?>








</body>
</html>
