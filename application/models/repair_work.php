<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Repair_work extends CI_Model {
    //fungsi login
    public function get_all($id){
        $this->db->select('*');
        $this->db->from('repair_work');
        
        $this->db->where('id_member', $id);
        $this->db->order_by('ID_REPAIR_WORK desc');
    
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_by_id($id,$idMember){
        $this->db->select('*');
        $this->db->from('repair_work');
        
        $this->db->where('ID_REPAIR_WORK ', $id);
        $this->db->where('id_member', $idMember);
        $this->db->order_by('ID_REPAIR_WORK desc');
    
        $query = $this->db->get();
        return $query->result();
    }
    
    //fungsi untuk tampilkan data member
//    public function tampil(){
//        $query=$this->db->get('member');
//        return $query->result();
//    }
//    
//    public function find_company_cek($company){
//         $this->db->like('company',$company);
//         $query=$this->db->get('member');
//         return $query->result();
//    }
//    
//    //fungsi search berdasar perusahaan
//    public function find_company($company, $start, $offset){
//         $this->db->like('company',$company);
//         $this->db->limit($start, $offset);
//         $query=$this->db->get('member');
//         return $query->result();
//    }
//    
//    public function count_find_company($company){
//        $this->db->like('company',$company);
//        $this->db->from('member');
//        //echo $this->db->count_all_results();
//        return $this->db->count_all_results();
//    }
//    
//    public function getContact($id){
//        $this->db->select("*");
//        $this->db->from("member");
//        $this->db->where('ID_Member', $id);
//
//        $query = $this->db->get();
//        return $query->result();
//    }

    public function update($data,$id){
        $this->db->where('ID_REPAIR_WORK', $id);
        $this->db->update('repair_work', $data);
    }
    
    //fungsi menambah member
    public function add($data){
        $this->db->insert('repair_work',$data);
//        $errNo   = $this->db->_error_number();
//        $errMess = $this->db->_error_message();
//        echo $errNo.' '.$errMess;
    }
            
public function delete($id){
        $this->db->delete('repair_work', array('ID_REPAIR_WORK' => $id)); 
    }   
  
}

?>
