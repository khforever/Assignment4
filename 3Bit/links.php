<?php
include 'connection.php';
session_start();




if(isset($_SESSION['id'])){
  
    $id=$_SESSION['id'];
    $query="select links.link, links.bitlink ,users.name
from links JOIN users
ON users.id = links.linkuser
where users.id='$id'";
    $result=$con->query($query);
    
    if($result->num_rows>0){
        echo "<h4><a href='index.php'>Home</a></h4><h1 style='text-align:center'>Welcome ".$_SESSION['name']."</h1>";
        echo "<br><table style='margin:auto; width:50%'><tr'><th style='border:2px solid black'>your links</th>
        <th style='border:2px solid black'>your Short links</th></tr>";
        while($row=$result->fetch_assoc()){
            echo "<tr ><td style='border:2px solid black'>".$row['link']."</td>
            <td style='border:2px solid black'>".$row['bitlink']."</td>
            
            </tr>";
        }
    }
    
}else{
    header('Location: index.php');
}



?>