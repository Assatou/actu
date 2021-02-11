 
<!doctype html>
<html>
<?php
$servername = "localhost";
$database = "student_attendance";
$username = "root";
$password = "";
$datepost = date("Y-m-d");

$conn_mys = mysqli_connect($servername, $username, $password, $database);
if (!$conn_mys) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

	<div style="width:60%;">
    
		<canvas id="canvas"></canvas>

       <!-- ------------------------------------ -->
<!-- graphic du student by year vu par le teacher (voir student_actu.php) -->

	</div>
	<br>

	<script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var config = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				datasets: [{
					label: 'My sell in  ₹',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
                        <?php
                        //Get value of January
                        $querydata= mysqli_query($conn_mys, "SELECT janvier FROM mouth WHERE iduser = '{$id_msg}' ");
      // -----------------------------------------------
                        // ($id_msg)=> l'iduser envoyé par l'url dans le fichier student_actu.php
       // ----------------------------------------
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                            $amont = $getdata['janvier'];
                            echo $amont;
                            }else{
                            echo 0;
                            }
                        ?>,
						<?php
                        //Get value of February
                        $querydata= mysqli_query($conn_mys, "SELECT fevrier FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['fevrier'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
						<?php
                        //Get value of March
                        $querydata= mysqli_query($conn_mys, "SELECT mars FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['mars'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
						<?php
                        //Get value of April
                        $querydata= mysqli_query($conn_mys, "SELECT avril FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['avril'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
						<?php
                        //Get value of May
                        $querydata= mysqli_query($conn_mys, "SELECT mai FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['mai'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
						<?php
                        //Get value of June
                        $querydata= mysqli_query($conn_mys, "SELECT juin FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['juin'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
<?php
                        //Get value of July
                        $querydata= mysqli_query($conn_mys, "SELECT jueillet FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata);
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['jueillet'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,



						<?php
                        //Get value of August
                        $querydata= mysqli_query($conn_mys, "SELECT aout FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata);
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['aout'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,


                        <?php
                        //Get value of September
                        $querydata= mysqli_query($conn_mys, "SELECT septembre FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['septembre'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
                        <?php
                        //Get value of October
                        $querydata= mysqli_query($conn_mys, "SELECT octobre FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['octobre'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
                        <?php
                        //Get value of November
                        $querydata= mysqli_query($conn_mys, "SELECT novembre FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['novembre'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
                        <?php
                        //Get value of December
                        $querydata= mysqli_query($conn_mys, "SELECT decembre FROM mouth WHERE iduser = '{$id_msg}' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['decembre'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>
                        
					],
					fill: false,
				}, ]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Attendance graph by year'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Nombre de presences'
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

		
		var colorNames = Object.keys(window.chartColors);
		

		

		
		
	</script>
<!-- </body>

</html> -->
