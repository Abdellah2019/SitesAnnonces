<?php 
//setcookie('etat','v',time()+360,'/','',false,true);
$etat='v';
//on démarre une nouvelle session
session_start();
$id_session=session_id();

include '../include/database.php';
$db;
$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);
if(!empty($email) AND !empty($password)){
	$options =[
              'cost' =>12,
    ];
    $hashpassword=password_hash($password,PASSWORD_BCRYPT,$options);

    $q=$db->prepare("SELECT * from inscription WHERE email = ?");
	$q->execute([$email]);
	$result=$q->fetch();
	
	
	if(password_verify($password,$result['password'])){
		
		if($id_session){
			echo 'ID de session est:'.$id_session.'<br>';
			$_SESSION['prenom']=$result['prenom'];
			$_SESSION['id']=$result['id'];
			$GLOBALS['etat']='connexion';
			header("Location:../accueil/accueil.php");
		}

	}
	else{
		echo 'rowcount <=0';
		header("Location:connexion.php");
	}
}
else{
	
	header("Location:connexion.php");
}

?>