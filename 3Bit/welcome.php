<?php
include 'connection.php';
$name=$_POST['name'];
$eemail=$_POST['email'];
$password=$_POST['pass'];
$email=strtolower( $eemail );



    
    if(preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $password) && strlen($password)>7 ){
    

    $query="select email from users where email ='$email'";

$result=$con->query($query);
    
    
    if($result->num_rows>0){
      
              while($row=$result->fetch_assoc()){
        echo "you have account, are you forget your password?, go home to <a href='index.php'>register or login</a>";
              }
    }else{
        $query="insert into users (name,email,pass) values('$name','$email','$password')";
        $result=$con->query($query);
        echo "Registration successful, <a href='login.php'>login from here</a>";

    }
    
    
}else{
    echo "<h3 style='text-align:center'>you must enter acceptable values for user name, email and password, and password must be numbers and letter above 8 characters <a href='reg.php'>register again</a></h3>";
}
    
    

 /*   
    echo "No special characters in mail <a>Register again</a>";*/

    



/*

echo "Registration successful, <a href='login.php'>login from here</a>";
*/





?>