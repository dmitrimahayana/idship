<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Produktivitas Extends CI_Model{
    
    function get_prod($member){
    $this->db->select('(Sum(DWT)/Sum(Lama_DWT)) as proddock,(Sum(Steel_Work)/Sum(Lama_Steel)) as prodsw,(Sum(Machinery_Work)/Sum(Lama_Machinery)) as prodmw,(Sum(Electrical_Work)/Sum(Lama_Electrical)) as prodelec,(Sum(Pipe_work)/Sum(Lama_Pipe)) as prodpipe');
    $this->db->from('repair_work');
    $this->db->where('ID_Member', $member);
    $query = $this->db->get();
    return $query->result();       
    }
}
 ?>
