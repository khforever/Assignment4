<?php
include 'connection.php';
$id=$_GET['id'];


$query="select * from links where bit='$id'";

$result=$con->query($query);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $url=$row['link'];
        header('Location:' .$url.'');
    }
}