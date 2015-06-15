<table >
<?php
foreach($tabel_produk as $tproduk){
?>
        <tr><td>Dock</td><td>:</td><td><?php echo round($tproduk->proddock,2);?></td><td>DWT</td></tr>
        <tr><td>Steel Workshop</td><td>:</td><td><?php echo round($tproduk->prodsw,2);?><td>Ton</td></tr>
        <tr><td>Machinery Workshop</td><td>:</td><td><?php echo round($tproduk->prodmw,2);?><td>BHP</td></tr>
        <tr><td>Electrical Workshop</td><td>:</td><td><?php echo round($tproduk->prodelec,2);?><td>KV</td></tr>
        <tr><td>Pipe Workshop</td><td>:</td> <td><?php echo round($tproduk->prodpipe,2);?></td><td>M</td></tr>

<?php }?>
</table>
