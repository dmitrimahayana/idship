
    <div id="header">
        <?php if(isset($username)){ ?><div id="header-user">
			<div style="float:right"><label>
				Welcome , <b><?php echo $type.' '.$username; ?></b> <a href="<?php echo base_url().'login/log_out' ?>" style="background:black;color:white;padding: 3px;">Sign Out</a>
			</label></div>
		</div>
                <?php } ?>
        <div id="header-logo"><img src="<?php echo base_url(); ?>images/Logo.png" width="250px" height="120" /></div>
        <div id="header-title">
                <label>
                        <a style="font-size:28pt;color:white;float:right;margin-top:60px;margin-right:20px">Welcome to Indonesian Shipyard</a></br/>
                        <a style="color:white;float:right;margin-right:20px">We provide shipyard information for repair work in Indonesia</a>
                </label>
        </div>
    </div>
    <div id="content-right" style="<?php if(!isset($username)){ ?>margin-top:-20px;<?php } ?>">
        <div class="search">
            <form class="navbar-form pull-right" action="<?php echo base_url(); ?>galangan/search" method="post">
                <input type="text" class="search-input" name="cari" placeholder="Search">
            </form>
        </div>
        <?php if(!isset($username)){ ?>
        <div class="login">
                <a style="color:white">Login Indonesian Shipyard User</a>
                <form id="formLogin" class="" action="<?php echo base_url(); ?>login/log_validaton" method="POST" style="">
                <p>
                        <table>
                                <tr><td colspan="2" style="color:white"><label class="" for=""><?php echo validation_errors(); ?></label></td></tr>
                                <tr><td><a style="color:white">Username</a></td><td>
                                    <input type="text" class="" name="username" id="username" placeholder="Username"></td></tr>
                                <tr><td><a style="color:white">Password</a></td><td>
                                    <input type="password" class="" name="password" id="password" placeholder="Password"></td></tr>
                                <tr><td colspan="2" style="color:white;font-size: 9pt;"><label style="vertical-align:middle;">nor member? <a href="<?php echo base_url(); ?>page/signup" style="color:white"><b>register </b></a></label><input style="float: right;" type="submit" name="submit" value="submit"></td></tr>
                        </table>
                </p>
                </form>
        </div>
        <?php } ?>
        <div class="banner">Banner 1</div>
        <div class="banner">Banner 2</div>
        <div class="banner">Banner 3</div>
        <div class="banner">Banner 4</div>
    </div>
    <div id="content-left" style="<?php if(!isset($username)){ ?>margin-top:-20px;<?php } ?>">
        <div id="content-left-menu">
                <div>
                    <label>
                        <?php if(isset($username)){ ?><a class="menu" href="<?php echo base_url(); ?>page/beranda" >Home</a><?php } else{ ?>
                        <a class="menu" href="<?php echo base_url(); ?>page/home" >Home</a>
                        <?php } ?>
                    </label>
                </div>
                <div><label><a class="menu-active" href="<?php echo base_url(); ?>page/about" style="color:white" >About Us</a></label></div>
        </div>
        
        <div class="content-left-field">
                <h1>About Us</h1>
                <p style="text-align:justify;text-justify:inter-word;">
                    Idship dibuat salah satu syarat untuk menyelesaikan
                    tugas akhir yang berjudul "Perancangan Sistem Informasi Manajemen
                    Berbasis Web Online untuk Mengetahui Produktivitas Galangan Kapal
                    Nasional pada Pekerjaan Reparasi Kapal"
                    Selain itu, idShip dibuat untuk dapat dijadikan acuan bagi
                    pemilik kapal dalam menentukan galangan kapal yang akan digunakan
                    untuk mereparasi kapal. Bagi galangan diharapkan dengan adanya
                    website ini mampu memberikan tolak ukur galangannya demi
                    meningkatkan daya saing dengan galangan lain yang berada di
                    Indonesia. idShip merupakan salah satu website yang menyediakan
                    informasi mengenai fasilitas & pekerjaan reparasi pada galangan kapal
                    di Indonesia.
                </p>
        </div>

    </div>