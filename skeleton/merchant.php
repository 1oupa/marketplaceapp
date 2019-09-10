<?php
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$merchant_data = $merchants->get_merchant_data($merchant_id);
$campaign_data = $campaigns->get_merchant_campaigns($merchant_id);
$merchant_draft = $campaigns->get_merchant_draft($merchant_id);
$merchant_draft_count = count($merchant_draft);
$merchant_active = $campaigns->merchant_active_campaigns($merchant_id);
$merchant_active_count = count($merchant_active);
$merchant_pending = $campaigns->merchant_pending_campaigns($merchant_id);
$merchant_pending_count = count($merchant_pending);
$merchant_complete = $campaigns->merchant_complete_campaigns($merchant_id);
$merchant_complete_count = count($merchant_complete);

?>
<!doctype html>
<html>
<body>
<input type="submit" onclick="window.location.href = 'home.php';" value="HOME">
<input type="submit" onclick="window.location.href = 'login.php';" value="SWITCH">
<br><br>
MERCHANT DASHBOARD 
<br><br>
<input type="text" value="DRAFTS: <?php echo $merchant_draft_count; ?>">
<input type="text" value="PENDING: <?php echo $merchant_pending_count; ?>">
<input type="text" value="ACTIVE: <?php echo $merchant_active_count; ?>">
<input type="text" value="COMPLETED: <?php echo $merchant_complete_count; ?>">
<br>
<br>
MANAGE CAMPAIGNS<br>
<a href="merchant_account.php?merchant_id=<?php echo $merchant_id; ?>">Account</a><br>
<a href="merchant_create.php?merchant_id=<?php echo $merchant_id; ?>">Create Campaign</a><br>
<a href="merchant_drafts.php?merchant_id=<?php echo $merchant_id; ?>">Campaign Drafts</a><br>
<a href="merchant_pending.php?merchant_id=<?php echo $merchant_id; ?>">Pending Campaigns</a><br>
<a href="merchant_active.php?merchant_id=<?php echo $merchant_id; ?>">Active Campaigns</a><br>
<a href="merchant_complete.php?merchant_id=<?php echo $merchant_id; ?>">Completed Campaign</a><br>
<a href="">*Reports</a><br>

</body>
</html>
