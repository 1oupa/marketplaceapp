<?php
require 'core/init.php';

$campaign_id = $_GET['campaign_id'];
$merchant_id = $_GET[`merchant_id`];

$campaigns->expire_campaign($campaign_id);
header('Location:merchant_active.php?merchant_id='.$merchant_id);
?>