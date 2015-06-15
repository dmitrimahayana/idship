<br/><br/>
<form action="<?php echo base_url(); ?>galangan/upkontFasil" method="post">
<table>
<?php
    $session_data = $this->session->userdata('logged_in');
    if(!empty($facilities)){

        $idDock=array();
        $nameDock=array();
        $valDock=array();
        $satDock=array();
        
        $idCrane=array();
        $nameCrane=array();
        $valCrane=array();
        $satCrane=array();
        
        foreach($facilities as $temp1):
           if($temp1->TYPE_FACILITY=="docks"){
               $idDock[]= $temp1->ID_FACILITY;
               $nameDock[]= $temp1->NAME_FACILITY;
               $valDock[]= $temp1->VALUE;
               $satDock[]="DWT";
           }
           else if($temp1->TYPE_FACILITY=="cranes_and_tug"){
               $idCrane[]= $temp1->ID_FACILITY;
               $nameCrane[]= $temp1->NAME_FACILITY;
               $valCrane[]= $temp1->VALUE;
               $satCrane[]="Ton";
           }
        endforeach;
        ?>
                <tr>
                    <td colspan="2"><label><h3>Docks</h3></label></td>
                </tr>
        <?php
        if(!empty($idDock)){
                for($j=0;$j<sizeof($idDock);$j++){ ?>
                <tr >
                    <td><label><?= ucwords ($nameDock[$j]) ?></label></td>
                    <td>
                        <input type="hidden" size="20" name="id_facil[]" value="<?= ucwords ($idDock[$j]) ?>">
                        <input type="hidden" size="20" name="name_facil[]" value="<?= ucwords ($nameDock[$j]) ?>">
                        <input type="text" size="20" name="value_facil[]" value="<?= ucwords ($valDock[$j]) ?>" />
                    </td>
                    <td><?= ucwords ($satDock[$j]) ?></td>
                </tr>
        <?php 
            }
        }
        else { ?>
            <tr >
                <td><label>Dock 1</label></td>
                <td>
                    <input type="hidden" size="20" name="type_new[]" value="docks" />
                    <input type="hidden" size="20" name="name_new[]" value="dock 1" />
                    <input type="text" size="20" name="value_new[]" placeholder="Value" />
                </td>
                <td>DWT</td>
            </tr>
        <?php 
        }
         ?>
            <tr id="docktr">
                <td colspan="3">
                    <button type=button style="float:right;" id="addDock" class="btn-blue" type="submit" class="btn btn-primary">Add</button>
                </td>
            </tr>
            <tr>
                <td colspan="2"><label><h3>Cranes and Tug</h3></label></td>
            </tr>
        <?php
        if(!empty($idCrane)){
            for($j=0;$j<sizeof($idCrane);$j++){
             ?>
                <tr >
                    <td><label><?= ucwords ($nameCrane[$j]) ?></label></td>
                    <td>
                        <input type="hidden" size="20" name="id_facil[]" value="<?= ucwords ($idCrane[$j]) ?>">
                        <input type="hidden" size="20" name="name_facil[]" value="<?= ucwords ($nameCrane[$j]) ?>">
                        <input type="text" size="20" name="value_facil[]" value="<?= ucwords ($valCrane[$j]) ?>" />
                    </td>
                    <td><?= ucwords ($satCrane[$j]) ?></td>
                </tr>
        <?php 
            }
        }
        else { ?>
        <tr >
            <td><label>Floating Crane</label></td>
            <td>
                <input type="hidden" size="20" name="type_new[]" value="cranes_and_tug" />
                <input type="hidden" size="20" name="name_new[]" value="floating crane" />
                <input type="text" size="20" name="value_new[]" placeholder="Value" />
            </td>
            <td>Ton</td>
        </tr>
        <?php 
        } ?>
        
        <tr id="cranetr">
            <td colspan="3">
                <button type=button style="float:right;" id="addCrane" class="btn-blue" type="submit" class="btn btn-primary">Add</button>
            </td>
        </tr>
    <?php
    }
    else { ?>
            <tr>
                <td colspan="2"><label><h3>Docks</h3></label></td>
            </tr>
            <tr>
                <td><label>Dock 1</label></td>
                <td>
                    <input type="hidden" size="20" name="type_new[]" value="docks" />
                    <input type="hidden" size="20" name="name_new[]" value="dock 1" />
                    <input type="text" size="20" name="value_new[]" placeholder="Value" />
                </td>
                <td>DWT</td>
            </tr>
            <tr id="docktr">
                <td colspan="3">
                    <button type=button style="float:right;" id="addDock" class="btn-blue" type="submit" class="btn btn-primary">Add</button>
                </td>
            </tr>
            <tr>
                <td colspan="2"><label><h3>Cranes and Tug</h3></label></td>
            </tr>
            <tr>
                <td><label>Floating Crane</label></td>
                <td>
                    <input type="hidden" size="20" name="type_new[]" value="cranes_and_tug" />
                    <input type="hidden" size="20" name="name_new[]" value="floating crane" />
                    <input type="text" size="20" name="value_new[]" placeholder="Value" />
                </td>
                <td>Ton</td>
            </tr>
            <tr id="cranetr">
                <td colspan="3">
                    <button type=button style="float:right;" id="addCrane" class="btn-blue" type="submit" class="btn btn-primary">Add</button>
                </td>
            </tr>
<?php } ?>
            <tr>
                <td colspan="2"><label><h3>Shop and Installation Maximum Capacity</h3></label></td>
            </tr>
