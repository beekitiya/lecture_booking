<?php
  class M_booking extends CI_Model {

    public function __construct()
    {
      parent::__construct();
    }

    function get_list_date()
    {
        $sql="SELECT * FROM lecture_date";
        $query=$this->db->query($sql);
        return $query->result_array();
    }

    function insert_booking($data,$id_lecture_date,$id_lecture_time,$status)
    {
        $this->db->insert('booking',$data);

        $this->db->set('lecture_status',$status);
        $this->db->where('id_lecture_date',$id_lecture_date);
        $this->db->where('id_lecture_time',$id_lecture_time);
        $this->db->update('lecture_date_time');
    }

    function get_list_booking()
    {
        $sql="SELECT *,date,lecture_time FROM booking join lecture_date on id_lecture_date = id_date join lecture_time on id_lecture_time = id_time";
        $query=$this->db->query($sql);
        return $query->result_array();
    }

    function get_list_lecture_dateTime()
    {
        $sql="SELECT * FROM lecture_date_time";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
  }

?>
