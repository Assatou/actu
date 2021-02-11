   

<?php include("inc/header.php") ?>
<?php include("bd.php")?>


<div class="text-success row bg-success text-light pt-auto pb-auto h3" style="height: 55px; text-align: center;" >
  
	<p class="col">
   Dashboard de monsieur <?php echo $_SESSION['name_teacher'] ?> 
  </p>
  <div style="background-color: #454545;" class="col-sm-2">
       <a style="text-decoration:none; color:white"; href="edit_teacher_password.php">Edit Password</a>
       </div>
</div>

<!-- menu vertical -->

<div class="wrapper">
  <div class="sidebar">
    <ul>
      <li><a href="dashboard.php"><i class="fas fa-home">Dashboard</i></a></li>
      <li><a href="#"><i class="fas fa-user">Profill</i></a></li>
      <li><a href="attendance_graph.php"><i class="fas fa-project-diagram">Attendaces Graph</i></a></li>
      <li><a href="#"><i class="fas fa-address-card">Menu 1</i></a></li>
      <li><a href="search.php"><i class="fas fa-address-card">Liste Presence</i></a></li>
      <li><a href="list_absences.php"><i class="fas fa-address-card">Liste Absences</i></a></li>
      <li><a href="logout.php">Deconnexion</a></li>
    </ul>
  </div>
</div>

<!--  -->
<br><br>
<!------ Dashboard ---------->
<aside style=" padding-left:280px;" >

  <!-- formulaire de mise a jour de l'emploie du temps -->
 
  <section style=" padding-left:600px; " >
    <article style="background-color: #ccc; padding: 40px; margin-right: 25px; border-radius: 50px;">
     <form action="trait_program_class.php" method="POST" id="form-program">
          <div id="mes_info"></div>
          <div class="row">
            <div class="col-md-6">
                         <h4 class="text-bold text-success">Statut du cours</h4>
                         </div>
    
            <div class="col-md-2">
                <button type="submit" class=" btn btn-success" id="mysubmit"  name="search"         value="search">Valider</button>
                </div>
        </div>

                    </div> 
                <div class="row">

                          <div class="col">
                          <label>
                            <input type="radio" name="statut_cour" value="Debut"> Debut de cour
                          </label>
                          </div>

                          <div class="col">
                          <label>
                            <input type="radio" name="statut_cour" value="Fin"> Fin des cours
                          </label>
                          </div>
                </div>                         
        </form>
        </article>
</section>
<!-- ---------- -->
</aside>
     
<br><br>



    <?php include("inc/footer.php") ?>