<?php 
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$campaign_id = $_GET['campaign_id'];

$campaigns->reactivate_campaign($campaign_id);
header('Location:merchant_drafts.php?merchant_id='.$merchant_id.'&campaign_id='.$campaign_id);  

?>