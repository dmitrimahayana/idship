<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Kapasitas Extends CI_Model{
    
    function get_kapasitas($member){
        $query=$this->db->query("Select ((300/12)*Sum(f.value)) as kapdock,
((300/12)*Sum(fs.steel_workshop)/count(Type_Facility='docks')) as kapsteel, ((300/12)*sum(fs.machinery_workshop)/count(Type_Facility='docks')) as kapmach,
((300/12)*Sum(fs.electrical_workshop)/count(Type_Facility='docks')) as kapel,
(300/12) * sum(fs.pipe_workshop)/count(Type_Facility='docks') as kappipe 
from facilities f , facilities_statis fs where f.`ID_Member`= fs.`ID_Member` and f.`ID_Member`=$member and f.Type_Facility='docks' group by type_facility");
        return $query->result();  
    }
}
?>
