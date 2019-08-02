<?php
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$merchant_active = $campaigns->merchant_active_campaigns($merchant_id);
$merchant_name = $merchants->get_merchant_name($merchant_id);
$merchant_draft = $campaigns->get_merchant_draft($merchant_id);
$merchant_draft_count = count($merchant_draft);
$merchant_pending = $campaigns->merchant_pending_campaigns($merchant_id);
$merchant_pending_count = count($merchant_pending);
$merchant_complete = $campaigns->merchant_complete_campaigns($merchant_id);
$merchant_complete_count = count($merchant_complete);

?>
<!doctype html>
<html>
<body>
<a href="merchant.php?merchant_id=<?php echo $merchant_id; ?>">< BACK</a> | ACTIVE CAMPAIGNS FOR <?php echo strtoupper($merchant_name);?><br>
<br>
<?php if($merchant_active){?>
<input type="text"><input type="submit" value="search">
<br>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th> 
    <th>Type</th>
    <!-- <th>Description</th> -->
    <th>Location</th>
    <th>Picture</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Expires in:</th>
    <th></th>
  </tr>
  <form method="post">
  <?php foreach($merchant_active as $active_row){
        $campaign_id = $active_row['campaign_id'];
        $campaign_name = $active_row['campaign_name'];
        $campaign_type = $active_row['campaign_type'];
        // $campaign_description = $active_row['campaign_description'];
        $campaign_location = $active_row['campaign_location'];
        $campaign_ad = $active_row['campaign_ad'];
        $campaign_start = $active_row['campaign_start'];
        $campaign_end = $active_row['campaign_end'];
        $merchant_id = $active_row['merchant_id'];
        $created_by = $active_row['merchant_id'];
        $remaining_days = $functions->get_remaining_days($campaign_start,$campaign_end);
  ?>
  <tr>
    <td><?php echo $campaign_id; ?></td>
    <td><?php echo $campaign_name; ?></td> 
    <td><?php echo $campaign_type; ?></td> 
    <!-- <td><?php echo $campaign_description; ?></td>  -->
    <td><?php echo $campaign_location; ?></td> 
    <td><?php echo $campaign_ad; ?></td> 
    <td><?php echo $campaign_start; ?></td> 
    <td><?php echo $campaign_end; ?></td> 
    <td><?php echo $remaining_days." days"; ?></td> 
    <th><input type="hidden" name="campaign_id" value="<?php echo $campaign_id;?>">
    <th><input type="hidden" name="merchant_id" value="<?php echo $merchant_id;?>">
        <a href="merchant_view.php?merchant_id=<?php echo $merchant_id; ?>&campaign_id=<?php echo $campaign_id; ?>">VIEW</a>
        <a href="merchant_expire.php?merchant_id=<?php echo $merchant_id; ?>&campaign_id=<?php echo $campaign_id; ?>">EXPIRE</a></th>
  </tr>
  <?php }} else {?>
    Hi <?php echo strtoupper($merchant_name); ?>. You have no active campaigns at the moment.<br>
    <?php if($merchant_draft_count > 0){?>
      <input type="submit" onclick="window.location.href = 'merchant_drafts.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE DRAFTS">
    <?php }?>
    <?php if($merchant_pending_count){?>
      <input type="submit" onclick="window.location.href = 'merchant_pending.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE PENDING">
    <?php }?>
    <?php if($merchant_complete_count > 0){?>
      <input type="submit" onclick="window.location.href = 'merchant_complete.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE COMPLETE">
    <?php }?>
  <?php } ?>
  </form>
</table>


</body>
</html>
