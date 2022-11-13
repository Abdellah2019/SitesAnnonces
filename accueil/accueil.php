<?php
session_start();
$id_session=session_id();
if(isset($_SESSION['prenom'])){
//echo $etat='bla';
//echo $_GLOBALS['etat'];
$id_images=$_SESSION['id'];
include '../include/header.php';
include '../include/database.php';
echo '<center><h4> Bonjour '.$_SESSION['prenom'].'!</h4></center>';
//echo 'votre identifiant de session est<br> '.$id_session.'<br>';
echo '<center><h3>Vos Annonces</h3><center> ';
$data=$db->prepare("SELECT  * from annonces where id=?");
$data->execute(array($id_images));

 while($row=$data->fetch()){
 		/*
        echo "<div id='img_div'>";
        echo "<img src='../images/".$row['image']."' style=\"width:25%;height:30%;\">";
        echo '<br>';
        echo '<br>';
        */
        
        echo '<center>';
        echo '<div class="card" style="width: 30rem;">';
  		echo "<img src='../images/".$row['image']."'  class=\"card-img-top\" >";
  		echo '<div class="card-body">';
    	echo '<p class="card-text">'.$row['description'].'</p>';
  		echo '</div>';
		echo '</div>';
		echo '<br>';
		echo '<br>';
		echo '<center>';
    }
}

else{
	echo '<center><h3>Vous etes déconnectée :(</h3><center>';
}


?>
<!--
<div class="card" style="width: 30rem;">
  <img src="../images/nsa.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
-->