<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member extends CI_Model {
    //fungsi login
    public function login($username,$password){
        $this->db->select('*');
        $this->db->from('member');
        
        $this->db->where('username', $username);
        $this->db->where('password',sha1($password));
    
        $query = $this->db->get();
        return $query->result();
    }
    
    //fungsi untuk tampilkan data member
    public function tampil(){
        $query=$this->db->get('member');
        return $query->result();
    }
    
    public function find_company_cek($company){
         $this->db->like('company',$company);
         $query=$this->db->get('member');
         return $query->result();
    }
    
    //fungsi search berdasar perusahaan
    public function find_company($company, $start, $offset){
         $this->db->like('company',$company);
         $this->db->limit($start, $offset);
         $query=$this->db->get('member');
         return $query->result();
    }
    
    public function count_find_company($company){
        $this->db->like('company',$company);
        $this->db->from('member');
        //echo $this->db->count_all_results();
        return $this->db->count_all_results();
    }
    
    public function getContact($id){
        $this->db->select("*");
        $this->db->from("member");
        $this->db->where('ID_Member', $id);

        $query = $this->db->get();
        return $query->result();
    }
    
    public function updateContact(){
        $id = $this->input->post('ID_Member');
        $data=array(          
            'company'=>$this->input->post('company'),
            'address'=>$this->input->post('address'),
            'phone'=>$this->input->post('phone'),
            'city'=>$this->input->post('city'),
            'province'=>$this->input->post('province'),
            'country'=>$this->input->post('country')
          );
        
        $this->db->where('ID_Member', $id);
        $this->db->update('member', $data); 
    }
    
    public function getReg($username){
        $this->db->select("ID_Member");
        $this->db->from("member");
        $this->db->where('username', $username);

        $query = $this->db->get();
        return $query->result();
    }
    
    //fungsi menambah member
    public function add_member(){
        $data1=array(
            
            'username'=>$this->input->post('username'),
            'password'=>sha1($this->input->post('password')),
            'email'=>$this->input->post('email'),
            'type'=>$this->input->post('type'),
            'company'=>$this->input->post('company'),
            'firstname'=>$this->input->post('firstname'),
            'lastname'=>$this->input->post('lastname'),
            'phone'=>$this->input->post('phone'),
            'fax'=>$this->input->post('fax'),
            'web'=>$this->input->post('web'),
            'address'=>$this->input->post('address'),
            'city'=>$this->input->post('city'),
            'province'=>$this->input->post('province'),
            'country'=>$this->input->post('country')
            );
            $this->db->insert('member',$data1);
    }
            
  
}

?>
