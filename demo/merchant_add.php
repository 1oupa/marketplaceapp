<?php
require 'core/init.php';

$merchant_user_id = $_GET['merchant_user_id'];

if(isset($_POST['add_merchant'])){
    $merchant_name = htmlentities($_POST['merchant_name']);
    $merchant_industry = htmlentities($_POST['merchant_industry']);
    $merchant_location = htmlentities($_POST['merchant_location']);
    $merchant_email = htmlentities($_POST['merchant_email']);
    $merchant_contact = htmlentities($_POST['merchant_contact']);
    $facebook_page = htmlentities($_POST['facebook_page']);
    $twitter_page = htmlentities($_POST['twitter_page']);
    $instagram_page = htmlentities($_POST['instagram_page']);

    $merchants->insert_merchant($merchant_user_id,$merchant_name,$merchant_industry,$merchant_location,$merchant_email,$merchant_contact,$facebook_page,$twitter_page,$instagram_page);
    header('Location:merchant_management.php');
}
?>

<!doctype html>
<html>
<body>
<a href="admin.php">< BACK</a> | CREATE NEW MERCHANT ACCOUNT<br>
<br>
<form method="post">
<label>Name</label>
<input type="text" name="merchant_name"><br>
<label>Industry</label>
<input type="text" name="merchant_industry"><br>
<label>Location</label>
<input type="text" name="merchant_location"><br>
<label>Contact</label>
<input type="text" name="merchant_contact"><br>
<label>E-mail</label>
<input type="text" name="merchant_email"><br>
<label>facebook_page</label>
<input type="text" name="facebook_page"><br>
<label>twitter_page</label>
<input type="text" name="twitter_page"><br>
<label>instagram_page</label>
<input type="text" name="instagram_page"><br>
<input type="submit" name="add_merchant" value="Create Account"><br>
</form>


</body>
</html>