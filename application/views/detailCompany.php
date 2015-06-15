<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="#"><img src="<?php echo base_url(); ?>img/Logo.png" width="150" /></a>
        <div class="nav-collapse collapse" style="padding-top: 20px;">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $type.' '.$username; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Setting</a></li>
                          <li class="divider"></li>
                          <li><a href="<?php echo base_url().'login/log_out' ?>">Log out</a></li>
                        </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right" action="<?php echo base_url(); ?>galangan/search" method="post">
                <input type="text" class="search-query" name="cari" placeholder="Search">
            </form>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Welcome to PT. Indoship Forward</h1>
        <p class="lead">We provide shipyard information for repair work in Indonesia</p>
    </div>
</header>

<div class="container">
    <!-- Docs nav
    ================================================== -->
    <div class="row">
        <div class="span3" style="padding-top: 30px;">
          <ul class="thumbnails">
            <li class="span2">
                <a href="#" class="thumbnail">
                    <img data-src="holder.js/160x120" alt="" src="<?php echo base_url(); ?>img/Logo.png" width="100">
                </a>
            </li>
            <li class="span2">
                <a href="#" class="thumbnail">
                    <img data-src="holder.js/160x120" alt="" src="<?php echo base_url(); ?>img/Logo.png" width="100">
                </a>
            </li>
            <li class="span2">
                <a href="#" class="thumbnail">
                    <img data-src="holder.js/160x120" alt="" src="<?php echo base_url(); ?>img/Logo.png" width="100">
                </a>
            </li>
            <li class="span2">
                <a href="#" class="thumbnail">
                    <img data-src="holder.js/160x120" alt="" src="<?php echo base_url(); ?>img/Logo.png" width="100">
                </a>
            </li>
          </ul>
        </div>
        <div class="span6" style="padding-top: 30px;">
            <?php echo validation_errors(); ?>
            <h2> Search Result</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Company</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Province</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tampil as $row): ?> 
                    <tr>
                        <td> <?php echo $row->type;?></td>
                        <td> <?php echo $row->company;?></td>
                        <td> <?php echo $row->phone;?></td>
                        <td> <?php echo $row->address;?></td>
                        <td> <?php echo $row->city;?></td>
                        <td> <?php echo $row->province;?></td>
                        <td> <?php echo $row->country;?></td>
                        <!--<td> <?php echo $row->country;?></td>
                        <td> <?php echo $row->fax;?></td>
                        <td> <?php echo $row->web;?></td>
                        <td> <?php echo $row->ID_Member;?></td>
                        <td> <?php echo $row->email;?>
                        <td> <?php echo $row->firstname;?></td>
                        <td> <?php echo $row->lastname;?></td></td>-->
                    </tr>
                    <?php endforeach;;?>
                </tbody>
            </table>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('#tabs2').tab();
            });
            
            $('a[data-toggle="tab"]').on('shown', function (e) {
                e.target // activated tab
                e.relatedTarget // previous tab
            });
        </script>
    </div> <!-- container -->

