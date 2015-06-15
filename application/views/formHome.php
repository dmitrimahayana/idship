<br/><br/>
    <form action="<?php echo base_url(); ?>galangan/upkontHome" method="post">
        <?php
         $session_data = $this->session->userdata('logged_in');
          //echo $session_data['username'].' '.$session_data['ID_Member'];
         ?>
         
        <div style="background:white;">
            <textarea name="kontent" style="width: 500px;height: 200px">
                
            </textarea>
        </div>
        
        <br/><input type="text" size="20" id="id_member" style="visibility: hidden;" name="ID_Member" value="<?php echo $session_data['ID_Member'];?> ">
        
        <button style="float:right; " class="btn-red" type="submit" class="btn btn-primary">Save changes</button>
    </form>
<br/><br/>