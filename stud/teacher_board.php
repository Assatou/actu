<?php 
    include ("database/db.php");
    $sql = "SELECT `iduser`, `nom`FROM `etudiant` WHERE 1";
    $students= $conn->prepare($sql);
    $students->execute();
    $students = $students->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($student);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>teacher</title>
  </head>
  <body>
    <div class="container">
        <section class="">
            <nav class="navbar navbar-light bg-light">
                <button class="col-md-5 btn btn-primary"><a href="#" class="text-light">Changer de mot de passe</a></button>
                <a class="col-md-3 btn btn-primary" href="#">LOGOUT</a>

            </nav>
            <a><h1>home</h1></a>
        </section > 


       <section class="mt-3">
                 <img src="img/graff.png" alt="" class="img-fluid"></section> 
        <section class="mt-5">
            <h3>Attendance table (Total=)</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Student</th>
                    <th scope="col">Number</th>
                    
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($students as $student) {?>
               
                    <tr>
                    <th scope="row"><?php echo $student["nom"] ?></th>
                    <td><a href=""><u>65</u></a></td>
                    
                    </tr>
                     
                    <?php } ?>
                </tbody>
            </table>
        </section>  
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>