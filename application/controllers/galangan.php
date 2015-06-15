<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galangan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('classification_model');
        $this->load->model('kontent');
        $this->load->model('member');
        $this->load->model('facilities');
        $this->load->model('facilities_statis');
        $this->load->model('repair_work');
        $this->load->model('realisasi');
        $this->load->model('produktivitas');
        $this->load->model('kapasitas');
        $this->load->model('utilities');
    }
    
   
    
    public function form_load(){
        $page=$_POST['type'];
        $this->cek_session();
        $session_data=  $this->session->userdata('logged_in');
        $data['ID_Member'] = $session_data['ID_Member'];
        if($page=="formHome"){
            $this->load->view('formHome');
        }
        else if($page=="formContact"){
            $this->load->view('formContact');
        }
        else if($page=="formFacility"){
            $this->load->view('formFacility');
        }
        else if($page=="formRepairWork"){
            $data['resultRepair']=$this->repair_work->get_all($data['ID_Member']);
            $this->load->view('formRepairWork',$data);
        }
        else if($page=="formRepairWork_edit"){
            $data['resultRepair']=$this->repair_work->get_by_id($_POST['id'],$data['ID_Member']);
            $this->load->view('formRepairWork_edit',$data);
        }
        else if($page=="formClassification"){
            $data['resultClass']=$this->classification_model->getClassi($data['ID_Member']);
            $this->load->view('formClassification',$data);
        }
    }


    public function cek_session()
    { 
        if($this->session->userdata('logged_in'))
        {   
            return TRUE;
        }
        else {
            redirect(base_url().'page/home');
        }
    }
    
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('template/footer');
    }
    
    //panggil fungsi update konten home
    public function upkontHome(){
        $this->kontent->updateDatahome();
        redirect(base_url().'page/beranda#page=page1');
    }
    
    //panggil contact
    public function upcontact(){
        $this->member->updateContact();
        redirect(base_url().'page/beranda#page=page2');
    }
    
    //panggil fungsi update kontent fasil
    public function upkontFasil(){
        $session_data=  $this->session->userdata('logged_in');
        if(!empty($_POST['id_facil'])){
            foreach($_POST['id_facil'] as $key=>$row){
                $data=array(
                    'NAME_FACILITY' => $_POST['name_facil'][$key],
                    'VALUE' => $_POST['value_facil'][$key]
                );
                $this->facilities->update($data,$_POST['id_facil'][$key]);
                echo $_POST['id_facil'][$key].' '.$_POST['name_facil'][$key].' '.$_POST['value_facil'][$key].'<br/>';
            }
        }
        echo '<br/>';
        if(!empty($_POST['type_new'])){
            foreach($_POST['type_new'] as $key=>$row){
                $data=array(
                    'ID_MEMBER' => $session_data['ID_Member'],
                    'TYPE_FACILITY' => $_POST['type_new'][$key],
                    'NAME_FACILITY' => $_POST['name_new'][$key],
                    'VALUE' => $_POST['value_new'][$key]
                );
                $this->facilities->add($data);
                echo $_POST['type_new'][$key].' '.$_POST['name_new'][$key].' '.$_POST['value_new'][$key].'<br/>';
            }
        }
        echo '<br/>';
        if(!empty($_POST['id_facility_statis'])){
            $data=array(
                'id_facility_statis' => $_POST['id_facility_statis'],
                'steel_workshop' => $_POST['steel_workshop'],
                'machinery_workshop' => $_POST['machinery_workshop'],
                'electrical_workshop' => $_POST['electrical_workshop'],
                'pipe_workshop' => $_POST['pipe_workshop'],
                'naval_architect' => $_POST['naval_architect'],
                'marine_engineer' => $_POST['marine_engineer'],
                'mechanical_engineer' => $_POST['mechanical_engineer'],
                'electrical_engineer' => $_POST['electrical_engineer'],
                'field_engineer' => $_POST['field_engineer'],
                'foreman_worker' => $_POST['foreman_worker'],
            );
            $this->facilities_statis->update($data,$_POST['id_facility_statis']);
        }
        if(!empty($_POST['cek_facil_statis'])){
            $data=array(
                'id_member' => $session_data['ID_Member'],
                'steel_workshop' => $_POST['steel_workshop'],
                'machinery_workshop' => $_POST['machinery_workshop'],
                'electrical_workshop' => $_POST['electrical_workshop'],
                'pipe_workshop' => $_POST['pipe_workshop'],
                'naval_architect' => $_POST['naval_architect'],
                'marine_engineer' => $_POST['marine_engineer'],
                'mechanical_engineer' => $_POST['mechanical_engineer'],
                'electrical_engineer' => $_POST['electrical_engineer'],
                'field_engineer' => $_POST['field_engineer'],
                'foreman_worker' => $_POST['foreman_worker'],
            );
            $this->facilities_statis->add($data);
        }
        
        redirect(base_url().'page/beranda#page=page3');
    }
    
    //panggil fungsi updateclassification
    public function upclass(){
        $this->classification_model->updateDataClass();
        redirect(base_url().'page/beranda#page=page11');
    }

    public function upRepair(){
        $data=array(
            'NAME_OF_SHIP' => $_POST['NAME_OF_SHIP'],
            'TYPE_OF_SHIP' => $_POST['TYPE_OF_SHIP'],
            'CLASS' => $_POST['CLASS'],
            'TYPE_OF_SURVEY' => $_POST['TYPE_OF_SURVEY'],
            'DWT' => $_POST['DWT'],
            'L' => $_POST['L'],
            'B' => $_POST['B'],
            'H' => $_POST['H'],
            'T' => $_POST['T'],
            'STEEL_WORK' => $_POST['STEEL_WORK'],
            'MACHINERY_WORK' => $_POST['MACHINERY_WORK'],
            'ELECTRICAL_WORK' => $_POST['ELECTRICAL_WORK'],
            'PIPE_WORK' => $_POST['PIPE_WORK'],
            'LAMA_DWT' => $_POST['LAMA_DWT'],
            'LAMA_STEEL' => $_POST['LAMA_STEEL'],
            'LAMA_MACHINERY' => $_POST['LAMA_MACHINERY'],
            'LAMA_ELECTRICAL' => $_POST['LAMA_ELECTRICAL'],
            'LAMA_PIPE' => $_POST['LAMA_PIPE']
        );
        $this->repair_work->update($data,$_POST['ID_REPAIR_WORK']);
        redirect(base_url().'page/beranda#page=page12');
    }
    
    public function insertRepair(){
        $session_data=  $this->session->userdata('logged_in');
        $data=array(
            'ID_MEMBER' => $session_data['ID_Member'],
            'NAME_OF_SHIP' => $_POST['NAME_OF_SHIP'],
            'TYPE_OF_SHIP' => $_POST['TYPE_OF_SHIP'],
            'CLASS' => $_POST['CLASS'],
            'TYPE_OF_SURVEY' => $_POST['TYPE_OF_SURVEY'],
            'DWT' => $_POST['DWT'],
            'L' => $_POST['L'],
            'B' => $_POST['B'],
            'H' => $_POST['H'],
            'T' => $_POST['T'],
            'STEEL_WORK' => $_POST['STEEL_WORK'],
            'MACHINERY_WORK' => $_POST['MACHINERY_WORK'],
            'ELECTRICAL_WORK' => $_POST['ELECTRICAL_WORK'],
            'PIPE_WORK' => $_POST['PIPE_WORK'],
            'LAMA_DWT' => $_POST['LAMA_DWT'],
            'LAMA_STEEL' => $_POST['LAMA_STEEL'],
            'LAMA_MACHINERY' => $_POST['LAMA_MACHINERY'],
            'LAMA_ELECTRICAL' => $_POST['LAMA_ELECTRICAL'],
            'LAMA_PIPE' => $_POST['LAMA_PIPE']
        );
        $this->repair_work->add($data);
        redirect(base_url().'page/beranda#page=page12');
    }

    public function show_result_search(){
        //jika data gak ada
        $session_data=  $this->session->userdata('pencarian');
        $cari= $session_data['cari'];
        
        $this->load->view('template/header');
        $checking= $this->member->find_company_cek($cari);
        if($checking==null){
            $session_data=  $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['type'];
            $data['ID_Member'] = $session_data['ID_Member'];
            $data['no_result'] = 'data yang dicari tidak ada';
            $this->load->view('searchResult',$data);
        }
        else{
            $session_data=  $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['type'];
            $data['ID_Member'] = $session_data['ID_Member'];
            $data['resultContact']=$this->member->getContact($data['ID_Member']);
            
            $countRow=$this->member->count_find_company($cari);
            $config = array();
            $config["base_url"] = base_url().'galangan/show_result_search';
            $config["total_rows"] = $countRow;
            $config["per_page"] = 3;//rubah per page nya
            $config["uri_segment"] = 3;
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
            $config['next_link'] = 'Next &raquo;';
            $config['prev_link'] = '&laquo; Back';
            $config['cur_tag_open'] = '<span class="current">';
            $config['cur_tag_close'] = '</span>';

            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['links'] = $this->pagination->create_links();
            //echo '<script>alert("'.$page.' '.$config["per_page"].'")</script>';
            $data['tampil']= $this->member->find_company($cari,$config["per_page"], $page);

            $this->load->view('searchResult',$data);
        }
            
        $this->load->view('template/footer');
    }
    
    //fungsi search
    function search(){
        //untuk  validasi
        $this->load->view('template/header');
        $this->form_validation->set_rules('cari','cari','trim|xss_clean|callback_check_regex');
        if($this->form_validation->run()==FALSE){
            $session_data=  $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['type'];
            $data['ID_Member'] = $session_data['ID_Member'];
            $this->load->view('searchResult',$data);
        }
        else
        {
            $this->session->unset_userdata('pencarian');
            $sess_array=array(
                'cari'=> $this->input->post('cari')
            );
            $this->session->set_userdata('pencarian',$sess_array);
            
            redirect(base_url().'galangan/show_result_search/');
        }
        $this->load->view('template/footer');
    }
    //check regex search
    public function check_regex($str){
        if(preg_match('/[^a-zA-Z0-9 ]/i', $str)){
            $this->form_validation->set_message('check_regex', 'inputan salah atau tidak sesuai');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    public function detail_search(){
        $id_member=  $this->input->post('id_member');
        $type=  $this->input->post('type');
        //echo $id_member.' '.$type;
        $data['resultContact']=$this->member->getContact($id_member);
        if($type=="shipyard"){
            $data['resultClass']=$this->classification_model->getClassi($id_member);
            $data['final_class']=$this->check_classification($data['resultClass']);
            $data['tabel_uti']=  $this->utilities->get_utilities($id_member);
            $data['tabel_real']=  $this->realisasi->get_realisasi($id_member);
            $data['tabel_produk']=  $this->produktivitas->get_prod($id_member);
            $data['tabel_kapasitasbaris']=  $this->kapasitas-> get_kapasitas($id_member);
        }
        $this->load->view('formDetailCompany',$data);
    }
    
    //show page
    public function show_view($page){
        $this->load->view('template/header');
        if($page=="beranda"){
            $this->cek_session();
            $session_data=  $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['type'];
            $data['ID_Member'] = $session_data['ID_Member'];
            $data['tabel_uti']=  $this->utilities->get_utilities($data['ID_Member']);
            $data['tabel_real']=  $this->realisasi->get_realisasi($data['ID_Member']);
            $data['tabel_produk']=  $this->produktivitas->get_prod($data['ID_Member']);
            $data['tabel_kapasitasbaris']=  $this->kapasitas-> get_kapasitas($data['ID_Member']);
            $data['resultContact']=$this->member->getContact($data['ID_Member']);
            $data['resultHome']=$this->kontent->getKontent($data['ID_Member'],'home');
            $data['resultFasil']=$this->kontent->getKontent($data['ID_Member'],'fasilitas');
            $data['resultClass']=$this->classification_model->getClassi($data['ID_Member']);
            $data['final_class']=$this->check_classification($data['resultClass']);
            $data['facilities']=$this->facilities->get_all($data['ID_Member']);
            $data['facilities_statis']=$this->facilities_statis->get_all($data['ID_Member']);
            $data['resultRepair']=$this->repair_work->get_all($data['ID_Member']);
            $this->load->view($page,$data);
            //echo $result_class;
        }
        else if($page=="home"){
            $this->load->view($page);
        }
        else if($page=="signup"){
            $this->load->view($page);
        }
        else if($page=="about"){
            $data="";
            if($session_data=  $this->session->userdata('logged_in')){
                $data['username'] = $session_data['username'];
                $data['type'] = $session_data['type'];
            }
            $this->load->view($page,$data);
        }
        $this->load->view('template/footer');
    }
    
    function check_classification($query){
        foreach ($query as $row){
                //nilai total pegawai
                if($row->total_pegawai > 500){
                    $nilai_pegawai ='A';
                }
                else if($row->total_pegawai > 200 && $row->total_pegawai <= 500){
                    $nilai_pegawai ='B';
                }
                else if($row->total_pegawai > 20 && $row->total_pegawai <= 200){
                    $nilai_pegawai ='C';
                }
                else if($row->total_pegawai > 10 && $row->total_pegawai <= 20){
                    $nilai_pegawai ='D';
                }
                else if($row->total_pegawai > 3 && $row->total_pegawai <= 10){
                    $nilai_pegawai ='E';
                }
                if(isset($nilai_pegawai)):
                $total[0]=1;
                $abjat[0]=$nilai_pegawai;
                //echo 'total '.$abjat[0].' '.$total[0].'<br/>';
                endif;
                
                //nilai naval_architect
                if($row->naval_architect > 4){
                    $nilai_design[0] ='A';
                }
                else if($row->naval_architect > 2 && $row->naval_architect <= 4){
                    $nilai_design[0] ='B';
                }
                else if($row->naval_architect == 2){
                    $nilai_design[0] ='C';
                }
                else if($row->naval_architect == 1){
                    $nilai_design[0] ='D';
                }
                else if($row->naval_architect == 0){
                    $nilai_design[0] ='E';
                }
                
                //nilai marine_engineer
                if($row->marine_engineer > 4){
                    $nilai_design[1] ='A';
                }
                else if($row->marine_engineer > 2 && $row->marine_engineer <= 4){
                    $nilai_design[1] ='B';
                }
                else if($row->marine_engineer == 2){
                    $nilai_design[1] ='C';
                }
                else if($row->marine_engineer == 1){
                    $nilai_design[1] ='D';
                }
                else if($row->marine_engineer == 0){
                    $nilai_design[1] ='E';
                }
                
                //nilai mechanical_engineer
                if($row->mechanical_engineer > 4){
                    $nilai_design[2] ='A';
                }
                else if($row->mechanical_engineer > 2 && $row->mechanical_engineer <= 4){
                    $nilai_design[2] ='B';
                }
                else if($row->mechanical_engineer == 2 ){
                    $nilai_design[2] ='C';
                }
                else if($row->mechanical_engineer == 1){
                    $nilai_design[2] ='D';
                }
                else if($row->mechanical_engineer == 0){
                    $nilai_design[2] ='E';
                }
                
                //nilai electrical_engineer
                if($row->electrical_engineer > 4){
                    $nilai_design[3] ='A';
                }
                else if($row->electrical_engineer > 2 && $row->electrical_engineer <= 4){
                    $nilai_design[3] ='B';
                }
                else if($row->electrical_engineer == 2 ){
                    $nilai_design[3] ='C';
                }
                else if($row->electrical_engineer == 1){
                    $nilai_design[3] ='D';
                }
                else if($row->electrical_engineer == 0){
                    $nilai_design[3] ='E';
                }
                if(isset($nilai_design)):
                    rsort($nilai_design);
                foreach ($nilai_design as $key => $val) {
                    $temp[$val]=0;
                }
                foreach ($nilai_design as $key => $val) {
                    $temp[$val]++;
                }
                $dummy = $temp[$val];
                //echo $dummy;
                $nil_design=$val;
                foreach ($temp as $key => $val) {
                    //$nil_design=$key;
                    //echo $nil_design.' '.$temp[$key].'<br/>';
                    if($dummy < $temp[$key]){
                        $nil_design=$key;
                        $dummy=$temp[$key];
                        //echo $nil_design.' '.$temp[$key].'<br/>';
                    }
                }
                $total[1]=$dummy;
                $abjat[1]=$nil_design;
                endif;
                //echo 'Design Section '.$abjat[1].' '.$total[1].'<br/>';
                
                //nilai field_engineer
                if($row->field_engineer > 10){
                    $nilai_field[0] ='A';
                }
                else if($row->field_engineer > 3 && $row->field_engineer <= 10){
                    $nilai_field[0] ='B';
                }
                else if($row->field_engineer > 1 && $row->field_engineer <= 3){
                    $nilai_field[0] ='C';
                }
                else if($row->field_engineer == 1){
                    $nilai_field[0] ='D';
                }
                else if($row->field_engineer == 0){
                    $nilai_field[0] ='E';
                }
                
                //nilai forman_worker
                if($row->forman_worker > 60){
                    $nilai_field[1] ='A';
                }
                else if($row->forman_worker > 30 && $row->forman_worker <= 60){
                    $nilai_field[1] ='B';
                }
                else if($row->forman_worker > 10 && $row->forman_worker <= 30){
                    $nilai_field[1] ='C';
                }
                else if($row->forman_worker > 3 && $row->forman_worker <= 10){
                    $nilai_field[1] ='D';
                }
                else if($row->forman_worker > 0 && $row->forman_worker <= 3){
                    $nilai_field[1] ='E';
                }
                if(isset($nilai_field)):
                rsort($nilai_field);
                foreach ($nilai_field as $key => $val) {
                    $temp2[$val]=0;
                }
                foreach ($nilai_field as $key => $val) {
                    $temp2[$val]++;
                }
                $dummy = $temp2[$val];
                //echo $val2.' '.$dummy;
                $nil_field=$val;
                foreach ($temp2 as $key => $val) {
                    //echo $key2.' '.$temp2[$key2].'<br/>';
                    if($dummy < $temp2[$key]){
                        $nil_field=$key;
                        $dummy=$temp2[$key];
                        //echo $nil_design.' '.$temp[$key].'<br/>';
                    }
                }
                $total[2]=$dummy;
                $abjat[2]=$nil_field;
                //echo 'Field Section '.$abjat[2].' '.$total[2].'<br/>';
                endif;
                
                //nilai direksi_pimpinan
                if($row->direksi_pimpinan >= 3){
                    $nilai_management[0] ='A';
                }
                else if($row->direksi_pimpinan == 2){
                    $nilai_management[0] ='B';
                }
                else if($row->direksi_pimpinan == 1){
                    $nilai_management[0] ='C';
                }
                /*else if($row->direksi_pimpinan > 3 && $row->direksi_pimpinan <= 10){
                    $nilai_direksi ='D';
                }
                else if($row->direksi_pimpinan > 0 && $row->direksi_pimpinan <= 3){
                    $nilai_direksi ='E';
                }*/
                
                //nilai manager
                if($row->manager >= 3){
                    $nilai_management[1] ='A';
                }
                else if($row->manager == 2){
                    $nilai_management[1] ='B';
                }
                else if($row->manager == 1){
                    $nilai_management[1] ='C';
                }
                /*else if($row->manager > 3 && $row->manager <= 10){
                    $nilai_direksi ='D';
                }
                else if($row->manager > 0 && $row->manager <= 3){
                    $nilai_direksi ='E';
                }*/
                if(isset($nilai_management)):
                rsort($nilai_management);
                foreach ($nilai_management as $key => $val) {
                    $temp3[$val]=0;
                }
                foreach ($nilai_management as $key => $val) {
                    $temp3[$val]++;
                    //echo $temp3[$val].' '.$val.'<br/>';
                }
                $dummy = $temp3[$val];
                //echo $val2.' '.$dummy;
                $nil_management=$val;
                foreach ($temp3 as $key => $val) {
                    //echo $nil_management.' '.$temp3[$key].'<br/>';
                    if($dummy < $temp3[$key]){
                        $nil_management=$key;
                        $dummy=$temp3[$key];
                        //echo $nil_design.' '.$temp3[$key].'<br/>';
                    }
                }
                $total[3]=$dummy;
                $abjat[3]=$nil_management;
                //echo 'Management '.$abjat[3].' '.$total[3].'<br/>';
                endif;
                
                //nilai dock
                if($row->dock > 10000){
                    $nilai_fasilitas[0] ='A';
                }
                else if($row->dock > 3000 && $row->dock <= 10000){
                    $nilai_fasilitas[0] ='B';
                }
                else if($row->dock > 500 && $row->dock <= 3000){
                    $nilai_fasilitas[0] ='C';
                }
                else if($row->dock > 19 && $row->dock <= 500){
                    $nilai_fasilitas[0] ='D';
                }
                else if($row->dock <= 19){
                    $nilai_fasilitas[0] ='E';
                }
                
                //nilai kapasitas_crane
                if($row->kapasitas_crane > 20){
                    $nilai_fasilitas[1] ='A';
                }
                else if($row->kapasitas_crane > 10 && $row->kapasitas_crane <= 20){
                    $nilai_fasilitas[1] ='B';
                }
                else if($row->kapasitas_crane > 4 && $row->kapasitas_crane <= 10){
                    $nilai_fasilitas[1] ='C';
                }
                else if($row->kapasitas_crane > 2 && $row->kapasitas_crane <= 3){
                    $nilai_fasilitas[1] ='D';
                }
                else if($row->kapasitas_crane <= 2){
                    $nilai_fasilitas[1] ='E';
                }
                
                //nilai dermaga_terpanjang
                if($row->dermaga_terpanjang > 120){
                    $nilai_fasilitas[2] ='A';
                }
                else if($row->dermaga_terpanjang > 60 && $row->dermaga_terpanjang <= 120){
                    $nilai_fasilitas[2] ='B';
                }
                else if($row->dermaga_terpanjang > 30 && $row->dermaga_terpanjang <= 60){
                    $nilai_fasilitas[2] ='C';
                }
                else if($row->dermaga_terpanjang > 10 && $row->dermaga_terpanjang <= 30){
                    $nilai_fasilitas[2] ='D';
                }
                else if($row->dermaga_terpanjang <= 10){
                    $nilai_fasilitas[2] ='E';
                }
                if(isset($nilai_fasilitas)):
                rsort($nilai_fasilitas);
                foreach ($nilai_fasilitas as $key => $val) {
                    $temp4[$val]=0;
                }
                foreach ($nilai_fasilitas as $key => $val) {
                    $temp4[$val]++;
                    //echo $temp3[$val].' '.$val.'<br/>';
                }
                $dummy = $temp4[$val];
                //echo $val2.' '.$dummy;
                $nil_fasilitas=$val;
                foreach ($temp4 as $key => $val) {
                    //echo $nil_management.' '.$temp3[$key].'<br/>';
                    if($dummy < $temp4[$key]){
                        $nil_fasilitas=$key;
                        $dummy=$temp4[$key];
                        //echo $nil_design.' '.$temp[$key].'<br/>';
                    }
                }
                $total[4]=$dummy;
                $abjat[4]=$nil_fasilitas;
                //echo 'Fasilitas '.$abjat[4].' '.$total[4].'<br/>';
                endif;
                //nilai reparasi
                if($row->reparasi > 5000){
                    $nilai_pengalaman[0] ='A';
                }
                else if($row->reparasi > 1500 && $row->reparasi <= 5000){
                    $nilai_pengalaman[0] ='B';
                }
                else if($row->reparasi > 250 && $row->reparasi <= 1500){
                    $nilai_pengalaman[0] ='C';
                }
                else if($row->reparasi > 10 && $row->reparasi <= 250){
                    $nilai_pengalaman[0] ='D';
                }
                else if($row->reparasi <= 10){
                    $nilai_pengalaman[0] ='E';
                }
                
                //nilai nilai_kontrak_tinggi
                if($row->nilai_kontrak_tinggi > 3000){
                    $nilai_pengalaman[1] ='A';
                }
                else if($row->nilai_kontrak_tinggi > 1000 && $row->nilai_kontrak_tinggi <= 3000){
                    $nilai_pengalaman[1] ='B';
                }
                else if($row->nilai_kontrak_tinggi > 150 && $row->nilai_kontrak_tinggi <= 1000){
                    $nilai_pengalaman[1] ='C';
                }
                else if($row->nilai_kontrak_tinggi > 9 && $row->nilai_kontrak_tinggi <= 150){
                    $nilai_pengalaman[1] ='D';
                }
                else if($row->nilai_kontrak_tinggi <= 9){
                    $nilai_pengalaman[1] ='E';
                }
                if(isset($nilai_pengalaman)):
                rsort($nilai_pengalaman);
                foreach ($nilai_pengalaman as $key => $val) {
                    $temp5[$val]=0;
                }
                foreach ($nilai_pengalaman as $key => $val) {
                    $temp5[$val]++;
                    //echo $temp3[$val].' '.$val.'<br/>';
                }
                $dummy = $temp5[$val];
                //echo $val2.' '.$dummy;
                $nil_pengalaman=$val;
                foreach ($temp5 as $key => $val) {
                    //echo $nil_management.' '.$temp3[$key].'<br/>';
                    if($dummy < $temp5[$key]){
                        $nil_pengalaman=$key;
                        $dummy=$temp5[$key];
                        //echo $nil_design.' '.$temp[$key].'<br/>';
                    }
                }
                $total[5]=$dummy;
                $abjat[5]=$nil_pengalaman;
                //echo 'Pengalaman '.$abjat[5].' '.$total[5].'<br/>';
                endif;
                
                //nilai total_aset
                if($row->total_aset > 3000){
                    $nilai_keuangan[0] ='A';
                }
                else if($row->total_aset > 1000 && $row->total_aset <= 3000){
                    $nilai_keuangan[0] ='B';
                }
                else if($row->total_aset > 150 && $row->total_aset <= 1000){
                    $nilai_keuangan[0] ='C';
                }
                else if($row->total_aset > 9 && $row->total_aset <= 150){
                    $nilai_keuangan[0] ='D';
                }
                else if($row->total_aset <= 9){
                    $nilai_keuangan[0] ='E';
                }
                
                //nilai jumlah_equitas
                if($row->jumlah_equitas > 40000){
                    $nilai_keuangan[1] ='A';
                }
                else if($row->jumlah_equitas > 10000 && $row->jumlah_equitas <= 40000){
                    $nilai_keuangan[1] ='B';
                }
                else if($row->jumlah_equitas > 500 && $row->jumlah_equitas <= 10000){
                    $nilai_keuangan[1] ='C';
                }
                else if($row->jumlah_equitas > 19 && $row->jumlah_equitas <= 500){
                    $nilai_keuangan[1] ='D';
                }
                else if($row->jumlah_equitas <= 19){
                    $nilai_keuangan[1] ='E';
                }
                
                //nilai jumlah_penjualan
                if($row->jumlah_penjualan > 500000){
                    $nilai_keuangan[2] ='A';
                }
                else if($row->jumlah_penjualan > 50000 && $row->jumlah_penjualan <= 500000){
                    $nilai_keuangan[2] ='B';
                }
                else if($row->jumlah_penjualan > 500 && $row->jumlah_penjualan <= 50000){
                    $nilai_keuangan[2] ='C';
                }
                else if($row->jumlah_penjualan > 100 && $row->jumlah_penjualan <= 500){
                    $nilai_keuangan[2] ='D';
                }
                else if($row->jumlah_penjualan <= 100){
                    $nilai_keuangan[2] ='E';
                }
                if(isset($nilai_keuangan)):
                rsort($nilai_keuangan);
                foreach ($nilai_keuangan as $key => $val) {
                    $temp6[$val]=0;
                }
                foreach ($nilai_keuangan as $key => $val) {
                    $temp6[$val]++;
                    //echo $temp3[$val].' '.$val.'<br/>';
                }
                $dummy = $temp6[$val];
                //echo $val2.' '.$dummy;
                $nil_keuangan=$val;
                foreach ($temp6 as $key => $val) {
                    //echo $nil_management.' '.$temp3[$key].'<br/>';
                    if($dummy < $temp6[$key]){
                        $nil_keuangan=$key;
                        $dummy=$temp6[$key];
                        //echo $nil_design.' '.$temp[$key].'<br/>';
                    }
                }
                $total[6]=$dummy;
                $abjat[6]=$nil_keuangan;
                //echo 'keuangan '.$abjat[6].' '.$total[6].'<br/>';
                endif;
                
                if(isset($abjat)):
                rsort($abjat);
                foreach ($abjat as $key => $val){
                    $abjat_new[$val]=0;
                }
                foreach ($abjat as $key => $val){
                    $abjat_new[$val]++;
                }
                $count = $abjat_new[$val];
                $nil_abjat=$val;
                foreach ($abjat_new as $key => $val){
                    if($count < $abjat_new[$key]){
                        $nil_abjat=$key;
                        $count=$abjat_new[$key];
                        //echo $nil_design.' '.$temp[$key].'<br/>';
                    }
                }
                //echo $nil_abjat.' '.$count;
                return $nil_abjat;
                endif;
            
        }
    }
    
}
