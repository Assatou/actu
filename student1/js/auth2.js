// Traitement Ajax
// .......................


 
// traitement de la page edit_student_profil.php

$(document).ready(function(){
	$("#student_login").on("mysubmit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $(this);// (this) fait reference a ["#register-form"]
		
		var formdata = new FormData(form[0]);
		formdata.append("file", $('#profil')); 
		
		$.ajax({
			method: "POST",
			enctype: 'multipart/form-data',// type d'encodage 
			url: "http://localhost/student/trait_edit_student_profil.php",
			processData: false,
	      	contentType: false,
	      	cache: false,
			dataType: "JSON",
			data: formdata,
			success: function(reponse)
			{
				if (reponse.msg=="ok") {
					$("#message").removeClass("alert-danger").addClass("alert alert-success").html('les modification ont été effectuées avec success');
					$("#student_login").trigger('reset');
					window.location='student_dashboard.php'
             
				}else{
					$("#message").addClass("alert alert-danger").html(reponse.msg);
					
				}
			},
			error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});

     })



// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// ----------------------------------------

// traitement de la page new_student_password.php

$(document).ready(function(){
  $("#new_password").on("submit", function(e){
    
    e.preventDefault();//on desactive le comportement par defaut du formulaire
    var form = $("#new_password");

    $.ajax({

           method: "POST",
           url:"http://localhost/student/trait_new_student_password.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {
            if (reponse.msg=='ok') {
             $('#message').removeClass("alert alert danger").addClass("alert alert-success").html('Mot de pass edité avec success');
            $("#new_password").trigger('reset');

            
            } else{

                 $('#message').addClass("alert alert-danger").html(reponse.msg);

                 
            }
           },

           error: function () {
        alert("Erreur d'envoi de donnée");
      }
    })
  });
})