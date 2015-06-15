<table >
<?php
foreach($tabel_uti as $tulti){
?>

     <tr><td>Dock</td><td>:</td><td><?php echo round($tulti->utdock,2);?></td><td>DWT</td></tr>
        <tr><td>Steel Workshop</td><td>:</td><td><?php echo round($tulti->utsteel,2);?><td>Ton</td></tr>
        <tr><td>Machinery Workshop</td><td>:</td><td><?php echo round($tulti->utmach,2);?><td>BHP</td></tr>
        <tr><td>Electrical Workshop</td><td>:</td><td><?php echo round($tulti->utele,2);?><td>KV</td></tr>
        <tr><td>Pipe Workshop</td><td>:</td> <td><?php echo round($tulti->utpipe,2);?></td><td>M</td></tr>
<?php }?>
</table>
