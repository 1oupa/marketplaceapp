<?php
require 'core/init.php';

if(isset($_POST['add_merchant'])){
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    $usertype = 'merchant';
    $date_created = date('Y-m-d');

    $users->insert_user($username, $password, $usertype, $date_created);
}
?>

<!doctype html>
<html>
<body>
<a href="admin.php">< BACK</a> | CREATE NEW MERCHANT ACCOUNT<br>
<br>
<form method="post">
<label>Username</label>
<input type="text" name="username"><br>
<label>Password</label>
<input type="text" name="password"><br>
<input type="submit" name="add_merchant" value="Register"><br>
</form>


</body>
</html>