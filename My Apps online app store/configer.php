<?php



    $dbserver="localhost";
    $dbun="root";
    $dbpw=""; //we haven't username or password for server
    $db="online app store";//database name

    //connection object
    $con= new mysqli($dbserver,$dbun,$dbpw,$db);// Create connection

    if($con->connect_error){
        die("connection failed!".$con->connect_error);
    }