<?php
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$merchant_pending = $campaigns->get_merchant_pending($merchant_id);
$merchant_name = $merchants->get_merchant_name($merchant_id);
$merchant_draft = $campaigns->get_merchant_draft($merchant_id);
$merchant_draft_count = count($merchant_draft);
$merchant_active = $campaigns->merchant_active_campaigns($merchant_id);
$merchant_active_count = count($merchant_active);
$merchant_complete = $campaigns->merchant_complete_campaigns($merchant_id);
$merchant_complete_count = count($merchant_complete);
?>
<!doctype html>
<html>
<body>
<a href="merchant.php?merchant_id=<?php echo $merchant_id; ?>">< BACK</a> | PENDING CAMPAIGNS FOR <?php echo strtoupper($merchant_name); ?><br>
<br>
<?php if($merchant_pending){?>
<input type="text"><input type="submit" value="search">
<br>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th> 
    <th>Type</th>
    <th>Description</th>
    <th>Location</th>
    <th>Picture</th>
    <th>Start Date</th>
    <th>Remaining Days</th>
    <th>Due in:</th>
    <th></th>
  </tr>
  <?php foreach($merchant_pending as $pending_row){
        $campaign_id = $pending_row['campaign_id'];
        $campaign_start = $pending_row['campaign_start'];
        $campaign_end = $pending_row['campaign_end'];
        $remaining_days = $functions->get_remaining_days($campaign_start,$campaign_end);

  ?>
  <tr>
    <td><?php echo $campaign_id; ?></td>
    <td><?php echo $pending_row['campaign_name']; ?></td> 
    <td><?php echo ucfirst($pending_row['campaign_type']); ?></td> 
    <td><?php echo $pending_row['campaign_description']; ?></td> 
    <td><?php echo $pending_row['campaign_location']; ?></td> 
    <td><?php echo $pending_row['campaign_ad']; ?></td> 
    <td><?php echo $campaign_start; ?></td> 
    <td><?php echo $campaign_end; ?></td> 
    <td><?php echo $remaining_days; ?></td> 
    <th><input type="submit" value="CANCEL"></th>
  </tr>
  <?php }} else { ?>
    Hi <?php echo strtoupper($merchant_name); ?>. You have no campaigns pending at the moment.<br>
    <?php if($merchant_draft_count){?>
      <input type="submit" onclick="window.location.href = 'merchant_drafts.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE DRAFTS">
    <?php }?>
    <?php if($merchant_active_count > 0){?>
      <input type="submit" onclick="window.location.href = 'merchant_active.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE ACTIVE">
    <?php }?>
    <?php if($merchant_complete_count > 0){?>
      <input type="submit" onclick="window.location.href = 'merchant_complete.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE COMPLETE">
    <?php }?>
  <?php } ?>
</table>


</body>
</html>
