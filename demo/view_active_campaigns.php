<?php
require 'core/init.php';

$view_active_campaigns = $campaigns->get_active_campaigns();
?>

<!doctype html>
<html>
<body>
<a href="admin.php">< BACK</a> | VIEW ACTIVE CAMPAIGNS<br>
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
  <?php foreach($view_active_campaigns as $active_row){ 
        $campaign_id = $active_row['campaign_id'];
        $campaign_start = $active_row['campaign_start'];
        $campaign_end = $active_row['campaign_end'];
        $merchant_id = $active_row['merchant_id'];
        $created_by = $active_row['created_by'];
        $merchant_name = $merchants->get_merchant_name($merchant_id);
        $remaining_days = $functions->get_remaining_days($campaign_start,$campaign_end);
  ?>
  <tr>
    <td><?php echo $campaign_id; ?></td>
    <td><?php echo $merchant_name; ?></td> 
    <td><?php echo $active_row['campaign_name']; ?></td> 
    <td><?php echo $active_row['campaign_type']; ?></td> 
    <td><?php echo $active_row['campaign_description']; ?></td> 
    <td><?php echo $active_row['campaign_location']; ?></td> 
    <td><?php echo $active_row['campaign_ad']; ?></td> 
    <td><?php echo $campaign_start; ?></td> 
    <td><?php echo $campaign_end; ?></td> 
    <td><?php echo $remaining_days; ?></td> 
    <td><?php echo $created_by; ?></td> 
    <td><a onclick="return confirm('<?php echo $remaining_days; ?> remaining until <?php echo $request_row['campaign_name'];?> ends. Are you sure you want to expire it now?')" href="campaign_expire.php?campaign_id=<?php echo $campaign_id; ?>">EXPIRE</a>
  </tr>
  <?php } ?>
</table>


</body>
</html>
