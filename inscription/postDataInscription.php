<?php

include '../include/database.php';
echo 'Hello world';

$db;
      //echo $_GET['prenom'];
	//===============================================================================================
	//Recuperation des variables postées et on utilise cette fonction pour contourner les failles xss
	
      $civilite=htmlspecialchars($_POST['civilite']);
	$prenom=htmlspecialchars($_POST['prenom']);
	$telephone=htmlspecialchars($_POST['telephone']);
	$activite=htmlspecialchars($_POST['activite']);
	$email=htmlspecialchars($_POST['email']);
	$password=htmlspecialchars($_POST['password']);
	$verifie=htmlspecialchars($_POST['verifie']);
      
	//================================================================================================
	//on genere un hash qui permet la verification du compte utilisateur
	$hash=md5(rand(10,1000000000));

	//On verifie si ces varibles saisit par l'user si elle ne sont pas vides!
	if(!empty($civilite) AND !empty($prenom) AND !empty($telephone) AND !empty($activite) AND !empty($email)  AND !empty($password)){
            //on definit une fonction qui permet de hacher nos parametres en lui donnant des options 
            header('Location:../include/confirmationEmail.php');
            $options =[
                  'cost' =>12,
                  ];
            $hashpassword=password_hash($password,PASSWORD_BCRYPT,$options);
            $date_ins=date('Y-m-d H:i:s');
		$q=$db->prepare("INSERT INTO inscription(civilite,prenom,telephone,activite,email,password,verifie,hash,date_inscription) VALUES (:civilite,:prenom,:telephone,:activite,:email,:password,:verifie,:hash,:date_inscription)");
	 	$q->execute([		
	 			    'civilite' =>$civilite,
            		    'prenom' =>$prenom,
            		    'telephone' =>$telephone,
            		    'activite' =>$activite,
            		    'email' =>$email,
            		    'password' =>$hashpassword,
            		    'verifie' =>0,
            		    'hash' =>$hash,
                            'date_inscription'=>$date_ins
            	      ]);
	 	// Le mail a envoyé
	 	$msg='
                        <html>
                        <body>
                        <div align="center">
                        <p>
                        Your account has been made, <br /> please verify it by clicking 
                        the activation link that has been send to your email.
                        </p>
                        <a href="http://localhost/SiteAnnonces/include/confirmationEmail.php?prenom='.urlencode($prenom).'&hash='.$hash.'">Confirmez votre compte!</a>
                        ';
                        //l'adresse du destinataire
                        $to=$email;
                        $subject='signup|Verification';
                        //les headers sont des des types d'encodages facultatif
                        $headers="MIME-Version: 1.0\r\n";
                        $headers.='From:"noreplyHacker@boson.com"<support@ecommerce.com>'."\n";
                        $headers.='Content-Type:text/html;charset="utf-8"'."\n";
                        $headers.='Content-Transfer-Encoding: 8bit';
                        ini_set("SMTP","ssl://smtp.gmail.com");
                        ini_set("smtp_port","587");
                        //la fonction qui permet l'envoie des mails
                        mail($to,$subject,$msg,$headers);
                        //header("Location:../accueil/accueil.php");

	}
	else{
		include '../include/erreurSaisie.php';
	}

?>
