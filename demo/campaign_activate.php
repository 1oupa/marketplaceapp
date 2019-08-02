<?php 
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$campaign_id = $_GET['campaign_id'];

$campaigns->activate_campaign($campaign_id);
header('Location:view_active_campaigns.php?');   

?>