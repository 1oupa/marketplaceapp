<?php
require 'core/init.php';
$campaign_id = $_GET['campaign_id'];
$date_updated = date('Y-m-d');

$campaigns->expire_campaign($campaign_id,$date_updated);
header('Location:view_complete_campaigns.php');
?>

