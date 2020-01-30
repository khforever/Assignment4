<?php
include 'connection.php';

$query="select bitlink from links ORDER BY id DESC
LIMIT 1";

$result=$con->query($query);


if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        
        echo "
    <input style='border-radius:5%' type='url' value='".$row['bitlink']."' readonly>";
    }
}

/*
if($result->num_rows>0){
    while($result>0){
        echo "
    <input style='border-radius:5%' type='url' value='' readonly>";
    }
}*/




?>