<?php
require 'core/init.php';
$campaign_id = $_GET['campaign_id'];
$view_campaign = $campaigns->get_campaign_data($campaign_id);

if(isset($_POST['update_campaign'])){
    $merchant_id = htmlentities($_POST['merchant_id']);
    $campaign_name = htmlentities($_POST['campaign_name']);
    $campaign_type = htmlentities($_POST['campaign_type']);
    $campaign_description = htmlentities($_POST['campaign_description']);
    $campaign_location = htmlentities($_POST['campaign_location']);
    $campaign_ad = htmlentities($_POST['campaign_ad']);
    $campaign_start = htmlentities($_POST['campaign_start']);
    $campaign_end = htmlentities($_POST['campaign_end']);
    $campaign_status = "draft";
    $created_by = $merchant_id;
    $date_updated = date('Y-m-d');

    $campaigns->update_campaign($campaign_id, $merchant_id,$campaign_name,$campaign_type,$campaign_description,$campaign_location,$campaign_ad,$campaign_start,$campaign_end,$campaign_status,$created_by,$date_updated);
    header('Location:campaign_edit.php?campaign_id='.$campaign_id);
}
?>
<!doctype html>
<html>
<body>
<a href="admin.php">< BACK</a> | EDIT CAMPAIGN<br>
<br>
<?php foreach($view_campaign as $campaign_row){?>
<form method="post">
<label>Campaign Name</label>
<input type="text" name="campaign_name" value="<?php echo $campaign_row['campaign_name'];?>"><br>
<label>Campaing Type</label>
<input type="text" name="campaign_type" value="<?php echo $campaign_row['campaign_type'];?>"><br>
<label>Description</label>
<input type="text" name="campaign_description" value="<?php echo $campaign_row['campaign_description'];?>"><br>
<label>Location</label>
<input type="text" name="campaign_location" value="<?php echo $campaign_row['campaign_location'];?>"><br>
<label>Picture</label>
<input type="file" name="campaign_ad" value="<?php echo $campaign_row['campaign_ad'];?>"><br>
<label>Start Date</label>
<input type="date" name="campaign_start" value="<?php echo $campaign_row['campaign_start'];?>"><br>
<label>End Date</label>
<input type="date" name="campaign_end" value="<?php echo $campaign_row['campaign_end'];?>"><br>
<input type="hidden" name="merchant_id" value="<?php echo $campaign_row['merchant_id'];?>">
<input type="submit" name="update_campaign" value="Update Campaign"><br>
</form>
<?php } ?>


</body>
</html>