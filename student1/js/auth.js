
// Traitement Ajax
// .......................


 
// traitement de la page register.php

$(document).ready(function(){
	$("#register-form").on("submit", function(e){
    
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $(this);// (this) fait reference a ["#register-form"]
		
		var formdata = new FormData(form[0]);
		formdata.append("file", $('#profil')); 
		// "file", => le type du fichier (voir register.php ligne 64)
		// '#profil' => l'id du profil (voir register.php ligne 64)..........

		// appliquer lorsque le formulaire envoie un fichier(dans notre cas une image)

		$.ajax({
			method: "POST",
			enctype: 'multipart/form-data',// type d'encodage 
			url: "http://localhost/student/trait_register.php",
			processData: false,
	      	contentType: false,
	      	cache: false,
			dataType: "JSON",
			// envoi des donné hmtl sous forme JSON au lieu de html afin de simplifier les choses,
			// 
			data: formdata,
			success: function(reponse)
			{
				if (reponse.msg=="ok") {
					$("#message").removeClass("alert-danger").addClass("alert alert-success").html('l\'enregistrement a été effectué avec succes');
					$("#register-form").trigger('reset');
             // si le message retourné par php est egale a "ok" (voir le fichier de traitement trait_register.php) ( qui est inscrit depuis le fichier trait_register)
             // alors le message qui est inscrit dans les parentheses de html va s'executer)

				}else{
					$("#message").addClass("alert alert-danger").html(reponse.msg);
					// (reponse.msg) ici le mot "reponse" vient du parametre de la fonction "function(),
					// et "msg" c'est le numero de la ligne ,  clé du tableau (voir le fichier de traitement php)
				}
			},
			error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});

     })



// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;






	//traitement de la page  attendance.php

      $(document).ready(function(){
	$("#attendance").on("submit", function(e){
		
	
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#attendance");

		$.ajax({

           method: "POST",
           url:"http://localhost/student/trait_attendance.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {
           	if (reponse.msg=='ok') {
             
             window.location='acceuil.php'
             $("#attendance").trigger('reset');
             // si le message retourné par php est egale a "ok" 
             // alors faire une redirection vers la page 'acceuil.php'

           	
           	} else{

                 $('#message').addClass("alert alert-danger").html(reponse.msg);

                 // dans le cas contraire afficher les reponses des autres conditons en fonction
                  // des instructions qu'on a donné dans le fichier de traitement trait_attendance.php
           	}
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})


// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;





      // traitement de la page de connexion au dashboard de l'administrateur teacher_login.php


      $(document).ready(function(){
	$("#teacher_login").on("submit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#teacher_login");

		$.ajax({

           method: "POST",
           url:"http://localhost/student/trait_teacher_login.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {

           	if (reponse.msg=='ok') {
                // faire une redirection
             window.location='dashboard.php'
             $("#teacher_login").trigger('reset');
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


// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;



      // traitement de la page search.php

$(document).ready(function(){
	$("#form-search").on("submit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#form-search");

		$.ajax({

           method: "POST",
           url:"http://localhost/student/trait_search.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {

           	if (reponse.msg=='ok') {
                // faire une redirection
                $('#message').removeClass("alert alert-danger").html('');
              $('#tableau').html(reponse.tbl);
             $("#form-search").trigger('reset');
           	} else if (reponse.msg=='ok1'){

                 $('#message').addClass("alert alert-danger").html('veuillez inserer une date svp');

           	}else {

           		 $('#message').addClass("alert alert-danger").html(reponse.msg);
               $('#tableau').html('');

           	}
            
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})


// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;





// traitement de la page cheick.php (verification du mail et numero de telephone lors de la saisie)

// Verification du mail

$(document).ready(function(){
	$("#email").on("keyup", function(e){
		// $("#email") => l'element sur lequel on souhaite travailler, on enumere(dans notre cas,c'est le mail; donc on ecris l'id du mail)
		// "keyup" => l'evenement qui doit se produire lors de la saisie

		var mail = $("#email").val();

		$.ajax({

           method: "POST",
           url:"http://localhost/student/cheick.php",
           dataType:"JSON",
           data: {email:mail} ,
           
           success: function(reponse)
           {
           	if (reponse.msg=="ok") {
              $("#avert_mail").removeClass("alert-danger").html('');
              // enlever le champ d'alerte
           		return true;
                
           	} else{

                $('#avert_mail').addClass("alert alert-danger").html(reponse.msg);
                // ('#avert_mail')-> l'id du champ d'affichage du message(voir register.php)
                 

                   	}
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})


// verification du telephone

$(document).ready(function(){
	$("#tel").on("keyup", function(e){
		
    e.preventDefault();
		var telph = $("#tel").val();

		$.ajax({

           method: "POST",
           url:"http://localhost/student/cheick.php",
           dataType:"JSON",
           data: {tel:telph},
           
           success: function(reponse)
           {

           	if (reponse.msg=="ok") {
              $("#avert_tel").removeClass("alert-danger").html('');
              // enlever le champ d'alerte

           		return true;
                
           	} else{

                 $('#avert_tel').addClass("alert alert-danger").html(reponse.msg);

                   	}
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})


// ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
// ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,


// traitement de la page de connection au dashboard du student (trait_student_login.php)

$(document).ready(function(){
  $("#student_login").on("submit", function(e){
    e.preventDefault();//on desactive le comportement par defaut du formulaire
    var form = $("#student_login");

    $.ajax({

           method: "POST",
           url:"http://localhost/student/trait_student_login.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {

            if (reponse.msg=='ok') {
                // faire une redirection
             window.location='student_dashboard.php'
             $("#student_login").trigger('reset');
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
// ------------------------------------
// ----------------------------------------

// traitement de la page edit_student_password.php

$(document).ready(function(){
  $("#form_edit_password").on("submit", function(e){
        e.preventDefault();//on desactive le comportement par defaut du formulaire
    var form = $("#form_edit_password");

    $.ajax({

           method: "POST",
           url:"http://localhost/student/trait_edit_student_password.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {
            if (reponse.msg=='ok') {
             
             window.location='new_student_password.php'
             $("#form_edit_password").trigger('reset');
             

            
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
             $('#messa').removeClass("alert alert danger");
             $('#messa').addClass("alert alert-success").html('Mot de pass edité avec success');
            $("#new_password").trigger('reset');
             
            
            } else{

                 $('#messa').addClass("alert alert-danger").html(reponse.msg);
            }
           },

           error: function () {
        alert("Erreur d'envoi de donnée");
      }
    })
  });
})
// ------------------------------------
// ----------------------------------------

// traitement de la page edit_teacher_password.php

$(document).ready(function(){
  $("#teach_password").on("submit", function(e){
    
    e.preventDefault();//on desactive le comportement par defaut du formulaire
    var form = $("#teach_password");

    $.ajax({

           method: "POST",
           url:"http://localhost/student/trait_edit_teacher_password.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {
            if (reponse.msg=='ok') {
             window.location='new_teacher_password.php'
            $("#teach_password").trigger('reset');
             
            
            } else{

                 $('#mes').addClass("alert alert-danger").html(reponse.msg);
            }
           },

           error: function () {
        alert("Erreur d'envoi de donnée");
      }
    })
  });
})
// ------------------------------------
// ----------------------------------------

// traitement de la page new_teacher_password.php

$(document).ready(function(){
  $("#f-pass").on("submit", function(e){
    
    e.preventDefault();//on desactive le comportement par defaut du formulaire
    var form = $("#f-pass");

    $.ajax({

           method: "POST",
           url:"http://localhost/student/trait_new_teacher_password.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {
            if (reponse.msg=='ok') {
             $('#msag').removeClass("alert alert danger");
             $('#msag').addClass("alert alert-success").html('Mot de pass edité avec success');
            $("#f-pass").trigger('reset');
             
            
            } else{

                 $('#msag').addClass("alert alert-danger").html(reponse.msg);
            }
           },

           error: function () {
        alert("Erreur d'envoi de donnée");
      }
    })
  });
})

// --------------------------------------((((())))) -->
// traitement ajax de la page action.php 

// $(document).ready(function(){
//   $("#acxion").on("submit", function(e){
    
//     e.preventDefault();//on desactive le comportement par defaut du formulaire
//     var form = $("#acxion");

//     $.ajax({

//            method: "POST",
//            url:"http://localhost/student/action.php",
//            dataType:"JSON",
//            data: form.serialize(),
//            success: function(reponse)
//            {
//             if (reponse.msg=='ok') {
//              $('#info').removeClass("alert alert danger");
//              $('#info').addClass("alert alert-success").html('la cause mis a jour avec success');
//             $("#acxion").trigger('reset');
             
            
//             } else{

//                  $('#info').addClass("alert alert-danger").html(reponse.msg);
//             }
//            },

//            error: function () {
//         alert("Erreur d'envoi de donnée");
//       }
//     })
//   });
// })

// ------------------------------------
// ----------------------------------
// Traitement ajax du formulaire de mise a jour de la date (voir:dashboard.php)

$(document).ready(function(){
  $("#form-program").on("submit", function(e){
    
    e.preventDefault();//on desactive le comportement par defaut du formulaire
    var form = $("#form-program");

    $.ajax({

           method: "POST",
           url:"http://localhost/student/trait_program_class.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {
            if (reponse.msg=='ok') {
             $('#mes_info').removeClass("alert alert danger");
             $('#mes_info').addClass("alert alert-success").html('statut du cour mis a jour avec success,Bon debut de cours');
            $("#form-program").trigger('reset');
             
             }else if (reponse.msg=='ok2') {

              $('#mes_info').removeClass("alert alert danger");
             $('#mes_info').addClass("alert alert-success").html('Merci d\'avoir signé la fin des cours');
            $("#form-program").trigger('reset');

            } else{

                 $('#mes_info').addClass("alert alert-danger").html(reponse.msg);
            }
           },

           error: function () {
        alert("Erreur d'envoi de donnée");
      }
    })
  });
})