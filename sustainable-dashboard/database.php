<?php
    $dbconn = mysqli_connect("localhost","root","","sdashboard");

    //Check connection
     if (mysqli_connect_errno()){    
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }