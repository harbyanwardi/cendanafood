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
                                    <h3>Form Layanan</h3>
                                    <form action="<?php echo base_url('C_Layanan/lanjut') ?>" method="POST" enctype="multipart/form-data">
                                    <form role="form">
                                        
                                        
                                        <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <label>Jenis Layanan</label>
                                            <select class="form-control" name="id_layanan">
                                                     <option value="">Warna yang tersedia</option>       
                                                             <?php
                                                                 
                                                                    foreach($get as $d){ 
                                                                     ?>
                                                           
                                                            <option value="<?php echo $d['id']; ?>"><?php echo $d['jenis_layanan']; ?></option>
                                                           
                                                            <?php 
                                                            } ?>
                                                            
                                                        </select> 
                                            
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