<?php
include('database.php');
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    //insert query

    $sql = "INSERT INTO seriescrud (fname, lname, email, mobile) VALUES('$fname','$lname','$email','$mobile')";

    $result = mysqli_query($con,$sql);
    if ($result) {
        echo "sucess";
    } else {
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    
        
            <div class='container my -5'>
                <form method="post" action=>
                    <div class="mb-3">
                        <label class="form-label">Firstname</label>
                        <input type="text" class="form-control" placeholder="Enter your  first name" name="fname" autocomplete="off">

                    </div>

                  

                        <div class="mb-3">
                            <label class="form-label">Lastname</label>
                            <input type="text" class="form-control" placeholder="Enter your  Last name" name="lname" autocomplete="off">

                        </div>


                            <div class="mb-3">
                                <label class="form-label">email</label>
                                <input type="email" class="form-control" placeholder="Enter your  first email" name="email" autocomplete="off">

                            </div>
                       

                                <div class="mb-3">
                                    <label class="form-label">Mobile</label>
                                    <input type="mobile" class="form-control" placeholder="Enter your Mobile no." name="mobile" autocomplete="off">

                                </div>
                                <button class="btn.btn-dark btn-lg my-3" name="submit">submit</button>

                </form>
            </div>

        



</body>

</html>