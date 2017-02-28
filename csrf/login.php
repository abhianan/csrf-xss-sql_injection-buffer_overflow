<?php
session_start();
?>
<html>
 <body>
<?php
if (isset($_SESSION["user"])) {
    echo "<p>Welcome back, " . $_SESSION["user"] . "!<br>";
    echo '<a href="process.php?action=logout">Logout</a></p>';
}
else {
?>
  <form action="process.php?action=login" method="post">
   <p>The username is: admin <input type="text" name="user" size="17"></p>
   
   <p>The password is: test <input type="password" name="pass" size="20"></p>
   
   <input type="submit" value="Login">
  </form>
<?php
}
?>
 </body>
</html>