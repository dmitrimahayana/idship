<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>
    <div id="header2">
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
        <div class="banner">Banner 1</div>
        <div class="banner">Banner 2</div>
        <div class="banner">Banner 3</div>
        <div class="banner">Banner 4</div>
		
    </div>
    <div id="content-left">
        <div id="content-left-menu">
                <div><label><a class="menu-active" href="<?php echo base_url(); ?>page/home" style="color:white" >Home</a></label></div>
                <div><label><a class="menu" href="<?php echo base_url(); ?>page/about" >About Us</a></label></div>
        </div>
        <div id="content-left-slide">
                <div class="slider-wrapper theme-bar">
                        <div id="slider" class="nivoSlider">
                                <img src="<?php echo base_url(); ?>images/1.jpg" height="350" data-thumb="images/1.jpg" alt="" data-transition="slideInLeft" />
                                <img src="<?php echo base_url(); ?>images/2.jpg" height="350" data-thumb="images/2.jpg" alt="" data-transition="slideInLeft" />
                                <img src="<?php echo base_url(); ?>images/3.jpg" height="350" data-thumb="images/3.jpg" alt="" data-transition="slideInLeft" />
                        </div>
                </div>
        </div>
        <div class="content-left-field">
                <h1>News</h1>
                <p>Indonesia is the largest archipelagic country in the world, in which about 2/3 of it is situated by blue ocean. Thus, the functions of the sea for the existence of this country which are as a mean of bridge or as integration of national authority and also as unifying force of the nation become the most crucial aspect.
Sea transportation is one of the economical infrastructure for even distribution of country developments result and a main motor of natural resources, national development resources as well as nation security safeguarding. Sea transportation sector becomes the idol to bring in foreign exchange promises if it is well maintained, to increase market share of national fleet, to decrease the deficit of sea transportation services and to uphold “ Cabotage principles “ in Indonesia as well.
                </p>
                <p>
Nowadays, Indonesia flag ships attained around 7.000 units excluded those belong to TNI and POLRI. This number is getting increase straight ahead and surely not balance at all with the increasing of dockyard, which seemly stagnant. The fact is that fleet need to be repaired and maintained in dockyard annually for shipping safety requirements.
The increasing of qualified national fleet should be supported by proper repair, good maintenance and also good shipbuilding with good quality. PT. Indonesia Marina Shipyard, therefore, has been established on December 03, 2002 to provide marine industrial services with international standards as well as global oriented in a row with technology development that is comparative competitive.</p>
        </div>

    </div>