<?php
require 'core/init.php';

$view_merchants = $merchants->get_all_merchants();
?>
<!doctype html>
<html>
<body>
<a href="admin.php">< BACK</a> | MANAGE MERCHANTS<br>
<br>
ADD NEW MERCHANT <input type="button" onclick="window.location.href = 'merchant_add.php';" value="Create New">
<input type="text"><input type="submit" value="search">
<br>
<table style="width:100%">
  <tr>
    <th>ID</th> 
    <th>Name</th> 
    <th>Industry</th>
    <th>Location</th>
    <th>Drafted Campaigns</th>
    <th>Pending Campaigns</th>
    <th>Active Campaigns</th>
    <th>Completed Campaigns</th>
    <th></th>
  </tr>
  <?php foreach($view_merchants as $merchant_row){ 
        $merchant_id = $merchant_row['merchant_id'];
        $merchant_draft = $campaigns->get_merchant_draft($merchant_id);
        $merchant_draft_count = count($merchant_draft);
        $merchant_pending = $campaigns->merchant_pending_campaigns($merchant_id);
        $merchant_pending_count = count($merchant_pending);
        $merchant_active = $campaigns->merchant_active_campaigns($merchant_id);
        $merchant_active_count = count($merchant_active);
        $merchant_complete = $campaigns->merchant_complete_campaigns($merchant_id);
        $merchant_complete_count = count($merchant_complete);
  ?>
  <tr>
    <td><?php echo $merchant_id; ?></td>
    <td><?php echo $merchant_row['merchant_name']; ?></td> 
    <td><?php echo ucfirst($merchant_row['merchant_industry']); ?></td> 
    <td><?php echo $merchant_row['merchant_location']; ?></td>  
    <td><?php echo $merchant_draft_count; ?></td> 
    <td><?php echo $merchant_pending_count; ?></td> 
    <td><?php echo $merchant_active_count; ?></td> 
    <td><?php echo $merchant_complete_count; ?></td> 
    <th><a href="view_merchant.php?merchant_id=<?php echo $merchant_id; ?>">VIEW</a>
        <input type="submit" onclick="window.location.href='merchant_edit.php?merchant_id=<?php echo $merchant_id; ?>';" value="EDIT">  
        <input type="submit" onclick="window.location.href='merchant_delete.php';" value="DELETE">
    </th>
  </tr>
<?php } ?>
</table>


</body>
</html>
