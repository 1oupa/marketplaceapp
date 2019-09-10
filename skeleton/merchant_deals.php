<?php 
require 'core/init.php';
$campaign_id = $_GET['campaign_id'];
$merchant_id = $campaigns->get_merchant_id($campaign_id);
$merchant_name = $merchants->get_merchant_name($merchant_id);
$view_campaigns = $campaigns->get_merchant_campaigns($merchant_id);

if(isset($_POST['deal_click'])){
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
ALL DEALS BY <?php echo strtoupper($merchant_name); ?>
<br>
<?php foreach($view_campaigns as $campaign_row){?>
<form method="post">
<input type="hidden" name="campaign_id" value="<?php echo $campaign_row['campaign_id'];?>">
<input type="hidden" name="campaign_hits" value="<?php echo $campaign_row['campaign_hits'];?>">
<input type="submit" name="deal_click" value="<?php echo $campaign_row['campaign_name'];?>">
</form>
<?php } ?>
<br>
</body>
</html>