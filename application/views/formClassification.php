<form action="<?php echo base_url(); ?>galangan/upclass" method="post">
    <table>
        <?php
         $session_data = $this->session->userdata('logged_in');
          //echo $session_data['username'].' '.$session_data['ID_Member'];
         if(!empty($resultClass)){
            foreach ($resultClass as $row4):
         ?>
        <input type="text" size="20" id="id_member" style="visibility: hidden;" name="ID_Member" value="<?php echo $session_data['ID_Member'];?> ">
            <tr>
                <td><label for="total_pegawai">a. Total Pegawai : </label>
                <td><input type="text" size="20" id="total_pegawai" name="total_pegawai" value="<?php echo $row4->total_pegawai; ?>" /></td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Design Section</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="naval_architect">I. Naval Architect :</label></td>
                <td><input type="text" size="20" id="naval_architect" name="naval_architect" value="<?php echo $row4->naval_architect; ?>" /></td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="marine_engineer">II. Marine Engineer : </label></td>
                <td><input type="text" size="20" id="marine_engineer" name="marine_engineer" value="<?php echo $row4->marine_engineer; ?>"/>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="mechanical_engineer">III. Mechanical_Engineer : </label></td>
                <td><input type="text" size="20" id="mechanical_engineer" name="mechanical_engineer" value="<?php echo $row4->mechanical_engineer; ?>"/>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="electrical_engineer">IV. Electrical Engineer : </label></td>
                <td><input type="text" size="20" id="electrical_engineer" name="electrical_engineer" value="<?php echo $row4->electrical_engineer; ?>"/>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Field Section</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="field_engineer">I. Field Engineer: </label></td>
                <td><input type="text" size="20" id="field_engineer" name="field_engineer" value="<?php echo $row4->field_engineer; ?>"/>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="forman_worker">II. Foman Worker : </label></td>
                <td><input type="text" size="20" id="forman_worker" name="forman_worker" value="<?php echo $row4->forman_worker; ?>"/>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Management</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="direksi_pimpinan">I. Direksi Pimpinan : </label></td>
                <td><input type="text" size="20" id="direksi_pimpinan" name="direksi_pimpinan" value="<?php echo $row4->direksi_pimpinan; ?>"/>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="manager">II. Manager : </label></td>
                <td><input type="text" size="20" id="manager" name="manager" value="<?php echo $row4->manager; ?>"/>
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Fasilitas Utama</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="dock">I. Dock : </label></td>
                <td><input type="text" size="20" id="dock" name="dock" value="<?php echo $row4->dock; ?>"/>
                </td>
                <td>GT</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="kapasitas_crane">II. Kapasitas Crane : </label></td>
                <td><input type="text" size="20" id="kapasitas_crane" name="kapasitas_crane" value="<?php echo $row4->kapasitas_crane; ?>"/>
                </td>
                <td>Ton</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="dermaga_terpanjang">III. Dermaga Terpanjang : </label></td>
                <td><input type="text" size="20" id="dermaga_terpanjang" name="dermaga_terpanjang" value="<?php echo $row4->dermaga_terpanjang; ?>"/>
                </td>
                <td>m</td>
            </tr>
            <tr>
                <td><label>Pengalaman Perusahaan</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="reparasi">I. Reparasi : </label></td>
                <td><input type="text" size="20" id="reparasi" name="reparasi" value="<?php echo $row4->reparasi; ?>"/>
                </td>
                <td>M</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="nilai_kontrak_tinggi">II. Nilai Kontrak Tinggi : </label></td>
                <td><input type="text" size="20" id="nilai_kontrak_tinggi" name="nilai_kontrak_tinggi" value="<?php echo $row4->nilai_kontrak_tinggi; ?>"/>
                </td>
                <td>M</td>
            </tr>
            <tr>
                <td><label>Keuangan</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="total_aset">I. Total Aset : </label></td>
                <td><input type="text" size="20" id="total_aset" name="total_aset" value="<?php echo $row4->total_aset; ?>"/>
                </td>
                <td>M</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="jumlah_equitas">II. Jumlah Equitas : </label></td>
                <td><input type="text" size="20" id="jumlah_equitas" name="jumlah_equitas" value="<?php echo $row4->jumlah_equitas; ?>"/>
                </td>
                <td>M</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="jumlah_penjualan">III. Jumlah Penjualan : </label></td>
                <td><input type="text" size="20" id="jumlah_penjualan" name="jumlah_penjualan" value="<?php echo $row4->jumlah_penjualan; ?>"/>
                </td>
                <td>M</td>
            </tr>
        
        <?php endforeach; } 
        else { ?>
        <input type="text" size="20" id="id_member" style="visibility: hidden;" name="ID_Member" value="<?php echo $session_data['ID_Member'];?> ">
        
            <tr>
                <td><label for="total_pegawai">a. Total Pegawai : </label>
                <td><input type="text" size="20" id="total_pegawai" name="total_pegawai"  /></td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Design Section</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="naval_architect">I. Naval Architect :</label></td>
                <td><input type="text" size="20" id="naval_architect" name="naval_architect"  /></td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="marine_engineer">II. Marine Engineer : </label></td>
                <td><input type="text" size="20" id="marine_engineer" name="marine_engineer"  />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="mechanical_engineer">III. Mechanical_Engineer : </label></td>
                <td><input type="text" size="20" id="mechanical_engineer" name="mechanical_engineer"  />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="electrical_engineer">IV. Electrical Engineer : </label></td>
                <td><input type="text" size="20" id="electrical_engineer" name="electrical_engineer" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Field Section</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="field_engineer">I. Field Engineer: </label></td>
                <td><input type="text" size="20" id="field_engineer" name="field_engineer" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="forman_worker">II. Foman Worker : </label></td>
                <td><input type="text" size="20" id="forman_worker" name="forman_worker" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Management</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="direksi_pimpinan">I. Direksi Pimpinan : </label></td>
                <td><input type="text" size="20" id="direksi_pimpinan" name="direksi_pimpinan" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="manager">II. Manager : </label></td>
                <td><input type="text" size="20" id="manager" name="manager" />
                </td>
                <td>Orang</td>
            </tr>
            <tr>
                <td><label>Fasilitas Utama</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="dock">I. Dock : </label></td>
                <td><input type="text" size="20" id="dock" name="dock" />
                </td>
                <td>GT</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="kapasitas_crane">II. Kapasitas Crane : </label></td>
                <td><input type="text" size="20" id="kapasitas_crane" name="kapasitas_crane" />
                </td>
                <td>Ton</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="dermaga_terpanjang">III. Dermaga Terpanjang : </label></td>
                <td><input type="text" size="20" id="dermaga_terpanjang" name="dermaga_terpanjang" />
                </td>
                <td>m</td>
            </tr>
            <tr>
                <td><label>Pengalaman Perusahaan</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="reparasi">I. Reparasi : </label></td>
                <td><input type="text" size="20" id="reparasi" name="reparasi" />
                </td>
                <td>M</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="nilai_kontrak_tinggi">II. Nilai Kontrak Tinggi : </label></td>
                <td><input type="text" size="20" id="nilai_kontrak_tinggi" name="nilai_kontrak_tinggi" />
                </td>
                <td>M</td>
            </tr>
            <tr>
                <td><label>Keuangan</label></td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="total_aset">I. Total Aset : </label></td>
                <td><input type="text" size="20" id="total_aset" name="total_aset" />
                </td>
                <td>M</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="jumlah_equitas">II. Jumlah Equitas : </label></td>
                <td><input type="text" size="20" id="jumlah_equitas" name="jumlah_equitas" />
                </td>
                <td>M</td>
            </tr>
            <tr>
                <td><label style="margin-left: 50px;" for="jumlah_penjualan">III. Jumlah Penjualan : </label></td>
                <td><input type="text" size="20" id="jumlah_penjualan" name="jumlah_penjualan" />
                </td>
                <td>M</td>
            </tr>
            <?php } ?>
            <tr><td colspan="2"><button class="btn-red" type="submit" class="btn btn-primary">Save changes</button></td></tr>
        </table>
    </form>
