<script language="javascript" type="text/javascript">
function getval(sel) {
//       alert(sel.value+"===>"+$( "#selectType" ).val());
       $("#kapasitas").css("display", "none");
       $("#realisasi").css("display", "none");
       $("#utilitas").css("display", "none");
       $("#produktivitas").css("display", "none");
       $("#"+sel.value).css("display", "block");
    }
    
$(function() {
    $("#kapasitas").css("display", "block");
    $("select#selectType").val("kapasitas");
    
});
</script>
<table>
<?php if(isset($resultContact)):
    foreach ($resultContact as $row): ?>
    <tr>
        <td>Type</td><td> : </td><td> <?php echo $row->type;?></td>
    </tr>
    <tr>
        <td>Company</td><td> : </td><td> <?php echo $row->company;?></td>
    </tr>
    <tr>
        <td>Phone</td><td> : </td><td> <?php echo $row->phone;?></td>
    </tr>
    <tr>
        <td>Address</td><td> : </td><td> <?php echo $row->address;?></td>
    </tr>
    <tr>
        <td>City</td><td> : </td><td> <?php echo $row->city;?></td>
    </tr>
    <tr>
        <td>Province</td><td> : </td><td> <?php echo $row->province;?></td>
    </tr>
    <tr>
        <td>Country</td><td> : </td><td> <?php echo $row->country;?></td>
    </tr>
<?php endforeach; endif; ?>
</table>

<?php
if(isset($final_class)):
    echo '<br/>Galangan ini termasuk dalam galangan kapal <h3>Kelas '.$final_class.'</h3>'; ?>
    <?php //$this->load->view('realisasi_view'); ?>
    <?php //$this->load->view('produktivitas_view'); ?>
    <?php //$this->load->view('kapasitas_view'); ?>
    <?php //$this->load->view('utilities_view'); ?>
    <select name="selectType" id="selectType" onchange="getval(this);">
        <option value="kapasitas" id="">Kapasitas</option>
        <option value="realisasi">Realisasi</option>
        <option value="utilitas">Utilitas</option>
        <option value="produktivitas">Produktivitas</option>
    </select> 
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
<?php 
endif; ?>
