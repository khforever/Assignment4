<?php 
session_start();
if(isset($_SESSION['name'])){
   header('Location: index.php');
}else{ ?> <h2><a href="index.php">Home</a></h2>
  <form action="handlelogin.php" method="post" style="text-align:center">
   <h2>Welcome to Login page</h2>
  <table style="margin:auto; border: 1px solid black">
      <tr>
      <th><label>Enter your Email</label></th>
      <th> <input type="email" name="email"><br></th>
      </tr>
      <tr>
      <th><label>Enter your Password</label></th>
      <th> <input type="password" name="password"><br></th>
      </tr>
      <tr>
          <th><input type="submit" value="LOGIN" style="width:200px; background-color:red; color:white; border-radius:10%; font-size:18px"></th>
          <th>
              <a href="reg.php" style="font-size:10px">if you don't have account<br> you can register from here</a>
          </th>
      </tr>
  </table>
</form>
<?php }