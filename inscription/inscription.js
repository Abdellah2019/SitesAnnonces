function postDataInscription(){

	var radios=document.getElementsByName("Genre");
	var civilite='';
	for(var i=0;i<radios.length;i++){
		if(radios[i].checked){
			civilite=radios[i].value;
			
			break;
		}
	}
	var prenom=document.getElementById("prenom").value;
	var telephone=document.getElementById("telephone").value;


	var a=document.getElementById("activites");
	var activite=a.options[a.selectedIndex].text;

	var email=document.getElementById("email").value;
	var password=document.getElementById("password").value;
	console.log(password)
	var verifie=0;
	$.ajax({
      type: 'POST',
      url: 'postDataInscription.php',
      data: {civilite: civilite,prenom: prenom,telephone: telephone,activite: activite,email: email,password: password,verifie: verifie},
      success: function(){console.log('Posted to PHP'+'  '+civilite+' '+verifie)},
      error:function(request,status,error){
      	alert("Error:could not post data");
      }
      
      
    });
}