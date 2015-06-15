<table >
    <?php
    foreach($tabel_real as $treal){
    ?>
        <tr><td>Dock</td><td>:</td><td><?php echo round($treal->jumlahDock,2);?></td><td>DWT</td></tr>
        <tr><td>Steel Workshop</td><td>:</td><td><?php echo round($treal->jumlahsw,2);?><td>Ton</td></tr>
        <tr><td>Machinery Workshop</td><td>:</td><td><?php echo round($treal->jumlahmw,2);?><td>BHP</td></tr>
        <tr><td>Electrical Workshop</td><td>:</td><td><?php echo round($treal->jumlahelecw,2);?><td>KV</td></tr>
        <tr><td>Pipe Workshop</td><td>:</td> <td><?php echo round($treal->jumlahpw,2);?></td><td>M</td></tr>

<?php }?>
</table>