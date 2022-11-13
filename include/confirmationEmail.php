<?php
include 'database.php';
global $db;
if(isset($_GET['prenom'],$_GET['hash']) AND !empty($_GET['prenom']) AND !empty($_GET['hash'])){
	$prenom=htmlspecialchars(urldecode($_GET['prenom']));
	$hash=htmlspecialchars($_GET['hash']);

	$requser=$db->prepare("SELECT * FROM inscription WHERE prenom = ? AND hash = ?");
	//echo $requser;
	global $email;
	echo $email;
	$requser->execute(array($prenom,$hash));
	$result=$requser->fetch();
	//print_r($result);

	$userexist=$requser->rowCount();
	

		if($userexist == 1){
			if($result['verifie'] == 0 AND $result['hash'] == $hash ){
				echo "yeees je suis rentré!";
				//on change la confirmation de l'utisateur en passant sa valeur de 0 à 1
				$updateuser=$db->prepare("UPDATE inscription SET verifie =1 WHERE prenom = ? AND hash= ?");
				$updateuser->execute(array($prenom,$hash));
				echo 'Votre compte a bien été confirmé!';

		}
			else{
				echo 'votre compte a déjà été confirmé!!';
		}
	}
	else{

		echo "votre email est déjà enregistré";
	}
}
?>