<link href="<?php echo base_url(); ?>css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/TableCSSCode.css" type="text/css"/>



<script language="javascript" type="text/javascript">
    function showClass(id_member, type){
        //alert(id_member+" "+type);
        $.ajax({
            type: "POST",
            dataType: "html",
            data: "id_member="+id_member+"&type="+type,
            url: "<?php echo base_url(); ?>galangan/detail_search",
            success: function(data) {
                //alert('success');
                $('<div>').html(data).dialog({
                    modal: true,
                    width: 'auto',
                    height: 'auto',
                    show: {
                        effect: "fade",
                        duration: 500
                    },
                    hide: {
                        effect: "fade",
                        duration: 500
                    },
                    title:'Detail Company',
                    close: function(event, ui) {$(this).remove();}
                    ,buttons: {
                        'Close': function() {
                           $(this).dialog('close');
                        }
                    }
                }    
            ).dialog('open'); }
            //$('body').load("<?php echo base_url(); ?>galangan/detail_search");
        });
    }
</script>
</script>

    <link href="<?php echo base_url(); ?>css/tabs.css" rel="stylesheet" type="text/css" />
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
    <div id="content-right">
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
    <div id="content-left">
            <div id="content-left-menu">
                    <div>
                        <label>
                            <?php if(isset($username)){ ?><a class="menu" href="<?php echo base_url(); ?>page/beranda" >Home</a><?php } else{ ?>
                            <a class="menu" href="<?php echo base_url(); ?>page/home" >Home</a>
                            <?php } ?>
                        </label>
                    </div>
                    <div><label><a class="menu" href="<?php echo base_url().'page/about' ?>" >About Us</a></label></div>
            </div>
            <div class="img-idship">
                    <img src="<?php echo base_url(); ?>images/mini.jpg" width="720" height="150" />
            </div>
            <label>
                <?php if(isset($resultContact)):
                        foreach ($resultContact as $rowContact): ?>
                            <a style="float:left;margin-top:10px;margin-left:20px">Welcome to</a>
                            <p><a style="font-size:28pt;margin-top:20px;margin-left:20px"><?php echo $rowContact->company; ?></a></p>
                    <?php endforeach; endif; ?>
            </label>
            <div style="margin-top: 10px;" class="content-left-field2">
                <h1> Search Result</h1>
                <?php echo '<h2>'.validation_errors().'</h2>'; ?>
                <?php if(isset($tampil)): ?>
                <div style="overflow-x: auto;">
                <table class="CSSTableGenerator"> 
                    <tr>
                            <!--<th>ID_Member</th>-->
                            <td>Type</td>
                            <td>Company</td>
                            <td>Phone</td>
                            <!--<td>Address</td>
                            <td>City</td>
                            <td>Province</td>-->
                            <td>Country</td>
                            <td></td>
                    </tr>
                    <?php foreach ($tampil as $row): ?> 
                        <tr>
                            <!--<td> <?php //echo $row->ID_Member;?></td>-->
                            <td> <?php echo $row->type;?></td>
                            <td> <?php echo $row->company;?></td>
                            <td> <?php echo $row->phone;?></td>
                            <!--<td> <?php /*echo $row->address;?></td>
                            <td> <?php echo $row->city;?></td>
                            <td> <?php echo $row->province;*/?></td>-->
                            <td> <?php echo $row->country;?></td>
                            <td>
                                <button class="btn-blue"  onclick="javascript:showClass('<?php echo $row->ID_Member;?>','<?php echo $row->type;?>')">Details</button>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
                </div>
                <?php echo '<br/>'.$links; ?>
                <?php endif; ?>

                <?php if(isset($no_result)): ?>
                <h2><?php echo $no_result; ?></h2>
                <?php endif; ?>
                <br/>
    </div>

</div> <!-- container -->

