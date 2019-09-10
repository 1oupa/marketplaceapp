<?php
require 'core/init.php';

$campaign_requests = $campaigns->get_pending_campaigns();

?>
<!doctype html>
<html>
<body>
<a href="admin.php">< BACK</a> | PENDING CAMPAIGNS<br>
<br>
<input type="text"><input type="submit" value="search">
<br>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Merchant</th> 
    <th>Name</th> 
    <th>Type</th>
    <th>Description</th>
    <th>Location</th>
    <th>Picture</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Remaining Days</th>
    <th>Creator</th>
    <th></th>
  </tr>
  <?php foreach($campaign_requests as $request_row){ 
        $campaign_id = $request_row['campaign_id'];
        $campaign_start = $request_row['campaign_start'];
        $campaign_end = $request_row['campaign_end'];
        $merchant_id = $request_row['merchant_id'];
        $created_by = $request_row['merchant_id'];
        $merchant_name = $merchants->get_merchant_name($merchant_id);
        $remaining_days = $functions->get_remaining_days($campaign_start,$campaign_end);?>
  <tr>
    <td><?php echo $campaign_id;?></td>
    <td><?php echo $merchant_name;?></td> 
    <td><?php echo $request_row['campaign_name'];?></td> 
    <td><?php echo ucfirst($request_row['campaign_type']);?></td> 
    <td><?php echo $request_row['campaign_description'];?></td> 
    <td><?php echo $request_row['campaign_location'];?></td> 
    <td><?php echo $request_row['campaign_ad'];?></td> 
    <td><?php echo $request_row['campaign_start'];?></td> 
    <td><?php echo $request_row['campaign_end'];?></td> 
    <td><?php echo $remaining_days;?></td> 
    <td><?php echo $merchant_name;?></td> 
    <th><a href="campaign_edit.php?campaign_id=<?php echo $campaign_id; ?>">EDIT</a>
        <a onclick="return confirm('Are you sure you want to activate <?php echo $request_row['campaign_name'];?>?')" href="campaign_activate.php?campaign_id=<?php echo $campaign_id; ?>">ACTIVATE</a>  
        <a onclick="return confirm('Are you sure you want to delete <?php echo $request_row['campaign_name'];?>?')"  href="campaign_delete.php?campaign_id=<?php echo $campaign_id; ?>">DELETE</a>
    </th>
  </tr>
  <?php } ?>
</table>


</body>
</html>
