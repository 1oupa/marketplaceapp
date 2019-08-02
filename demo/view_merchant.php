<?php
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$merchant_data = $merchants->get_merchant_data($merchant_id);
$merchant_name = $merchants->get_merchant_name($merchant_id);

if(isset($_POST['update_campaign'])){
    $merchant_id= $_POST['merchant_id'];
    $merchant_name = $_POST['merchant_name'];
    $merchant_industry = $_POST['merchant_industry'];
    $merchant_location = $_POST['merchant_location'];
    $merchant_contact = $_POST['merchant_contact'];
    $merchant_email = $_POST['merchant_email'];
    $merchant_facebook = $_POST['merchant_facebook'];
    $merchant_twitter = $_POST['merchant_twitter'];
    $merchant_instagram = $_POST['merchant_instagram'];

    $merchants->update_merchant($merchant_id,$merchant_name,$merchant_industry,$merchant_location,$merchant_contact,$merchant_email,$merchant_facebook,$merchant_twitter,$merchant_instagram);
    header('Location:merchant_account.php?merchant_id='.$merchant_id);
}
?>
<!doctype html>
<html>
<body>
<a href="admin.php">< BACK</a> | Edit <?php echo strtoupper($merchant_name)."'s"; ?> Account<br>
<br>
<form method="post">
<?php foreach($merchant_data as $row){ ?>
<label>Name</label>
<input type="hidden" name="merchant_id" value="<?php echo $row['merchant_id'];?>">
<input type="text" name="merchant_name" value="<?php echo $row['merchant_name'];?>"><br>
<label>Industry</label>
<input type="text" name="merchant_industry" value="<?php echo $row['merchant_industry'];?>"><br>
<label>Location</label>
<input type="text" name="merchant_location" value="<?php echo $row['merchant_location'];?>"><br>
<label>Contact</label>
<input type="text" name="merchant_contact" value="<?php echo $row['merchant_contact'];?>"><br>
<label>E-mail</label>
<input type="text" name="merchant_email" value="<?php echo $row['merchant_email'];?>"><br>
<label>facebook_page</label>
<input type="text" name="merchant_facebook" value="<?php echo $row['merchant_facebook'];?>"><br>
<label>twitter_page</label>
<input type="text" name="merchant_twitter" value="<?php echo $row['merchant_twitter'];?>"><br>
<label>instagram_page</label>
<input type="text" name="merchant_instagram" value="<?php echo $row['merchant_instagram'];?>"><br>
<input type="submit" name="update_campaign" value="Update Account"><br>
<?php } ?>
</form>


</body>
</html>