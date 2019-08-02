<?php 
require 'core/init.php';
$view_trending_campaigns = $campaigns->get_trending_campaigns();

if(isset($_POST['trending_deal_click'])){
    $campaign_id = $_POST['campaign_id'];
    $campaign_hits = ($_POST['campaign_hits'])+1;

    $campaigns->update_campaign_hits($campaign_id,$campaign_hits);
    header('Location:view_deal.php?campaign_id='.$campaign_id);
}

if(isset($_POST['location_search'])){
    $campaign_location = $_POST['campaign_location'];

    header('Location:location_deals.php?campaign_location='.$campaign_location);
}
?>
<!doctype html>
<html>
<body>
<a href="login.php">Login </a>
<br>
<hr>
<br>
Search A City
<form method="post"> 
<input type="text" name="campaign_location" value="Polokwane">
<input type="submit" name="location_search" value="Search">
</form>
<br>
<hr>
<br>
TRENDING DEALS
<br>
<?php foreach(array_slice($view_trending_campaigns,0,6) as $trending_row){?>
<form method="post">
<input type="hidden" name="campaign_id" value="<?php echo $trending_row['campaign_id'];?>">
<input type="hidden" name="campaign_hits" value="<?php echo $trending_row['campaign_hits'];?>">
<input type="submit" name="trending_deal_click" value="<?php echo $trending_row['campaign_name'];?>">
</form>
<?php } ?>
<br>
</body>
</html>