<?php 
if(!empty($facilities_statis)){
    foreach($facilities_statis as $temp2): ?>
            <input type="hidden" size="20" name="id_facility_statis" value="<?= $temp2->id_facility_statis ?>" />
            <tr>
                <td><label>Steel Workshop</label></td>
                <td>
                    <input type="text" size="20" name="steel_workshop" value="<?= $temp2->steel_workshop ?>" />
                </td>
                <td>Ton</td>
            </tr>
            <tr>
                <td><label>Machinery Workshop</label></td>
                <td>
                    <input type="text" size="20" name="machinery_workshop" value="<?= $temp2->machinery_workshop ?>" />
                </td>
                <td>BHP</td>
            </tr>
            <tr>
                <td><label>Electrical Workshop</label></td>
                <td>
                    <input type="text" size="20" name="electrical_workshop" value="<?= $temp2->electrical_workshop ?>" />
                </td>
                <td>KV</td>
            </tr>
            <tr>
                <td><label>Pipe Workshop</label></td>
                <td>
                    <input type="text" size="20" name="pipe_workshop" value="<?= $temp2->pipe_workshop ?>" />
                </td>
                <td>m</td>
            </tr>
            <tr>
                <td colspan="2"><label><h3>Human Sources</h3></label></td>
            </tr>
            <tr>
                <td><label>Naval Architect</label></td>
                <td>
                    <input type="text" size="20" name="naval_architect" value="<?= $temp2->naval_architect ?>" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Marine Engineer</label></td>
                <td>
                    <input type="text" size="20" name="marine_engineer" value="<?= $temp2->marine_engineer ?>" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Mechanical Engineer</label></td>
                <td>
                    <input type="text" size="20" name="mechanical_engineer" value="<?= $temp2->mechanical_engineer ?>" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Electrical Engineer</label></td>
                <td>
                    <input type="text" size="20" name="electrical_engineer" value="<?= $temp2->electrical_engineer ?>" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Field Engineer</label></td>
                <td>
                    <input type="text" size="20" name="field_engineer" value="<?= $temp2->field_engineer ?>" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Foreman Engineer</label></td>
                <td>
                    <input type="text" size="20" name="foreman_worker" value="<?= $temp2->foreman_worker ?>" />
                </td>
                <td>Orang</td>
            </tr>
    <?php endforeach;
}
else { ?>
    <tr>
        <input type="hidden" size="20" name="cek_facil_statis" value="1"  />
                <td><label>Steel Workshop</label></td>
                <td>
                    <input type="text" size="20" name="steel_workshop"  />
                </td>
                <td>Ton</td>
            </tr>
            <tr>
                <td><label>Machinery Workshop</label></td>
                <td>
                    <input type="text" size="20" name="machinery_workshop"  />
                </td>
                <td>BHP</td>
            </tr>
            <tr>
                <td><label>Electrical Workshop</label></td>
                <td>
                    <input type="text" size="20" name="electrical_workshop"  />
                </td>
                <td>KV</td>
            </tr>
            <tr>
                <td><label>Pipe Workshop</label></td>
                <td>
                    <input type="text" size="20" name="pipe_workshop"  />
                </td>
                <td>m</td>
            </tr>
            <tr>
                <td colspan="2"><label><h3>Human Sources</h3></label></td>
            </tr>
            <tr>
                <td><label>Naval Architect</label></td>
                <td>
                    <input type="text" size="20" name="naval_architect"  />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Marine Engineer</label></td>
                <td>
                    <input type="text" size="20" name="marine_engineer"  />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Mechanical Engineer</label></td>
                <td>
                    <input type="text" size="20" name="mechanical_engineer"  />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Electrical Engineer</label></td>
                <td>
                    <input type="text" size="20" name="electrical_engineer"  />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Field Engineer</label></td>
                <td>
                    <input type="text" size="20" name="field_engineer"  />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Foreman Engineer</label></td>
                <td>
                    <input type="text" size="20" name="foreman_worker"  />
                </td>
                <td>Orang</td>
            </tr>
<?php
}
?>
</table>
<br/>

<button style="float:right;" class="btn-red" type="submit" class="btn btn-primary">Save changes</button>
</form>
<br/><br/>