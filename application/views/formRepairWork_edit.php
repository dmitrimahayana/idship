<?php
         $session_data = $this->session->userdata('logged_in');
          //echo $session_data['username'].' '.$session_data['ID_Member'];
         if(!empty($resultRepair)){
            foreach ($resultRepair as $row4):
         ?>
        <form action="<?php echo base_url(); ?>galangan/upRepair" method="post">
        <input type="hidden" size="20" name="ID_REPAIR_WORK" value="<?php echo $row4->ID_REPAIR_WORK; ?> ">
        <table>
            <tr>
                <td><label>Name of ship</label></td>
                <td><input type="text" size="20" id="NAME_OF_SHIP" name="NAME_OF_SHIP" value="<?php echo $row4->NAME_OF_SHIP; ?>" /></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Type of ship</label></td>
                <td><input type="text" size="20" id="TYPE_OF_SHIP" name="TYPE_OF_SHIP" value="<?php echo $row4->TYPE_OF_SHIP; ?>" /></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Class</label></td>
                <td><input type="text" size="20" id="CLASS" name="CLASS" value="<?php echo $row4->CLASS; ?>" /></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Type of survey</label></td>
                <td><input type="text" size="20" id="TYPE_OF_SURVEY" name="TYPE_OF_SURVEY" value="<?php echo $row4->TYPE_OF_SURVEY; ?>" /></td>
                <td></td>
            </tr>
            <tr>
                <td><label>DWT</label></td>
                <td><input type="text" size="20" id="DWT" name="DWT" value="<?php echo $row4->DWT; ?>" /></td>
                <td>Ton</td>
                <td><label>Lama Reparasi</label></td>
                <td><input type="text" size="20" id="LAMA_DWT" name="LAMA_DWT" value="<?php echo $row4->LAMA_DWT; ?>" /></td>
                <td>Hari</td>
            </tr>
            <tr>
                <td><label>L</label></td>
                <td><input type="text" size="20" id="L" name="L" value="<?php echo $row4->L; ?>" /></td>
                <td>m</td>
            </tr>
            <tr>
                <td><label>B</label></td>
                <td><input type="text" size="20" id="B" name="B" value="<?php echo $row4->B; ?>" /></td>
                <td>m</td>
            </tr>
            <tr>
                <td><label>H</label></td>
                <td><input type="text" size="20" id="H" name="H" value="<?php echo $row4->H; ?>" /></td>
                <td>m</td>
            </tr>
            <tr>
                <td><label>T</label></td>
                <td><input type="text" size="20" id="T" name="T" value="<?php echo $row4->T; ?>" /></td>
                <td>m</td>
            </tr>
            <tr>
                <td><label>Steel Work</label></td>
                <td><input type="text" size="20" id="STEEL_WORK" name="STEEL_WORK" value="<?php echo $row4->STEEL_WORK; ?>" /></td>
                <td>Ton</td>
                <td><label>Lama Pengerjaan</label></td>
                <td><input type="text" size="20" id="LAMA_STEEL" name="LAMA_STEEL" value="<?php echo $row4->LAMA_STEEL; ?>" /></td>
                <td>Hari</td>
            </tr>
            <tr>
                <td><label>Machinery Work</label></td>
                <td><input type="text" size="20" id="MACHINERY_WORK" name="MACHINERY_WORK" value="<?php echo $row4->MACHINERY_WORK; ?>" /></td>
                <td>BHP</td>
                <td><label>Lama Pengerjaan</label></td>
                <td><input type="text" size="20" id="LAMA_MACHINERY" name="LAMA_MACHINERY" value="<?php echo $row4->LAMA_MACHINERY; ?>" /></td>
                <td>Hari</td>
            </tr>
            <tr>
                <td><label>Electrical Work</label></td>
                <td><input type="text" size="20" id="ELECTRICAL_WORK" name="ELECTRICAL_WORK" value="<?php echo $row4->ELECTRICAL_WORK; ?>" /></td>
                <td>KV</td>
                <td><label>Lama Pengerjaan</label></td>
                <td><input type="text" size="20" id="LAMA_ELECTRICAL" name="LAMA_ELECTRICAL" value="<?php echo $row4->LAMA_ELECTRICAL; ?>" /></td>
                <td>Hari</td>
            </tr>
            <tr>
                <td><label>Pipe Work</label></td>
                <td><input type="text" size="20" id="PIPE_WORK" name="PIPE_WORK" value="<?php echo $row4->PIPE_WORK; ?>" /></td>
                <td>m</td>
                <td><label>Lama Pengerjaan</label></td>
                <td><input type="text" size="20" id="LAMA_PIPE" name="LAMA_PIPE" value="<?php echo $row4->LAMA_PIPE; ?>" /></td>
                <td>Hari</td>
            </tr>
            <tr><td colspan="2"><button class="btn-red" type="submit" class="btn btn-primary">Save changes</button></td></tr>
        </table>
        </form>
        <?php endforeach; } ?>