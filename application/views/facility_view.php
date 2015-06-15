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
                        :
                    </td>
                    <td>
                        <?= ucwords ($valDock[$j]) ?>
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
                    :
                </td>
                <td>
                    0
                </td>
                <td>DWT</td>
            </tr>
        <?php 
        }
         ?>
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
                        :
                    </td>
                    <td>
                        <?= ucwords ($valCrane[$j]) ?>
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
                :
            </td>
            <td>
                0
            </td>
            <td>Ton</td>
        </tr>
        <?php 
        } ?>
    <?php
    }
    else { ?>
            <tr>
                <td colspan="2"><label><h3>Docks</h3></label></td>
            </tr>
            <tr>
                <td><label>Dock 1</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>DWT</td>
            </tr>
            <tr>
                <td colspan="2"><label><h3>Cranes and Tug</h3></label></td>
            </tr>
            <tr>
                <td><label>Floating Crane</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>Ton</td>
            </tr>
<?php } ?>
            <tr>
                <td colspan="2"><label><h3>Shop and Installation Maximum Capacity</h3></label></td>
            </tr>
<?php 
if(!empty($facilities_statis)){
    foreach($facilities_statis as $temp2): ?>
            <tr>
                <td><label>Steel Workshop</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->steel_workshop ?>
                </td>
                <td>Ton</td>
            </tr>
            <tr>
                <td><label>Machinery Workshop</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->machinery_workshop ?>
                </td>
                <td>BHP</td>
            </tr>
            <tr>
                <td><label>Electrical Workshop</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->electrical_workshop ?>
                </td>
                <td>KV</td>
            </tr>
            <tr>
                <td><label>Pipe Workshop</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->pipe_workshop ?>
                </td>
                <td>m</td>
            </tr>
            <tr>
                <td colspan="2"><label><h3>Human Sources</h3></label></td>
            </tr>
            <tr>
                <td><label>Naval Architect</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->naval_architect ?>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Marine Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->marine_engineer ?>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Mechanical Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->mechanical_engineer ?>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Electrical Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->electrical_engineer ?>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Field Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->field_engineer ?>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Foreman Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    <?= $temp2->foreman_worker ?>
                </td>
                <td>Orang</td>
            </tr>
    <?php endforeach;
}
else { ?>
    <tr>
                <td><label>Steel Workshop</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>Ton</td>
            </tr>
            <tr>
                <td><label>Machinery Workshop</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>BHP</td>
            </tr>
            <tr>
                <td><label>Electrical Workshop</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>KV</td>
            </tr>
            <tr>
                <td><label>Pipe Workshop</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>m</td>
            </tr>
            <tr>
                <td colspan="2"><label><h3>Human Sources</h3></label></td>
            </tr>
            <tr>
                <td><label>Naval Architect</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Marine Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Mechanical Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Electrical Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Field Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Foreman Engineer</label></td>
                <td>
                    :
                </td>
                <td>
                    0
                </td>
                <td>Orang</td>
            </tr>
<?php
}
?>
</table>