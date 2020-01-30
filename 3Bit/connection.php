<?php

$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="3bit";

$con= new mysqli($servername, $dbuser,$dbpassword,$dbname);

if($con->connect_error)
    die($con->connect_error);


