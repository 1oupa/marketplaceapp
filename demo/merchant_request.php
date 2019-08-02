<?php
require 'core/init.php';
$campaign_id = $_GET['campaign_id'];
$merchant_id = $_GET['merchant_id'];
$date_updated = date('Y-m-d');

$campaigns->request_campaign($campaign_id,$date_updated);
header('Location:merchant_drafts.php?merchant_id='.$merchant_id);  
?>