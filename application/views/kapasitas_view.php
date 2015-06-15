<table border="0">
<?php
foreach($tabel_kapasitasbaris as $tkapbar){
?>
        <tr>
            <td>Dock</td><td>:</td><td><?php echo round($tkapbar->kapdock,2);?></td><td>DWT</td>
        </tr>
        <tr>
            <td>Steel Workshop</td><td>:</td><td><?php echo round($tkapbar->kapsteel,2);?></td><td>Ton</td>
        </tr>
        <tr>
            <td>Machinery Workshop</td><td>:</td><td><?php echo round($tkapbar->kapmach,2);?></td><td>BHP</td>
        </tr>
        <tr>
            <td>Electrical Workshop</td><td>:</td><td><?php echo round($tkapbar->kapel,2);?></td><td>KV</td>
        </tr>
        <tr>
            <td>Pipe Workshop</td><td>:</td><td><?php echo round($tkapbar->kappipe,2);?></td><td>m</td>
        </tr>

<?php }?>
</table>
