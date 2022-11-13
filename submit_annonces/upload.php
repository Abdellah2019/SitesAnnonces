<?php
session_start();
echo 'L\'utilisateur courant est  '.$_SESSION['prenom'].'<br>avec l\'id'.$_SESSION['id'].'<br>';

#if(isset($_POST['upload'])){
   
    #the path to store the uploaded image
    $target="../images/".basename($_FILES['image']['name']);

    # connect to the database
    include '../include/database.php';
    global $db;

    $image=$_FILES['image']["name"];
    echo $image;
    $result=$db->prepare("INSERT into annonces (image,description,id) VALUES (:image,:description,:id)");
    
    $result->execute([
        'image' =>$image,
        'description'=>$_POST['description'],
        'id'=>$_SESSION['id']
    ]);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg="Image uploaded successfully<br>";
    }
    else{
        $msg="there was a problem uploading image<br>";
    }
    echo $msg;
    /*
    $myid=6;
    $data=$db->prepare("SELECT  * from images where id=?");
    $data->execute(array($myid));
    while($row=$data->fetch()){
        echo "<div id='img_div'>";
        echo "<img src='../images/".$row['image']."'>";
    }
    */

#}



#}S


?>