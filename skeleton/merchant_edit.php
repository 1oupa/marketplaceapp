<?php
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$campaign_id = $_GET['campaign_id'];
$merchant_name = $merchants->get_merchant_name($merchant_id);
$campaign_data = $campaigns->campaign_data($campaign_id);

if(isset($_POST['edit_campaign'])){
    $campaign_id = $_POST['campaign_id'];
    $merchant_id = $_POST['merchant_id'];
    $campaign_name = $_POST['campaign_name'];
    $campaign_type = $_POST['campaign_type'];
    $campaign_description = $_POST['campaign_description'];
    $campaign_location = $_POST['campaign_location'];
    $campaign_ad = $_POST['campaign_ad'];
    $campaign_start = $_POST['campaign_start'];
    $campaign_end = $_POST['campaign_end'];
    $campaign_status = 'draft';
    $created_by = $merchant_id;
    $date_updated = date('Y-m-d');

    $campaigns->update_campaign($campaign_id, $merchant_id,$campaign_name,$campaign_type,$campaign_description,$campaign_location,$campaign_ad,$campaign_start,$campaign_end,$campaign_status,$created_by,$date_updated);
    header('Location:merchant_edit.php?campaign_id='.$campaign_id.'&merchant_id='.$merchant_id);
}
?>
<!doctype html>
<html>
<body>
<?php foreach($campaign_data as $campaign_edit){?>
<a href="merchant.php?merchant_id=<?php echo $merchant_id; ?>">< BACK</a> | EDIT CAMPAIGN <?php echo $campaign_edit['campaign_name']; ?> FOR <?php echo $merchant_name; ?><br>
<br>
<form method="post">
<label>Campaign Name</label>
<input type="text" name="campaign_name" value="<?php echo $campaign_edit['campaign_name']; ?>"><br>
<label>Campaign Description</label>
<textarea name="campaign_description" value=""><?php echo $campaign_edit['campaign_description']; ?></textarea><br>
<label>Type of Campaign</label>
<select name="campaign_type">
  <option value="<?php echo $campaign_edit['campaign_type'];?>"><?php echo ucfirst($campaign_edit['campaign_type']);?></option>
  <option value="competition">Competition</option>
  <option value="event">Event</option>
  <option value="discount">Discount</option>
  <option value="promotion">Promotion</option>
</select><br>
<label>Location of Campaign</label>
<input type="text" name="campaign_location" value="<?php echo $campaign_edit['campaign_location']; ?>"><br>
<label>Campaign Ad</label>
<input type="text" name="campaign_ad" value="<?php echo $campaign_edit['campaign_ad']; ?>"><br>
<label>Start Date</label>
<input type="date" name="campaign_start" value="<?php echo $campaign_edit['campaign_start']; ?>"><br>
<label>End Date</label>
<input type="date" name="campaign_end" value="<?php echo $campaign_edit['campaign_end']; ?>"><br>
<input type="hidden" name="merchant_id" value="<?php echo $campaign_edit['merchant_id']; ?>">
<input type="hidden" name="campaign_id" value="<?php echo $campaign_edit['campaign_id']; ?>">
<input type="submit" name="edit_campaign" value="Update Campaign"><br>
</form>
<?php } ?>

</body>
</html>