

<?php include("inc/header.php") ?>
<?php include("bd.php")?>

<!-- menu vertical -->
<?php include("menu_vertical.php")?>
<!-- ---------- -->

<section style=" padding-left:300px; padding-top: 5%" >
         <form action="trait_search.php" method="POST" id="form-search">
          
         	<div class="row">
		<div class="col-3">
            Date: <input type="date" name="date_search" id="date_search" class="form-control">
				</div>

 
				<button type="submit" class=" btn btn-success" id="mysubmit"  name="search" value="search">search </button>

				</div>
				<div id="message"></div>
				</form>
				<div id="tableau"></div>
				<a href="list_attendance.php" style="text-align:center;">------Voir la liste de presence des etudiants</a>
</section>
 


<?php include("inc/footer.php") ?>