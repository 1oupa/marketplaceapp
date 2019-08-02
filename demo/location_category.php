<?php
require 'core/init.php';
$campaign_location = $_GET['campaign_location'];
$campaign_type = $_GET['campaign_type'];
$view_location_category = $campaigns->get_campaigns_by_category($campaign_location,$campaign_type);

if(isset($_POST['location_category_deal_click'])){
    $campaign_id = $_POST['campaign_id'];
    $campaign_hits = ($_POST['campaign_hits'])+1;

    $campaigns->update_campaign_hits($campaign_id,$campaign_hits);
    header('Location:view_deal.php?campaign_id='.$campaign_id);
}
?>
<!doctype html>
<html>
<body>
<a href="login.php">Login </a>
<br>
<hr>
<br>
<a href="home.php">< BACK</a> | POLOKWANE DEALS
<br>
<hr>
<br>
<?php echo strtoupper($campaign_type)."S IN ".strtoupper($campaign_location)."<br>"; ?>
<br>
<form method="post">
<?php 
if($view_location_category){
foreach($view_location_category as $campaign_row){?>
<input type="hidden" name="campaign_id" value="<?php echo $campaign_row['campaign_id'];?>">
<input type="hidden" name="campaign_hits" value="<?php echo $campaign_row['campaign_hits'];?>">
<input type="submit" name="location_category_deal_click" value="<?php echo $campaign_row['campaign_name'];?>">
<?php } ?>
<br>
<?php } else{ ?>
No <?php echo $campaign_type."s";?> available in <?php echo $campaign_location;?>
<?php } ?>
</form>
<br>
</body>
</html>