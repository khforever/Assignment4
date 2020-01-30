<?php 
session_start();
if(isset($_SESSION['name'])){
   header('Location: index.php');
}else{ ?>
 
 <h2><a href="index.php">Home</a></h2>
  <form action="welcome.php" method="post" style="text-align:center">
   <h2>Welcome to page of register</h2>
  <table style="margin:auto; border: 1px solid black">
      <tr>
      <th><label>Enter your name</label></th>
      <th> <input type="text" name="name"><br></th>
      </tr>
      <tr>
      <th><label>Enter your Email</label></th>
      <th> <input type="email" name="email"><br></th>
      </tr>
      <tr>
      <th><label>Enter your Password</label></th>
      <th> <input type="password" name="pass" placeholder="must be numbers and letters"><br></th>
      </tr>
      <tr>
          <th><input type="submit" value="register" style="width:200px; background-color:black; color:white; border-radius:10%; font-size:18px"></th>
          <th>
              <a href="login.php" style="font-size:10px">if you have account<br> so you can login from here</a>
          </th>
      </tr>
  </table>
</form>


<?php }