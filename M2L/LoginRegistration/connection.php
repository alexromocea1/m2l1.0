<?php

    $con=mysqli_connect('localhost','root','','m2l');
    
    if(!$con)
    {
        die('Connection Error'.mysqli_error($con));
    }

?>