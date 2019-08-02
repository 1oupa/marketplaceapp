<?php 
class Functions{

	public function get_remaining_days($campaign_start,$campaign_end){

        $start_day = date('d',strtotime($campaign_start));
        $end_day = date('d',strtotime($campaign_end));

        $remaining_days = $end_day-$start_day;

        return $remaining_days;
    }

    public function get_duration_days($campaign_start,$date_updated){

        $start_day = date('d',strtotime($campaign_start));
        $end_day = date('d',strtotime($date_updated));

        $duration_days = $end_day-$start_day;

        if($duration_days < 0){
            $duration_days = 0;
            return $duration_days;
        }else{
            return $duration_days;
        }
    }
}