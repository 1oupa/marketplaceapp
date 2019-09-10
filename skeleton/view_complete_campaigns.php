<?php
require 'core/init.php';

$complete_campaigns = $campaigns->get_complete_campaigns();
?>

<!doctype html>
<html>
<body>
<a href="admin.php">< BACK</a> | EXPIRED CAMPAIGNS<br>
<br>
<input type="text"><input type="submit" value="search">
<br>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Merchant</th> 
    <th>Name</th> 
    <th>Type</th>
    <!-- <th>Description</th> -->
    <th>Location</th>
    <th>Picture</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Duration</th>
    <!-- <th>Creator</th> -->
    <th></th>
  </tr>
  <?php foreach($complete_campaigns as $complete_row){ 
        $campaign_id = $complete_row['campaign_id'];
        $campaign_start = $complete_row['campaign_start'];
        $date_updated = $complete_row['date_updated'];
        $merchant_id = $complete_row['merchant_id'];
        $created_by = $complete_row['created_by'];
        $merchant_name = $merchants->get_merchant_name($merchant_id);
        $duration = $functions->get_duration_days($campaign_start,$date_updated);
  ?>
  <tr>
    <td><?php echo $campaign_id; ?></td>
    <td><?php echo $merchant_name; ?></td> 
    <td><?php echo $complete_row['campaign_name']; ?></td> 
    <td><?php echo ucfirst($complete_row['campaign_type']); ?></td> 
    <!-- <td><?php echo $complete_row['campaign_description']; ?></td>  -->
    <td><?php echo $complete_row['campaign_location']; ?></td> 
    <td><?php echo $complete_row['campaign_ad']; ?></td> 
    <td><?php echo $campaign_start; ?></td>  
    <td><?php echo $date_updated; ?></td> 
    <td><?php echo $duration; ?></td>
    <!-- <td><?php echo $created_by; ?></td>  -->
    <th><a href="campaign_repeat.php?campaign_id=<?php echo $campaign_id; ?>">RE-ACTIVATE</a>
    </th>
  </tr>
  <?php } ?>
</table>


</body>
</html>
