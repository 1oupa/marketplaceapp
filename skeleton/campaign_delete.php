<?php
require 'core/init.php';
$campaign_id = $_GET['campaign_id'];

    $campaigns->delete_campaign($campaign_id);
    Print '<script>alert("Campaign Successfully Deleted");
    window.location.assign("admin.php")</script>';
?>