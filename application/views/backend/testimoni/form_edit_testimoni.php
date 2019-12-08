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
                                    <h3>Form Tambah Testimoni</h3>
                                    <form action="<?php echo base_url('C_testimoni/do_update') ?>" method="POST" enctype="multipart/form-data">
                                    <form role="form">
                                        
                                        
                                        <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            
                                            <label>Isi Testimoni</label>
                                            <input name="judul" type="text" value="<?php echo $judul; ?>" class="form-control" autofocus="autofocus" required />
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <input name="id" type="hidden" value="<?php echo $id; ?>" class="form-control" required />
                                            <label>Isi Testimoni</label>
                                            <input name="testimoni" type="text" value="<?php echo $testimoni; ?>" class="form-control" autofocus="autofocus" required />
                                            
                                        </div>

                                         <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <label>Tanggal</label>
                                            <input name="tanggal" value="<?php echo $tanggal; ?>" type="date" class="form-control" required />
                                            
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