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
                                    <h3>Form Makanan</h3>
                                    <form action="<?php echo base_url('C_Layanan/do_insert') ?>" method="POST" enctype="multipart/form-data">
                                    <form role="form">
                                        
                                        
                                        <div class="form-group">
                                             <input type="hidden" value="<?php echo $id_layanan; ?>" name="id_layanan" class="form-control" /> 
                                            <label>Jenis Layanan</label>

                                            <select class="form-control" name="id_menu_layanan">
                                                     <option value="">Paket yang Tersedia</option>       
                                                             <?php
                                                                 
                                                                    foreach($get as $d){ 
                                                                     ?>
                                                           
                                                            <option value="<?php echo $d['id']; ?>"><?php echo $d['jenis_menu']; ?></option>
                                                           
                                                            <?php 
                                                            } ?>
                                                            
                                                        </select> 
                                            <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <label>Nama Makanan</label>
                                            <input name="nama_makanan" type="text" class="form-control" required />
                                            
                                        </div>
                                            
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
   <?php echo $footer; ?>