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
                                    <h3>Form Tambah Gallery</h3>
                                    <form action="<?php echo base_url('C_Gallery/do_insert') ?>" method="POST" enctype="multipart/form-data">
                                    <form role="form">
                                        
                                        
                                        <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> --><label>Makanan</label>
                                            <input name="makanan" type="text" class="form-control" autofocus="autofocus" required />
                                            
                                        </div>

                                         <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <label>Gambar</label>
                                            <input name="gambar" type="file" class="form-control" required />
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <label>Status</label>
                                              <select name="status" class="form-control" id="sel1">
        <option value="ACTIVE">ACTIVE</option>
        <option value="DEACTIVE">DEACTIVE</option>
     
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
   <?php echo $footer ?>