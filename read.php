<?php
//include('database.php');


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DISPLAY RESULTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   
   
    <div class="container  my-5">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
        <?php

        //select data from database
        $sql = "SELECT * FROM seriescrud";
        $result = mysqli_query($con,$sql);

       while ($row = mysqli_fetch_assoc($result)){

         $fname = $row['fname'];
         $lname = $row['lname'];
         $email = $row['email'];
         $mobile = $row['mobile'];

         echo ' <tr>
         <td>'.$$row['id'].'</td>
         <td>'.$lname.'</td>
         <td>'.$fmail.'</td>
         <td>'.$email.'</td>
         <td>'.$mobile.'</td>
         
       </tr>';


       } 
        


        ?>
     
     
    </tbody>
  </table>
    </div>

  </body>
</html>