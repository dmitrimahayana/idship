<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Facilities extends CI_Model {
    //fungsi login
    public function get_all($id){
        $this->db->select('*');
        $this->db->from('facilities');
        
        $this->db->where('id_member', $id);
    
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
        $this->db->where('ID_FACILITY', $id);
        $this->db->update('facilities', $data);
    }
    
    //fungsi menambah member
    public function add($data){
        $this->db->insert('facilities',$data);
    }
}

?>
