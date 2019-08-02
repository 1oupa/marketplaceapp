<?php
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$merchant_complete = $campaigns->merchant_complete_campaigns($merchant_id);
$merchant_name = $merchants->get_merchant_name($merchant_id);
$merchant_draft = $campaigns->get_merchant_draft($merchant_id);
$merchant_draft_count = count($merchant_draft);
$merchant_pending = $campaigns->merchant_pending_campaigns($merchant_id);
$merchant_pending_count = count($merchant_pending);
$merchant_active = $campaigns->get_merchant_active($merchant_id);
$merchant_active_count = count($merchant_active);

if(isset($_POST['view_campaign'])){
  $campaign_id = $_POST['campaign_id'];

  header('Location:merchant_view.php?campaign_id='.$campaign_id);
}

?>
<!doctype html>
<html>
<body>
<a href="merchant.php?merchant_id=<?php echo $merchant_id; ?>">< BACK</a> | COMPLETE CAMPAIGNS FOR <?php echo strtoupper($merchant_name);?><br>
<br>
<?php if($merchant_complete){?>
<input type="text"><input type="submit" value="search">
<br>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Type</th>
    <!-- <th>Description</th> -->
    <th>Location</th>
    <th>Ad</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Status</th>
    <th></th>
  </tr>
  <form method="post">
  <?php foreach($merchant_complete as $complete_row){  
        $campaign_id = $complete_row['campaign_id'];
        $merchant_id = $complete_row['merchant_id'];
  ?>
  <tr>
    <td><?php echo $campaign_id;?></td>
    <td><?php echo ucfirst($complete_row['campaign_name']);?></td> 
    <td><?php echo ucfirst($complete_row['campaign_type']);?></td> 
    <!-- <td><?php echo $complete_row['campaign_description'];?></td>  -->
    <td><?php echo $complete_row['campaign_location'];?></td> 
    <td><?php echo $complete_row['campaign_ad'];?></td> 
    <td><?php echo $complete_row['campaign_start'];?></td> 
    <td><?php echo $complete_row['campaign_end'];?></td> 
    <td><?php echo strtoupper($complete_row['campaign_status']);?> - 
        <?php echo $complete_row['date_updated'];?></td> 
    <th>
        <input type="hidden" name="campaign_id" value="<?php echo $campaign_id; ?>">
        <input type="hidden" name="merchant_id" value="<?php echo $merchant_id; ?>">
        <a href="merchant_reactivate.php?merchant_id=<?php echo $merchant_id; ?>&campaign_id=<?php echo $campaign_id; ?>">RE-ACTIVATE</a>
    </th>
  </tr>
  <?php }} else {?>
    Hi <?php echo strtoupper($merchant_name); ?>. You have no complete/expired campaigns at the moment.<br>
    <?php if($merchant_draft_count > 0){?>
      <input type="submit" onclick="window.location.href = 'merchant_drafts.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE DRAFTS">
    <?php }?>
    <?php if($merchant_pending_count){?>
      <input type="submit" onclick="window.location.href = 'merchant_pending.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE PENDING">
    <?php }?>
    <?php if($merchant_active_count > 0){?>
      <input type="submit" onclick="window.location.href = 'merchant_active.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE ACTIVE">
    <?php }?>
  <?php } ?>
  </form>
</table>


</body>
</html>
