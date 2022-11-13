<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sub Annonces</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/css/submit.css">
	<script type="text/javascript" src="submit.js"></script>

</head>
<body>
<?php  

	
	
if(isset($_SESSION['prenom'])){

			include '../include/header.php';
				echo '
				<div class="container">
					<form action="upload.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<!--
							<div class="uploadOuter">
								<label for="uploadFile" class="btn btn-primary">
									Upload Image
								</label>
								<strong>OR</strong>
							</div>
						-->
							<div class="myDragBox">
								<span class="dragBox">
									Drag and Drop Image here
								<input type="file" onchange="dragNdrop(event)"
								ondragover="drag()"
								ondrop="drop()" name="image">
								</span>
							</div>
						</div>
						<div class="uploadOuter">
								<!--<button type="button" class="btn btn-primary" >Primary</button>-->
								<!--<label for="uploadFile" class="btn btn-primary" onclick="dragNdrop(event)">
									Upload Image
								</label>-->

								<strong>OR</strong>
							</div>

						<div id="preview">
						<br>
						<br>
						</div>

					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-4">
						<center><h3>Description</h3></center>
						<div class="input-group ">
						  <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
						</div>
						<br>
						<center><input class="btn btn-primary" type="submit" value="upload"></center>
						</form>
					</div>
					


				</div>

				</body>
				</html>
				';
}
else{
	echo '<br><center><h3>Vous êtes deconnectée :(</h3><center>';
}