<?php
require 'core/init.php';
$merchant_id = $_GET['merchant_id'];
$merchant_draft = $campaigns->get_merchant_draft($merchant_id);
$merchant_name = $merchants->get_merchant_name($merchant_id);
$merchant_pending = $campaigns->merchant_pending_campaigns($merchant_id);
$merchant_pending_count = count($merchant_pending);
$merchant_active = $campaigns->get_merchant_active($merchant_id);
$merchant_active_count = count($merchant_active);
$merchant_complete = $campaigns->merchant_complete_campaigns($merchant_id);
$merchant_complete_count = count($merchant_complete);

if(isset($_POST['view_campaign'])){
  $campaign_id = $_POST['campaign_id'];

  header('Location:merchant_view.php?campaign_id='.$campaign_id);
}

// if(isset($_POST['edit_campaign'])){
//   $campaign_id = $_POST['campaign_id'];
//   $merchant_id = $_POST['merchant_id'];
//   $date_updated = date('Y-m-d');

//   header('Location:merchant_edit.php?campaign_id='.$campaign_id.'&merchant_id='.$merchant_id);  
// }

// if(isset($_POST['request_campaign'])){
//   $campaign_id = $_POST['campaign_id'];
//   $merchant_id = $_POST['merchant_id'];
//   $date_updated = date('Y-m-d');

//   $campaigns->request_campaign($campaign_id,$date_updated);
//   header('Location:merchant_drafts.php?merchant_id='.$merchant_id);  
// }

if(isset($_POST['delete_campaign'])){
  
}


?>
<!doctype html>
<html>
<body>
<a href="merchant.php?merchant_id=<?php echo $merchant_id; ?>">< BACK</a> | CAMPAIGNS DRAFTS FOR <?php echo strtoupper($merchant_name);?><br>
<br>
<?php if($merchant_draft){?>
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
    <th>Remaining Days</th>
    <th></th>
  </tr>
  <form method="post">
  <?php foreach($merchant_draft as $draft_row){
        $campaign_id = $draft_row['campaign_id'];
        $campaign_start = $draft_row['campaign_start'];
        $campaign_end = $draft_row['campaign_end'];
        $merchant_id = $draft_row['merchant_id'];
        $created_by = $draft_row['merchant_id'];
        $remaining_days = $functions->get_remaining_days($campaign_start,$campaign_end);
  ?>
  <tr>
    <td><?php echo $campaign_id;?></td>
    <td><?php echo ucfirst($draft_row['campaign_name']);?></td> 
    <td><?php echo ucfirst($draft_row['campaign_type']);?></td> 
    <!-- <td><?php echo $draft_row['campaign_description'];?></td>  -->
    <td><?php echo $draft_row['campaign_location'];?></td> 
    <td><?php echo $draft_row['campaign_ad'];?></td> 
    <td><?php echo $campaign_start;?></td> 
    <td><?php echo $campaign_end;?></td> 
    <td><?php echo $remaining_days." days";?></td> 
    <th>
        <input type="hidden" name="campaign_id" value="<?php echo $campaign_id; ?>">
        <input type="hidden" name="merchant_id" value="<?php echo $draft_row['merchant_id']; ?>">
        <a href="merchant_view.php?merchant_id=<?php echo $merchant_id; ?>&campaign_id=<?php echo $campaign_id; ?>">VIEW</a>
        <a href="merchant_edit.php?merchant_id=<?php echo $merchant_id; ?>&campaign_id=<?php echo $campaign_id; ?>">EDIT</a>
        <a href="merchant_request.php?merchant_id=<?php echo $merchant_id; ?>&campaign_id=<?php echo $campaign_id; ?>">REQUEST</a>
    </th>
  </tr>
  <?php }} else {?>
    Hi <?php echo strtoupper($merchant_name); ?>. You have no drafted campaigns at the moment.<br>
    <?php if($merchant_pending_count){?>
      <input type="submit" onclick="window.location.href = 'merchant_pending.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE PENDING">
    <?php }?>
    <?php if($merchant_active_count > 0){?>
      <input type="submit" onclick="window.location.href = 'merchant_active.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE ACTIVE">
    <?php }?>
    <?php if($merchant_complete_count > 0){?>
      <input type="submit" onclick="window.location.href = 'merchant_complete.php?merchant_id=<?php echo $merchant_id;?>';" value="SEE COMPLETE">
    <?php }?>
  <?php } ?>
  </form>
</table>


</body>
</html>
