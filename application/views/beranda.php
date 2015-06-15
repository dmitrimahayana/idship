<link href="<?php echo base_url(); ?>css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>
<script src="<?php echo base_url(); ?>js/nicEdit.js"></script>

<script language="javascript" type="text/javascript">
    function showClass(type,title){
        //alert(id_member+" "+type);
        $.ajax({
            type: "POST",
            dataType: "html",
            data: "type="+type,
            url: "<?php echo base_url(); ?>galangan/form_load",
            success: function(data) {
                //alert('success');
                $('<div>').html(data).dialog({
                    modal: true,
                    width: 'auto',
                    height: 'auto',
                    title: title,
                    show: {
                        effect: "fade",
                        duration: 500
                    },
                    hide: {
                        effect: "fade",
                        duration: 500
                    },
                    open: function(event, ui) {
                        //bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                    },
                    close: function(event, ui) {$(this).remove();}
                    /*,buttons: {
                        'Close': function() {
                           $(this).dialog('close');
                        }
                    }*/
                }).dialog('open'); 
            }, 
            error: function(xhr,err){
                alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
            }
        });
    }
    
    function showPopUp(type,title,id){
        //alert(id_member+" "+type);
        $.ajax({
            type: "POST",
            dataType: "html",
            data: "type="+type+"&id="+id,
            url: "<?php echo base_url(); ?>galangan/form_load",
            success: function(data) {
                //alert('success');
                $('<div>').html(data).dialog({
                    modal: true,
                    width: 'auto',
                    height: 'auto',
                    title: title,
                    show: {
                        effect: "fade",
                        duration: 500
                    },
                    hide: {
                        effect: "fade",
                        duration: 500
                    },
                    open: function(event, ui) {
                        //bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                    },
                    close: function(event, ui) {$(this).remove();}
                    /*,buttons: {
                        'Close': function() {
                           $(this).dialog('close');
                        }
                    }*/
                }).dialog('open'); 
            }, 
            error: function(xhr,err){
                alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
            }
        });
    }
    
    function getval(sel) {
//       alert(sel.value+"===>"+$( "#selectType" ).val());
       $("#kapasitas").css("display", "none");
       $("#realisasi").css("display", "none");
       $("#utilitas").css("display", "none");
       $("#produktivitas").css("display", "none");
       $("#"+sel.value).css("display", "block");
    }

</script>
<script>
$(function() {
    $( "#tabs" ).tabs({
      collapsible: true
    });
    
    $( "#home" ).accordion({
        collapsible: true,
        heightStyle: "content",
        icons: null,
        active: 2
    });
    $('#home').click(function() {
        $('html,body').animate({
        scrollTop: $("#homeContent").offset().top
        }, 800);
    });
    
    $( "#contact" ).accordion({
        collapsible: true,
        heightStyle: "content",
        icons: null,
        active: 2
    });
    $('#contact').click(function() {
        $('html,body').animate({
        scrollTop: $("#contactContent").offset().top
        }, 800);
    });
    
    $( "#facilities" ).accordion({
        collapsible: true,
        heightStyle: "content",
        icons: null,
        active: 2
    });
    $('#down').click(function() {
        $('html,body').animate({
            scrollTop: $("#facilitiesContent").offset().top
        });
    });
    
    $('#addDock').click(function() {
        var tag='<tr><td>';
        tag+='<input type="hidden" size="20" name="type_new[]" value="docks" />';
        tag+='<input type="text" size="20" name="name_new[]" placeholder="Name" />';
        tag+='</td>';
        tag+='<td>';
        tag+='<input type="text" size="20" name="value_new[]" placeholder="Value" />';
        tag+='</td></tr>';
        $('#docktr').before(tag);
    });
    
    $('#addCrane').click(function() {
        var tag='<tr><td>';
        tag+='<input type="hidden" size="20" name="type_new[]" value="cranes_and_tug" />';
        tag+='<input type="text" size="20" name="name_new[]" placeholder="Name" />';
        tag+='</td>';
        tag+='<td>';
        tag+='<input type="text" size="20" name="value_new[]" placeholder="Value" />';
        tag+='</td></tr>';
        $('#cranetr').before(tag);
    });
    
    $("#kapasitas").css("display", "block");
    $("select#selectType").val("kapasitas");
    
});
</script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

    <link href="<?php echo base_url(); ?>css/tabs.css" rel="stylesheet" type="text/css" />
    <div id="header">
		<?php if(isset($username)){ ?><div id="header-user">
			<div style="float:right"><label>
				Welcome , <b><?php echo $type.' '.$username; ?></b> <a href="<?php echo base_url().'login/log_out' ?>" style="background:black;color:white;padding: 3px;">Sign Out</a>
			</label></div>
		</div>
                <?php } ?>
		<div id="header-logo"><img src="<?php echo base_url(); ?>images/Logo.png" width="250px" height="120" /></div>
		<div id="header-title">
			<label>
				<a style="font-size:28pt;color:white;float:right;margin-top:60px;margin-right:20px">Welcome to Indonesian Shipyard</a></br/>
				<a style="color:white;float:right;margin-right:20px">We provide shipyard information for repair work in Indonesia</a>
			</label>
		</div>
    </div>
    <div id="content-right">
		<div class="search">
                    <form class="navbar-form pull-right" action="<?php echo base_url(); ?>galangan/search" method="post">
                        <input type="text" class="search-input" name="cari" placeholder="Search">
                    </form>
                </div>
		
		<div class="banner">Banner 1</div>
		<div class="banner">Banner 2</div>
		<div class="banner">Banner 3</div>
		<div class="banner">Banner 4</div>
		
    </div>
	<div id="content-left">
		<div id="content-left-menu">
			<?php if(isset($username)){ ?><a class="menu" href="<?php echo base_url(); ?>page/beranda" >Home</a><?php } else{ ?>
                            <a class="menu" href="<?php echo base_url(); ?>page/home" >Home</a>
                        <?php } ?>
			<div><label><a class="menu" href="<?php echo base_url().'page/about' ?>" >About Us</a></label></div>
		</div>
                <div class="img-idship">
                    <img src="<?php echo base_url(); ?>images/mini.jpg" width="720" height="150" />
                </div>
		<label>
                    <?php if(isset($resultContact)):
                        foreach ($resultContact as $rowContact): ?>
                            <a style="float:left;margin-top:10px;margin-left:20px">Welcome to</a>
                            <p><a style="font-size:28pt;margin-top:20px;margin-left:20px"><?php echo $rowContact->company; ?></a></p>
                    <?php endforeach; endif; ?>
                </label>
                <div id="tab">
                            <ol id="toc">
                                <li><a class="title-tab1" style="" href="#page1"><span>Home</span></a></li>
                                <li><a class="title-tab1" style="" href="#page2"><span>Contact</span></a></li>
                                <li><a class="title-tab1" style="" href="#page3"><span>Facilities</span></a></li>
                                <?php if($type=='shipyard'): ?>
                                    <li><a class="title-tab1" style="" href="#page11"><span>Classification</span></a></li>
                                    <li><a class="title-tab1" style="" href="#page12"><span>Repair Work</span></a></li>
                                <?php endif; ?>
                            </ol>
                </div>  
                <div class="content-left-field2"> 
			<div class="content" id="page1">
                            <h1>Beranda</h1>
                            <?php
                            if(isset($resultHome)):
                                foreach ($resultHome as $row1): echo $row1->kontent;?>

                            <?php endforeach;
                            endif; ?>
                            <br/><br/>
                            <div id="home">
                                 <h3>Edit Content</h3>
                                 <div id="homeContent">
                                    <?php $this->load->view('formHome'); ?>
                                 </div>
                            </div>
			</div>
			<div class="content" id="page2">
                            <h1>Contact</h1>
                            <?php
                            if(isset($resultContact)):
                                foreach ($resultContact as $row2): 
                                    echo $row2->company.'<br/>';
                                    echo $row2->address.'<br/>';
                                    echo $row2->phone.'<br/>';
                                    echo $row2->city.'<br/>';
                                    echo $row2->province.'<br/>';
                                    echo $row2->country.'<br/>';
                            ?>

                            <?php endforeach;
                            endif; ?>
                            <br/><br/>
                            <div id="contact">
                                 <h3>Edit Contact</h3>
                                 <div id="contactContent">
                                     <?php $this->load->view('formContact'); ?>
                                 </div>
                            </div>
			</div>
			<div class="content" id="page3">
                            <h1>Facilities</h1>
                            <?php
                            if(isset($resultFasil)):
                                foreach ($resultFasil as $row3): echo $row3->kontent;?>

                            <?php endforeach;
                            endif; ?>
                            <?php $this->load->view('facility_view'); ?>
                            <br/><br/>
                            
                            <div id="facilities">
                                 <h3 id="down">Edit Facilities</h3>
                                 <div id="facilitiesContent">
                                    <?php $this->load->view('formFacility'); ?>
                                 </div>
                            </div>
			</div>
			<div class="content" id="page11">
                            <h1>Classification</h1>
                            
                            <?php
                            if(isset($final_class)):
                                echo '<center>Galangan ini termasuk dalam galangan kapal</center><center><h2>Kelas '.$final_class.'</h2></center>'; ?>
                            <?php 
                            endif; ?>
                            <span>Kapasitas maksimum, realisasi, utilitas, dan produktivitas galangan dalam setahun lebih sebesar : </span><br/>
                            <select name="selectType" id="selectType" onchange="getval(this);">
                                <option value="kapasitas" id="">Kapasitas</option>
                                <option value="realisasi">Realisasi</option>
                                <option value="utilitas">Utilitas</option>
                                <option value="produktivitas">Produktivitas</option>
                            </select>
                            <br/><br/>
                            <div style="margin-left: 50px;">
                                <div id="kapasitas" style="display: none">
                                    <?php $this->load->view('kapasitas_view'); ?>
                                </div>
                                <div id="realisasi" style="display: none">
                                    <?php $this->load->view('realisasi_view'); ?>
                                </div>
                                <div id="utilitas" style="display: none">
                                    <?php $this->load->view('utilities_view'); ?>
                                </div>
                                <div id="produktivitas" style="display: none">
                                    <?php $this->load->view('produktivitas_view'); ?>
                                </div>
                            </div>
                            <br/><br/><button class="btn-red" name="4" id="4"  onclick="javascript:showClass('formClassification','Personalia')">Edit Data</button>
                            <?php //$this->load->view('formClassification'); ?>
			</div>
			<div class="content" id="page12">
                            <h1>Repair Work</h1>
                            <div style="overflow-x: auto;">
                                <?php $this->load->view('repairWork_view'); ?>
                            </div>
                            <br/><br/><button class="btn-red" name="4" id="4"  onclick="javascript:showClass('formRepairWork','Repair Work')">Add Data</button>
			</div>		
			<script src="<?php echo base_url(); ?>js/activatables.js" type="text/javascript"></script>
			<script type="text/javascript">
				activatables('page', ['page1', 'page2', 'page3', 'page11', 'page12' ]);
			</script>
		</div>
		
    </div>