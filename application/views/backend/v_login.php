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
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Admin Catering : Login</h2>
                <h5>( Login untuk mendapatkan akses )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Masukan username dan password untuk Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="<?php echo base_url('Login/auth') ?>" method="post" role="form" >
                                       <br />
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                        </div>
                                             <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                        </div>
                                     <button class="btn btn-primary ">Login Now</button>
                                    <hr />
                                    </form>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
   <script src="<?php echo base_url('assets_b/js/jquery-1.10.2.js') ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets_b/js/bootstrap.min.js') ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets_b/js/jquery.metisMenu.js') ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    
    <script src="<?php echo base_url('assets_b/js/dataTables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets_b/js/dataTables/dataTables.bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets_b/js/dataTables/dataTables.bootstrap.css') ?>"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable({
                  
                  "iDisplayLenght" : 50,
                });
            });
    </script>
    <script src="<?php echo base_url('assets_b/js/custom.js') ?>"></script>
</body>
</html>
