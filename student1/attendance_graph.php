 <?php include("inc/header.php") ?>
<?php include("bd.php")?>

<!-- menu vertical -->
<?php include("menu_vertical.php")?>
<!-- ------- Atendance_graph.php------ -->
<br>
<br>
<br>
<h2 style="text-align: center;">Attendance Graph</h2>
<!-- ------------- -->
<br>
<br>
<style type="text/css">
      #chart-container {
        width: 600px;
        height: auto;
        margin-left: 25%;
      }
    </style>
<!-- ------------------------ -->

<div id="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>
<!-- --------------- -->
 <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script>
       $(document).ready(function(){
  $.ajax({
    url: "data_attendance_graph.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var nom = [];
      var total_sign = [];

      for(var i in data) {
        nom.push(data[i].nom);
        total_sign.push(data[i].total_sign);
      }

      var chartdata = {
        labels: nom,
        datasets : [
          {
            label: 'Attendance',
            backgroundColor: 'black',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'green',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: total_sign
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
    </script>
<!-- ---------------------- -->
<?php include("attendance_table.php") ?>
<?php include("inc/footer.php") ?>