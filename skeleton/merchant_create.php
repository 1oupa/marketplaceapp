<?php
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$merchant_name = $merchants->get_merchant_name($merchant_id);

if(isset($_POST['create_campaign'])){
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

    $campaigns->insert_campaign($merchant_id,$campaign_name,$campaign_type,$campaign_description,$campaign_location,$campaign_ad,$campaign_start,$campaign_end,$campaign_status,$created_by,$date_updated);
    header('Location:merchant_drafts.php?merchant_id='.$merchant_id);
}
?>
<!doctype html>
<html>
<body>
<a href="merchant.php?merchant_id=<?php echo $merchant_id; ?>">< BACK</a> | CREATE NEW <?php echo strtoupper($merchant_name); ?> CAMPAIGN<br>
<br>
<form method="post">
<label>Name of Campaign</label>
<input type="text" name="campaign_name"><br>
<label>Type of Campaign</label>
<select name="campaign_type">
  <option value="competition">Competition</option>
  <option value="event">Event</option>
  <option value="discount">Discount</option>
  <option value="promotion">Promotion</option>
</select><br>
<label>Description of Campaign</label>
<textarea name="campaign_description"></textarea><br>
<label>Location</label>
<input type="text" name="campaign_location"><br>
<label>Campaign Ad</label>
<input type="file" name="campaign_ad"><br>
<label>Start Date</label>
<input type="date" name="campaign_start"><br>
<label>End Date</label>
<input type="date" name="campaign_end"><br>
<input type="submit" name="create_campaign" value="Create Campaign"><br>
</form>


</body>
</html>