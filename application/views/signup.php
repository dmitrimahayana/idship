<script>
        $(document).ready(function(){
            $("#registerForm").validationEngine();
        });
</script>
    <div id="header2">
		<div id="header-logo"><img src="images/Logo.png" width="250px" height="120" /></div>
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
		
		<div class="banner">Banner 1</div>
		<div class="banner">Banner 2</div>
		<div class="banner">Banner 3</div>
		<div class="banner">Banner 4</div>
		
    </div>
	<div id="content-left">
            <div id="content-left-menu">
                    <div><label><a class="menu" href="<?php echo base_url(); ?>page/home" >Home</a></label></div>
                    <div><label><a class="menu" href="#" >About Us</a></label></div>
            </div>
		
            <div class="title1">SIGNUP ON idShip</div>
		
            <div class="content-left-field2">
                <?php echo validation_errors(); ?>
		<form class="" action="<?php echo base_url(); ?>login/reg_validation" id="registerForm" name="registerForm" method="post">
		<div class="title2">Account Information</div>
                    <table style="margin-top:10px;">
                        <tr>
                            <td>Username</td><td><input type="text" name="username" class="input-block-level input validate[required,custom[onlyLetterNumber]] text-input" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td>Password</td><td><input type="password" id="password" name="password" class="input-block-level input validate[required,custom[onlyLetterNumber]] text-input" placeholder="Password"></td>
                            <td><input type="password" id="confirm_pass" name="confirm_pass" class="input-block-level validate[required,equals[password]] text-input" placeholder="Password Confirm"></td>
                        </tr>
                        <tr>
                            <td>Email</td><td><input type="text" id="email" name="email" class="input-block-level validate[required,custom[email]] text-input" placeholder="Email"></td>
                            <td><input type="text" id="confirm_email" name="confirm_email" class="input-block-level validate[required,equals[email]] text-input" placeholder="Email Confirm"></td>
                        </tr>
                    </table>
                    <div class="title2" style="margin-top:10px;">Personal Information</div>
                    <table style="margin-top:10px;">
                        <tr>
                            <td>Company</td><td><input type="text" name="company" class="input-block-level validate[required,custom[onlyLetterNumber]] text-input" placeholder="Company"></td>
                        </tr>
                        <tr>
                            <td>Phone</td><td><input type="text" name="phone" class="input-block-level validate[required,custom[phone]] text-input" placeholder="Telp"></td>
                        </tr>
                        <tr>
                            <td>Address</td><td><textarea rows="4" cols="38" name="address" class=" validate[required,custom[onlyLetterNumber]] text-input" placeholder="Address"></textarea></td>
                        </tr>
                        <tr>
                            <td>City</td><td><input type="text" name="city" class="input-block-level validate[required,custom[onlyLetterNumber]] text-input" placeholder="City"></td>
                        </tr>
                        <tr>
                            <td>Province</td><td><input type="text" name="province" class="input-block-level validate[required,custom[onlyLetterNumber]] text-input" placeholder="Province"></td>
                        </tr>
                        <tr>
                            <td>Country</td><td><input type="text" name="country" class="input-block-level validate[required,custom[onlyLetterNumber]] text-input" placeholder="Country"></td>
                        </tr>
                    </table>
                    <hr WIDTH="100%" style="">
                    <table>     
                        <tr>
                            <td>
                                <select id="type" name="type" onchange="javascript:showType(this.value)">
                                    <option value="null">Login as</option>
                                    <option value="shipping_company">Shipping company</option>
                                    <option value="shipyard">Shipyard</option>
                                </select>
                            </td>
                        </tr>
			<tr>
                            <td><input type="hidden" id="type_inp" name="type_inp" class="input-block-level" readonly="true"/></td>
                        </tr>
                    </table>
                    <style type="text/css">
                        #popupboxURL{
                            display: none;
                        }
                        #popupboxArticle{
                            display: none;
                        }
                    </style>
                    <script>
                        $("select#type").val("null");
                        document.getElementById('type_inp').style.display="none"
                        function showType(showhide){
                            var inp= $('#type').val();
                            $("#type_inp").val(inp);
                            if(showhide == "shipping_company"){
                                document.getElementById('popupboxURL').style.display="inline";
                                document.getElementById('popupboxArticle').style.display="none";
                                document.getElementById('type_inp').style.display="inline";
                                document.getElementById('submit').style.display="inline";
                                var clear='';
                                $("#fax").val(clear);
                                $("#web").val(clear);
                            }
                            else if(showhide == "shipyard"){
                                document.getElementById('popupboxArticle').style.display="inline";
                                document.getElementById('popupboxURL').style.display="none";
                                document.getElementById('type_inp').style.display="inline";
                                document.getElementById('submit').style.display="inline";
                                var clear='';
                                $("#firstname").val(clear);
                                $("#lastname").val(clear);
                            }
                            else if(showhide == "null"){
                                document.getElementById('popupboxArticle').style.display="none";
                                document.getElementById('popupboxURL').style.display="none";
                                document.getElementById('type_inp').style.display="none";
                                document.getElementById('submit').style.display="none";
                                var clear='';
                                $("#fax").val(clear);
                                $("#web").val(clear);
                                $("#type_inp").val(clear);
                            }
                        }
                    </script>
                    <!-- Shipping Company-->
                    <div id="popupboxURL">
                        <table>
                            <tr>
                                <td>Firstname</td><td><input id="firstname" type="text" name="firstname" class="input-block-level validate[required,custom[onlyLetterNumber]] text-input" placeholder="First Name"></td>
                            </tr>
                            <tr>
                                <td>Lastname</td><td><input id="lastname" type="text" name="lastname" class="input-block-level validate[required,custom[onlyLetterNumber]] text-input" placeholder="Last Name"></td>
                            </tr>
                        </table>
                    </div>

                    <!-- Shipyard-->
                    <div id="popupboxArticle">
			<table>
                            <tr>
                                <td>Fax</td><td><input id="fax" type="text" name="fax" class="input-block-level validate[required,custom[onlyLetterNumber]] text-input" placeholder="Fax"></td>
                            </tr>
                            <tr>
                                <td>Website</td><td><input id="web" type="text" name="web" class="input-block-level validate[required,custom[onlyLetterNumber]] text-input" placeholder="Website"></td>
                            </tr>
                        </table>
                    </div>
                    <br/>
                    <button style="display: none" id="submit" class="btn btn-primary" type="submit">Submit</button>
                    <button style="" class="btn" onclick="location.href='<?php echo base_url(); ?>page/home'">Cancel</button><br/><br/>
			
		</form>
            </div>	
        </div>