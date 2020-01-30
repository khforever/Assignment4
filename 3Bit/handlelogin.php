<?php

include 'connection.php';

$eemail=$_POST['email'];
$password=$_POST['password'];
$email=strtolower( $eemail );


$query="select * from users where email = '$email'";
$result=$con->query($query);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        
        if($row['pass']==$password){
            session_start();
           
            $_SESSION['name']= $row['name'];
            $_SESSION['id']= $row['id'];
            
            
            header ("Location: index.php");
            
        }else{
            echo "wrong password";
        }
    }
}

/*
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
}else{
    echo "you can't";
    or header location, for test
}*/








?>