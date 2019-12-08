<?php echo $nav;?>
        <!-- /. NAV SIDE  -->
       
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin Page 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Form Edit</h3>
                                    <form action="<?php echo base_url('C_Layanan/do_update') ?>" method="POST" enctype="multipart/form-data">
                                    <form role="form">
                                        
                                        
                                        <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <input name="id" type="hidden" value="<?php echo $id; ?>" class="form-control" required />
                                            <input name="id_layanan" type="hidden" value="<?php echo $id_layanan; ?>" class="form-control" required />
                                            <input name="id_menu_layanan" type="hidden" value="<?php echo $id_menu_layanan; ?>" class="form-control" required />
                                            <label>Jenis Layanan</label>
                                            <input readonly name="jenis_layanan" type="text" value="<?php echo $jenis_layanan; ?>" class="form-control" autofocus="autofocus" required />
                                            
                                        </div>

                                         <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <label>Jenis Menu Paket Layanan</label>
                                            <input readonly name="jenis_menu" value="<?php echo $jenis_menu; ?>" type="text" class="form-control" required />
                                            
                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <label>Nama Makanan</label>
                                            <input name="nama_makanan" value="<?php echo $nama_makanan; ?>" type="text" class="form-control" required />
                                            
                                        </div>

                                        
                                        <button type="submit" class="btn btn-primary">LANJUT</button>

                                    </form>
                                    <br />
                                      

                                 
    </div>
    
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   <?php echo $footer ?>