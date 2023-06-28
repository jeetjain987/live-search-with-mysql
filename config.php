<?php
    $con = mysqli_connect("localhost", "root", "", "school");

    if(!$con){
        echo "connection failed" . mysqli_connect_error();
    }


?>