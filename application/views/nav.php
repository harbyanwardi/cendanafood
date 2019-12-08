<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page Cendana</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets_b/css/bootstrap.css') ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets_b/css/font-awesome.css') ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets_b/css/custom.css') ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<style type="text/css">
    .label {
    color: white;
    font-size: 20px;
    padding: 10px;
}

.success {background-color: #4CAF50;} /* Green */
.info {background-color: #2196F3;} /* Blue */
.warning {background-color: #ff9800;} /* Orange */
.danger {background-color: #f44336;} /* Red */ 

.footer {
    
    left: 0;
    bottom: 1;
    width: 100%;
   
    color: black;
    text-align: center;
}

</style>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Operator</a> 

            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="<?php echo base_url('Logout/index') ?>" class="btn btn-primary square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url('assets_b/img/find_user.png') ?>" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="<?php echo base_url('C_tentang/index/1') ?>"><i class="fa fa-building fa-3x"></i> Tentang Kami</a>
                    </li>
                    
                    <li>
                        <a  href="<?php echo base_url('C_testimoni/index') ?>"><i class="fa fa-pencil fa-3x"></i> Testimoni</a>
                    </li>
				     <li>
                        <a  href="<?php echo base_url('C_Gallery/index') ?>"><i class="fa fa-photo fa-3x"></i>Gallery</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url('C_Layanan/index') ?>"><i class="fa fa-book fa-3x"></i>Layanan</a>
                    </li>
					
                   
                   <!--  <?php if ($this->session->userdata('level')=="1") { ?>
           
                    <li>
                        <a  href="<?php echo base_url('C_admin/index') ?>"><i class="fa fa-user fa-3x"></i>Registrasi Operator</a>
                    </li>
                    <?php } ?>

                     <?php if ($this->session->userdata('level')=="2") { ?>
           
                    <li>
                        <a  href="<?php echo base_url('C_index/changepass') ?>"><i class="fa fa-user fa-3x"></i>Change Password</a>
                    </li>
                    <?php } ?> -->
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-8">
                    <!--  <img src="" alt="Logo" width="360" height="100">    -->
                    
                    </div>
                    <div class="col-md-4">
                         <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin Page</h2> 
                    </div>
                </div>