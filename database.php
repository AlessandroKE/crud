<?php

$con=mysqli_connect('localhost','root','','crudseries');
if(!$con)
{
    die(mysqli_error("error" +$con));
    
}else{
    echo "connection to the database was successful";
    //echo "connection to the database failed";
}
?>