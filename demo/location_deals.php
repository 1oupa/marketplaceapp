<?php
require 'core/init.php';
$campaign_location = $_GET['campaign_location'];
$view_location_competitions = $campaigns->get_location_competitions($campaign_location);
$view_location_events = $campaigns->get_location_events($campaign_location);
$view_location_discounts = $campaigns->get_location_discounts($campaign_location);
$view_location_promotions = $campaigns->get_location_promotions($campaign_location);
$num_deal = 4;

if(isset($_POST['location_trending_deal_click'])){
    $campaign_id = $_POST['campaign_id'];
    $campaign_hits = ($_POST['campaign_hits'])+1;

    $campaigns->update_campaign_hits($campaign_id,$campaign_hits);
    header('Location:view_deal.php?campaign_id='.$campaign_id);
}

if(isset($_POST['view_more'])){
    $campaign_id = $_POST['campaign_id'];
    $campaign_type = $_POST['campaign_type'];
    $campaign_hits = ($_POST['campaign_hits'])+1;

    $campaigns->update_campaign_hits($campaign_id,$campaign_hits);
    header('Location:location_category.php?campaign_type='.$campaign_type.'&campaign_location='.$campaign_location);
}
?>
<!doctype html>
<html>
<body>
<a href="login.php">Login </a>
<br>
<hr>
<br>
<a href="home.php">< BACK</a> | <?php echo strtoupper($campaign_location); ?> DEALS
<br>
<hr>
<br>
<!-- CAMPAIGN CATEGORY START -->
<?php 
if($view_location_competitions){?>
TRENDING COMPETITIONS IN <?php echo strtoupper($campaign_location); ?>
<?php foreach(array_slice($view_location_competitions,0,$num_deal) as $competitions_row){?>
<br>
<form method="post">
<input type="hidden" name="campaign_id" value="<?php echo $competitions_row['campaign_id'];?>">
<input type="hidden" name="campaign_hits" value="<?php echo $competitions_row['campaign_hits'];?>">
<input type="submit" name="location_trending_deal_click" value="<?php echo $competitions_row['campaign_name'];?>">
<?php }?>
<input type="hidden" name="campaign_type" value="<?php echo $competitions_row['campaign_type'];?>">
<input type="submit" name="view_more" value="VIEW MORE">
<br>
<hr>
<br>
<?php }?>
</form>
<!-- CAMPAIGN CATEGORY END -->
<!-- CAMPAIGN CATEGORY START -->
<?php 
if($view_location_discounts){?>
TREMDING DISCOUNTS IN <?php echo strtoupper($campaign_location); ?>
<?php foreach(array_slice($view_location_discounts,0,$num_deal) as $discounts_row){?>
<br>
<form method="post">
<input type="hidden" name="campaign_id" value="<?php echo $discounts_row['campaign_id'];?>">
<input type="hidden" name="campaign_hits" value="<?php echo $discounts_row['campaign_hits'];?>">
<input type="submit" name="location_trending_deal_click" value="<?php echo $discounts_row['campaign_name'];?>">
<?php }?>
<input type="hidden" name="campaign_type" value="<?php echo $discounts_row['campaign_type'];?>">
<input type="submit" name="view_more" value="VIEW MORE">
<br>
<hr>
<br>
<?php }?>
</form>
<!-- CAMPAIGN CATEGORY END -->
<!-- CAMPAIGN CATEGORY START -->
<?php 
if($view_location_events){?>
TRENDING EVENTS IN <?php echo strtoupper($campaign_location); ?>
<?php foreach(array_slice($view_location_events,0,$num_deal) as $events_row){?>
<br>
<form method="post">
<input type="hidden" name="campaign_id" value="<?php echo $events_row['campaign_id'];?>">
<input type="hidden" name="campaign_hits" value="<?php echo $events_row['campaign_hits'];?>">
<input type="submit" name="location_trending_deal_click" value="<?php echo $events_row['campaign_name'];?>">
<?php }?>
<input type="hidden" name="campaign_type" value="<?php echo $events_row['campaign_type'];?>">
<input type="submit" name="view_more" value="VIEW MORE">
<br>
<hr>
<br>
<?php }?>
</form>
<!-- CAMPAIGN CATEGORY END -->
<!-- CAMPAIGN CATEGORY START -->
<?php 
if($view_location_promotions){?>
TRENDING PROMOTIONS IN <?php echo strtoupper($campaign_location); ?>
<?php foreach(array_slice($view_location_promotions,0,$num_deal) as $promotions_row){?>
<br>
<form method="post">
<input type="hidden" name="campaign_id" value="<?php echo $promotions_row['campaign_id'];?>">
<input type="hidden" name="campaign_hits" value="<?php echo $promotions_row['campaign_hits'];?>">
<input type="submit" name="location_trending_deal_click" value="<?php echo $promotions_row['campaign_name'];?>">
<?php }?>
<input type="hidden" name="campaign_type" value="<?php echo $promotions_row['campaign_type'];?>">
<input type="submit" name="view_more" value="VIEW MORE">
<br>
<hr>
<br>
<?php }?>
</form>
<!-- CAMPAIGN CATEGORY END -->
<!-- CATEGORIES
<br>
<input type="submit" onclick="window.location.href = 'location_category.php?campaign_type=competition&campaign_location=<?php echo $campaign_location;?>';" value="COMPETITIONS">
<input type="submit" onclick="window.location.href = 'location_category.php?campaign_type=event&campaign_location=<?php echo $campaign_location;?>';" value="EVENTS">
<input type="submit" onclick="window.location.href = 'location_category.php?campaign_type=discount&campaign_location=<?php echo $campaign_location;?>';" value="DISCOUNTS">
<input type="submit" onclick="window.location.href = 'location_category.php?campaign_type=promotion&campaign_location=<?php echo $campaign_location;?>';" value="PROMOTIONS">
<br> -->
</body>
</html>