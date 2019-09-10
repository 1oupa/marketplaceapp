<?php
require 'core/init.php';

$view_merchant = $merchants->get_all_merchants();
?>
<input type="submit" onclick="window.location.href = 'admin.php';" value="ADMIN"><br>
<?php foreach($view_merchant as $row){ 
    $merchant_id = $row['merchant_id']; ?>
<input type="submit" onclick="window.location.href = 'merchant.php?merchant_id=<?php echo $merchant_id; ?>';" value="<?php echo $row['merchant_name']; ?>"><br>
<?php } ?>