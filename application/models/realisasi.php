<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Realisasi extends CI_Model {

    function get_realisasi($member)
    {
         $this->db->select("Sum(DWT) as jumlahDock,Sum(Steel_Work) as jumlahsw,Sum(Machinery_Work) as jumlahmw,Sum(Electrical_Work) as jumlahelecw,Sum(Pipe_work) as jumlahpw");
         $this->db->from("repair_work");
         $this->db->where('ID_Member', $member);
         $query = $this->db->get();
         return $query->result();         
    }
    
}


?>
