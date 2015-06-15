<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Utilities Extends CI_Model{
    
    function get_utilities($member){
        $query=$this->db->query("Select q1.kapdock/q2.JumlahDock as utdock,q1.kapsteel/q2.jumlahsw as utsteel,q1.kapmach/q2.jumlahmw as utmach,q1.kapel/q2.jumlahelecw as utele,q1.kappipe/q2.jumlahpw as utpipe
from(
Select ((300/12)*Sum(f.value)) as kapdock,
((300/12)*Sum(fs.steel_workshop)/count(Type_Facility='docks')) as kapsteel, ((300/12)*sum(fs.machinery_workshop)/count(Type_Facility='docks')) as kapmach,
((300/12)*Sum(fs.electrical_workshop)/count(Type_Facility='docks')) as kapel,
(300/12) * sum(fs.pipe_workshop)/count(Type_Facility='docks') as kappipe 
from facilities f , facilities_statis fs where f.`ID_Member`= fs.`ID_Member` and f.`ID_Member`=38 and f.Type_Facility='docks' group by type_facility) as q1,(Select Sum(DWT) as jumlahDock,Sum(Steel_Work) as jumlahsw,Sum(Machinery_Work) as jumlahmw,Sum(Electrical_Work) as jumlahelecw,Sum(Pipe_work) as jumlahpw from repair_work where ID_Member=$member) as q2");
    return $query->result();  
        
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
