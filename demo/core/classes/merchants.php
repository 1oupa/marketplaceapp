<?php 
class Merchants{
 	
	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}	
	
	public function insert_merchant($merchant_user_id,$merchant_name,$merchant_industry,$merchant_location,$merchant_email,$merchant_contact,$facebook_page,$twitter_page,$instagram_page)
	{
		global $db;

		$query = $this->db->prepare("	INSERT INTO `merchants` (`user_id`,`merchant_name`,`merchant_industry`,`merchant_location`,`merchant_email`,`merchant_contact`,`facebook_page`,`twitter_page`,`instagram_page`) 
										VALUES 		(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		
		$query->bindValue(1, $merchant_user_id);
		$query->bindValue(2, $merchant_name);
		$query->bindValue(3, $merchant_industry);
		$query->bindValue(4, $merchant_location);
		$query->bindValue(5, $merchant_email);
		$query->bindValue(6, $merchant_contact);
		$query->bindValue(7, $facebook_page);
		$query->bindValue(8, $twitter_page);
		$query->bindValue(9, $instagram_page);

		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}	

	}

	public function update_merchant($merchant_id,$merchant_name,$merchant_industry,$merchant_location,$merchant_contact,$merchant_email,$merchant_facebook,$merchant_twitter,$merchant_instagram)
	{

		$query = $this->db->prepare("UPDATE `merchants` SET
								`merchant_name` = ?,
                                `merchant_industry` = ?,
                                `merchant_location` = ?,
                                `merchant_email` = ?,
                                `merchant_contact` = ?,
                                `merchant_facebook` = ?,
                                `merchant_twitter` = ?,
                                `merchant_instagram` = ?
									
								WHERE `merchant_id`	= ?");

		$query->bindValue(1, $merchant_name);
		$query->bindValue(2, $merchant_industry);
		$query->bindValue(3, $merchant_location);
		$query->bindValue(4, $merchant_email);
		$query->bindValue(5, $merchant_contact);
		$query->bindValue(6, $merchant_facebook);
		$query->bindValue(7, $merchant_twitter);
		$query->bindValue(8, $merchant_instagram);
		$query->bindValue(9, $merchant_id);
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}

	public function delete_merchant($merchant_id)
	{

		$query = $this->db->prepare("DELETE FROM `merchants` WHERE `merchant_id` = ?");

		$query->bindValue(1, $merchant_id);
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}	
    }

    public function get_all_merchants(){

        $query = $this->db->prepare("SELECT * FROM `merchants`");

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_merchant_data($merchant_id){

        $query = $this->db->prepare("SELECT * FROM `merchants` WHERE `merchant_id` = ?");
		$query->bindValue(1, $merchant_id);

        try{
            $query->execute();
            return $query->fetchAll();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }
    
    public function get_merchant_name($merchant_id){

        $query = $this->db->prepare("SELECT `merchant_name` FROM `merchants` WHERE `merchant_id` = ?");

		$query->bindValue(1, $merchant_id);
		
		try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
    }

    public function get_total_merchants_count(){

        $query = $this->db->prepare("SELECT COUNT(`merchant_id`) FROM `merchants`");

        try{
            $query->execute();
            return $query->fetchColumn();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}