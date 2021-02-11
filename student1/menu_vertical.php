<div class="text-success col bg-success text-light pt-auto pb-auto h3" style="height: 60px; text-align: center;position: fixed;" >
  <p>
   Dashboard de monsieur <?php echo $_SESSION['name_teacher'] ?> 
  </p>
</div>
<div class="wrapper">
  <div class="sidebar">
    <ul>
      <li><a href="dashboard.php"><i class="fas fa-home">Dashboard</i></a></li>
      <li><a href="#"><i class="fas fa-user">Profill</i></a></li>
      <li><a href="attendance_graph.php"><i class="fas fa-project-diagram">Attendaces Graph</i></a></li>
      <li><a href="#"><i class="fas fa-address-card">Menu</i></a></li>
      <li><a href="search.php"><i class="fas fa-address-card">Liste Presence</i></a></li>
      <li><a href="list_absences.php"><i class="fas fa-address-card">Liste Absences</i></a></li>
      <li><a href="logout.php">Deconnexion</a></li>
    </ul>
  </div>
</div>