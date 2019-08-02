<?php
require 'core/init.php';
$campaign_id = $_GET['campaign_id'];
$merchant_id = $campaigns->get_merchant_id($campaign_id);
$campaign_data = $campaigns->campaign_data($campaign_id);
if($merchant_id == 0){
    $merchant_name = 'PUBLIC MERCHANTS';
}else{
    $merchant_name = $merchants->get_merchant_name($merchant_id);
}
$other_merchant_campaigns = $campaigns->get_other_merchant_campaigns($merchant_id,$campaign_id);

if(isset($_POST['view_more'])){
    $campaign_id = $_POST['campaign_id'];
    $campaign_type = $_POST['campaign_type'];
    $campaign_hits = ($_POST['campaign_hits'])+1;

    $campaigns->update_campaign_hits($campaign_id,$campaign_hits);
    header('Location:merchant_deals.php?campaign_id='.$campaign_id);
}
?>
<?php foreach($campaign_data as $campaign_row){?>
<a href="home.php">< BACK</a><br>
<img src="campaign.png" alt="campaign ad"><br>
<?php echo $campaign_row['campaign_name'];?><br>
EXP: <?php echo $campaign_row['campaign_end'];?><br>
Hits: <?php echo $campaign_row['campaign_hits'];?><br>
<?php echo $campaign_row['campaign_description'];?><br>
<hr>
<br>
<?php }
if($other_merchant_campaigns){?>
OTHER DEALS BY <?php echo strtoupper($merchant_name); ?>
<?php foreach(array_slice($other_merchant_campaigns,0,3) as $other_deals){?>
<br>
<form method="post">
<input type="hidden" name="campaign_id" value="<?php echo $other_deals['campaign_id'];?>">
<input type="hidden" name="campaign_hits" value="<?php echo $other_deals['campaign_hits'];?>">
<input type="submit" name="location_trending_deal_click" value="<?php echo $other_deals['campaign_name'];?>">
<?php }?>
<input type="hidden" name="campaign_type" value="<?php echo $other_deals['campaign_type'];?>">
<input type="submit" name="view_more" value="VIEW ALL">
<br>
<hr>
<br>
<?php }?>
