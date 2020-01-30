<?php
include 'connection.php';
session_start();


$link=$_POST['link'];

$ran="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";





    start:
    $bit=substr(str_shuffle($ran), 0, 8);


$query="select * from links where bit='$bit'";

$query1="select * from links where link='$link'";

$result1=$con->query($query1);

$result=$con->query($query);

if($result1->num_rows>0){
 while($row=$result1->fetch_assoc()){
     $bit=$row['bit'];
     $bitlink="localhost:8080/3Bit/dir.php?id=".$row['bit'];
     header ("Location: index.php");
 }
    
    
}else if($result->num_rows>0){
        goto start;
        }else{
    





$bitlink="localhost:8080/3Bit/dir.php?id=".$bit;






if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    $newQueryU="insert into links (link, bitlink, bit, linkuser)
    values('$link','$bitlink','$bit','$id')";
    $reresult=$con->query($newQueryU);
}else{
    $newQuery="insert into links (link, bitlink, bit)
    values('$link','$bitlink','$bit')";
    $reresult=$con->query($newQuery);
}



header ("Location: index.php");
}

/*

if($resul->num_rows>0){
    $linkS=substr(str_shuffle($ran), 0, 6);
}else{
    $newQuery="insert into links (link, bitlink, bit)
values('','','')";
    $backlink=$link."/".$linkS;
}
*/










/*
do{
    $linkS=substr(str_shuffle($ran), 0, 6);
}while($links!=)
*/


/*
echo $backlink=$link."/".$linkS;
echo "<br>";
echo $backlink;

*/

/*
3bit.com/
    
    
    localhost/bit/?id=eR1wop
    
    
    
    http://localhost:8080/task4/task/
    
    */
        

?>