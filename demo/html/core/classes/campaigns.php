<?php 
class Campaigns{
 	
	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}	
	
	public function insert_campaign($merchant_id,$campaign_name,$campaign_type,$campaign_description,$campaign_location,$campaign_ad,$campaign_start,$campaign_end,$campaign_status,$created_by,$date_updated)
	{
		global $db;

		$query = $this->db->prepare("	INSERT INTO `campaigns` (`merchant_id`,`campaign_name`,`campaign_type`,`campaign_description`,`campaign_location`,`campaign_ad`,`campaign_start`,`campaign_end`,`campaign_status`,`created_by`,`date_updated`) 
										VALUES 		(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		
        $query->bindValue(1, $merchant_id);
        $query->bindValue(2, $campaign_name);
        $query->bindValue(3, $campaign_type);
        $query->bindValue(4, $campaign_description);
        $query->bindValue(5, $campaign_location);
        $query->bindValue(6, $campaign_ad);
        $query->bindValue(7, $campaign_start);
        $query->bindValue(8, $campaign_end);
        $query->bindValue(9, $campaign_status);
        $query->bindValue(10, $created_by);
        $query->bindValue(11, $date_updated);

		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}	

	}

	public function update_campaign($campaign_id, $merchant_id,$campaign_name,$campaign_type,$campaign_description,$campaign_location,$campaign_ad,$campaign_start,$campaign_end,$campaign_status,$created_by,$date_updated)
	{

		$query = $this->db->prepare("UPDATE `campaigns` SET
								`campaign_name` = ?,
                                `campaign_type` = ?,
                                `campaign_description` = ?,
                                `campaign_location` = ?,
                                `campaign_ad` = ?,
                                `campaign_start` = ?,
                                `campaign_end` = ?,
                                `campaign_status` = ?,
                                `created_by` = ?,
                                `date_updated` = ?
									
								WHERE `campaign_id`	= ?");

		$query->bindValue(1, $campaign_name);
        $query->bindValue(2, $campaign_type);
        $query->bindValue(3, $campaign_description);
        $query->bindValue(4, $campaign_location);
        $query->bindValue(5, $campaign_ad);
        $query->bindValue(6, $campaign_start);
        $query->bindValue(7, $campaign_end);
        $query->bindValue(8, $campaign_status);
        $query->bindValue(9, $created_by);
        $query->bindValue(10, $date_updated);
        $query->bindValue(11, $campaign_id);
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}

	public function delete_campaign($campaign_id)
	{

		$query = $this->db->prepare("DELETE FROM `campaigns` WHERE `campaign_id` = ?");

		$query->bindValue(1, $campaign_id);
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}	
    }

    public function get_all_campaigns(){

        $query = $this->db->prepare("SELECT * FROM `campaigns` ORDER BY `campaign_hits` DESC");

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_campaigns_by_location($campaign_location){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_location` = ? ORDER BY `campaign_hits` DESC");
		$query->bindValue(1, $campaign_location);

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_location_competitions($campaign_location){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_location` = ? AND `campaign_type` = ? AND `campaign_status` = ? ORDER BY `campaign_hits` DESC");
		$query->bindValue(1, $campaign_location);
		$query->bindValue(2, 'competition');
		$query->bindValue(3, 'active');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_location_events($campaign_location){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_location` = ? AND `campaign_type` = ? AND `campaign_status` = ? ORDER BY `campaign_hits` DESC");
		$query->bindValue(1, $campaign_location);
		$query->bindValue(2, 'event');
		$query->bindValue(3, 'active');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_location_discounts($campaign_location){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_location` = ? AND `campaign_type` = ? AND `campaign_status` = ? ORDER BY `campaign_hits` DESC");
		$query->bindValue(1, $campaign_location);
		$query->bindValue(2, 'discount');
		$query->bindValue(3, 'active');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_location_promotions($campaign_location){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_location` = ? AND `campaign_type` = ? AND `campaign_status` = ? ORDER BY `campaign_hits` DESC");
		$query->bindValue(1, $campaign_location);
		$query->bindValue(2, 'promotion');
		$query->bindValue(3, 'active');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_campaigns_by_category($campaign_location,$campaign_type){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_location` = ? AND `campaign_type` = ? AND `campaign_status` = ? ORDER BY `campaign_hits` DESC");
		$query->bindValue(1, $campaign_location);
		$query->bindValue(2, $campaign_type);
		$query->bindValue(3, 'active');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function campaign_data($campaign_id){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_id` = ?");
        $query->bindValue(1, $campaign_id);


        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }  
    
    public function get_merchant_id($campaign_id){

        $query = $this->db->prepare("SELECT `merchant_id` FROM `campaigns` WHERE `campaign_id` = ?");
        $query->bindValue(1, $campaign_id);


        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    } 

    public function get_merchant_campaigns($merchant_id){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `merchant_id` = ?");
        $query->bindValue(1, $merchant_id);


        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    } 

    public function get_other_merchant_campaigns($merchant_id,$campaign_id){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `merchant_id` = ? AND `campaign_id` <> ? AND `campaign_status` = ?");
        $query->bindValue(1, $merchant_id);
        $query->bindValue(2, $campaign_id);
        $query->bindValue(3, 'active');


        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_draft_campaigns(){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_status` = ? AND `merchant_id` = ?");
        $query->bindValue(1, 'draft');
        $query->bindValue(2, 0);

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_total_campaigns_pending(){

        $query = $this->db->prepare("SELECT COUNT(`campaign_id`) FROM `campaigns` WHERE `campaign_status` = ?");
        $query->bindValue(1, 'pending');

        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_total_campaigns_active(){

        $query = $this->db->prepare("SELECT COUNT(`campaign_id`) FROM `campaigns` WHERE `campaign_status` = ?");
        $query->bindValue(1, 'active');

        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_total_campaigns_complete(){

        $query = $this->db->prepare("SELECT COUNT(`campaign_id`) FROM `campaigns` WHERE `campaign_status` = ? OR `campaign_status` = ?");
        $query->bindValue(1, 'complete');
        $query->bindValue(2, 'expired');

        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_campaign_data($campaign_id){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_id` = ?");
        $query->bindValue(1, $campaign_id);

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function request_campaign($campaign_id){

        $date_updated = date('Y-m-d');
        $query = $this->db->prepare("UPDATE `campaigns` SET
                                     `campaign_status` = ?,
                                     `date_updated`    = ?
                                     WHERE `campaign_id` = ?");
        $query->bindValue(1, 'pending');
        $query->bindValue(2, $date_updated);
        $query->bindValue(3, $campaign_id);

        try{
            $query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function activate_campaign($campaign_id){

        $date_updated = date('Y-m-d');
        $query = $this->db->prepare("UPDATE `campaigns` SET
                                     `campaign_status` = ?,
                                     `date_updated`    = ?
                                     WHERE `campaign_id` = ?");
        $query->bindValue(1, 'active');
        $query->bindValue(2, $date_updated);
        $query->bindValue(3, $campaign_id);

        try{
            $query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function reactivate_campaign($campaign_id){

        $date_updated = date('Y-m-d');
        $query = $this->db->prepare("UPDATE `campaigns` SET
                                     `campaign_status` = ?,
                                     `date_updated`    = ?
                                     WHERE `campaign_id` = ?");
        $query->bindValue(1, 'draft');
        $query->bindValue(2, $date_updated);
        $query->bindValue(3, $campaign_id);

        try{
            $query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_trending_campaigns(){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_status` = ? ORDER BY `campaign_hits` DESC");
        $query->bindValue(1, 'active');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_active_campaigns(){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_status` = ? ORDER BY `campaign_hits` DESC");
        $query->bindValue(1, 'active');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function merchant_active_campaigns($merchant_id){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_status` = ? AND `merchant_id` = ?");
        $query->bindValue(1, 'active');
        $query->bindValue(2, $merchant_id);

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }


    public function get_pending_campaigns(){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_status` = ?");
        $query->bindValue(1, 'pending');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function merchant_pending_campaigns($merchant_id){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_status` = ? AND `merchant_id` = ?");
        $query->bindValue(1, 'pending');
        $query->bindValue(2, $merchant_id);

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function expire_campaign($campaign_id){

        $date_updated = date('Y-m-d');
        $query = $this->db->prepare("UPDATE `campaigns` SET
                                     `campaign_status` = ?,
                                     `date_updated`    = ?
                                     WHERE `campaign_id` = ?");
        $query->bindValue(1, 'expired');
        $query->bindValue(2, $date_updated);
        $query->bindValue(3, $campaign_id);

        try{
            $query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_complete_campaigns(){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `campaign_status` = ? OR `campaign_status` = ? ");
        $query->bindValue(1, 'complete');
        $query->bindValue(2, 'expired');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function merchant_complete_campaigns($merchant_id){

        $query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `merchant_id` = ? AND (`campaign_status` = ? OR `campaign_status` = ?)");
        $query->bindValue(1, $merchant_id);
        $query->bindValue(2, 'complete');
        $query->bindValue(3, 'expired');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function update_campaign_hits($campaign_id,$campaign_hits){

        $query = $this->db->prepare("UPDATE `campaigns` SET `campaign_hits` = ? WHERE `campaign_id` = ?");
        $query->bindValue(1, $campaign_hits);
        $query->bindValue(2, $campaign_id);

        try{
            $query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}        

    }
	
	public function get_merchant_pending_count($merchant_id){

		$query = $this->db->prepare("SELECT COUNT(`merchant_id`) FROM `campaigns` WHERE `merchant_id` = ? AND `campaign_status` = ?");
		$query->bindValue(1, $merchant_id);
		$query->bindValue(2, 'pending');

        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function get_merchant_active_count($merchant_id){

		$query = $this->db->prepare("SELECT COUNT(`merchant_id`) FROM `campaigns` WHERE `merchant_id` = ? AND `campaign_status` = ?");
		$query->bindValue(1, $merchant_id);
		$query->bindValue(2, 'active');

        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function get_merchant_complete_count($merchant_id){

		$query = $this->db->prepare("SELECT COUNT(`merchant_id`) FROM `campaigns` WHERE `merchant_id` = ? AND `campaign_status` = ?");
		$query->bindValue(1, $merchant_id);
		$query->bindValue(2, 'expired');

        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }
    
	public function get_merchant_draft($merchant_id){

		$query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `merchant_id` = ? AND `campaign_status` = ?");
		$query->bindValue(1, $merchant_id);
		$query->bindValue(2, 'draft');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function get_merchant_pending($merchant_id){

		$query = $this->db->prepare("SELECT * FROM `campaigns` WHERE `merchant_id` = ? AND `campaign_status` = ?");
		$query->bindValue(1, $merchant_id);
		$query->bindValue(2, 'pending');

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	

	public function get_merchant_active($merchant_id){

		$query = $this->db->prepare("SELECT COUNT(`merchant_id`) FROM `campaigns` WHERE `merchant_id` = ? AND `campaign_status` = ?");
		$query->bindValue(1, $merchant_id);
		$query->bindValue(2, 'active');

        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function get_merchant_complete($merchant_id){

		$query = $this->db->prepare("SELECT COUNT(`merchant_id`) FROM `campaigns` WHERE `merchant_id` = ? AND `campaign_status` = ? OR `campaign_status` = ?");
		$query->bindValue(1, $merchant_id);
		$query->bindValue(2, 'complete');
		$query->bindValue(2, 'expired');

        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

}