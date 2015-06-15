<link rel="stylesheet" href="<?php echo base_url(); ?>css/TableCSSCode.css" type="text/css"/>
<table class="CSSTableGenerator">
            <tr>
                <td><label>Name</label></td>
                <td><label>Type</label></td>
                <td><label>Class</label></td>
                <td><label>Survey</label></td>
                <td><label>GT (Ton)</label></td>
                <td><label>L (m)</label></td>
                <td><label>B (m)</label></td>
                <td><label>H (m)</label></td>
                <td><label>T (m)</label></td>
                <td><label>Steel Work (Ton)</label></td>
                <td><label>Machinery Work (BHP)</label></td>
                <td><label>Electrical Work (KV)</label></td>
                <td><label>Pipe Work (m)</label></td>
                <td colspan="2">Action</td>
            </tr>
<?php
if(!empty($resultRepair)){
    foreach ($resultRepair as $row4):
         ?>
            <tr>
                <td><?php echo $row4->NAME_OF_SHIP; ?></td>
                <td><?php echo $row4->TYPE_OF_SHIP; ?></td>
                <td><?php echo $row4->CLASS; ?></td>
                <td><?php echo $row4->TYPE_OF_SURVEY; ?></td>
                <td><?php echo $row4->DWT; ?></td>
                <td><?php echo $row4->L; ?></td>
                <td><?php echo $row4->B; ?></td>
                <td><?php echo $row4->H; ?></td>
                <td><?php echo $row4->T; ?></td>
                <td><?php echo $row4->STEEL_WORK; ?></td>
                <td><?php echo $row4->MACHINERY_WORK; ?></td>
                <td><?php echo $row4->ELECTRICAL_WORK; ?></td>
                <td><?php echo $row4->PIPE_WORK; ?></td>
                <td><button class="btn-blue" onclick="javascript:showPopUp('formRepairWork_edit','Repair work',<?php echo $row4->ID_REPAIR_WORK; ?>)">Edit</button></td>
                <td><button class="btn-blue" onclick="javascript:confirmationPopUp('<?php echo $row4->ID_REPAIR_WORK; ?>','repair_work')">Delete</button></td>
            </tr>
        
<?php
     endforeach;
}
?>
</table>