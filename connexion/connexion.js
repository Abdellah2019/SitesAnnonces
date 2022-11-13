function postDataconnexion(){
	var email=document.getElementById("email");
	var password=document.getElementById("password");
	$.ajax({
      type: 'POST',
      url: 'postDataconnexion.php',
      data: {email:email,password:password},
      success: function(){alert('Posted to PHP')},
      mimeType: 'text'
    });
    window.location.href="http://localhost/SiteAnnonces/accueil/accueil.php";

}