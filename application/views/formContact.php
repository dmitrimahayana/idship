<br/><br/>
<form action="<?php echo base_url(); ?>galangan/upcontact" method="post">

<?php
 $session_data = $this->session->userdata('logged_in');
  //echo $session_data['username'].' '.$session_data['ID_Member'];
 ?>

<input type="text" size="20" id="id_member" style="visibility: hidden;" name="ID_Member" value="<?php echo $session_data['ID_Member'];?> ">
<table>
<tr><td><label for="total_pegawai">Company : </label></td>
<td><input type="text" size="20" id="company" name="company"/></td>
</tr>
<tr><td><label for="naval_architect">Address :</label></td>
<td><input type="text" size="20" id="address" name="address"/></td>
</tr>
<tr><td><label for="marine_engineer">Phone : </label></td>
<td><input type="text" size="20" id="phone" name="phone"/></td>
</tr>
<tr><td><label for="mechanical_engineer">City : </label></td>
<td><input type="text" size="20" id="city" name="city"/></td>
</tr>
<tr><td><label for="electrical_engineer">Province : </label></td>
<td><input type="text" size="20" id="province" name="province"/></td>
</tr>
<tr><td><label for="electrical_engineer">Country : </label></td>
<td><input type="text" size="20" id="country" name="country"/></td>
</tr>

<tr><td colspan="2"><button style="float:right;" class="btn-red" type="submit" class="btn btn-primary">Save changes</button></td>
</tr>
</table>
</form>
<br/>