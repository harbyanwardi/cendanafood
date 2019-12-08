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
                                    <h3>Form Tentang Kami</h3>
                                    <form action="<?php echo base_url('C_tentang/do_update') ?>" method="POST" enctype="multipart/form-data">
                                    <form role="form">
                                        
                                        
                                        <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <input name="id" type="hidden" value="<?php echo $id; ?>" class="form-control" required />
                                            <label>Paragraph 1</label>
                                            <textarea required rows="10" class="form-control" name="prg1"><?php echo $prg1; ?></textarea>
                                        
                                        
                                            
                                        </div>
                                        <div class="form-group">
                                         
                                            
                                            <label>Paragraph 2</label>
                                            <textarea required rows="10" class="form-control" name="prg2"><?php echo $prg2; ?></textarea>
                           
                                        </div>
                                        <div class="form-group">
                                            
                                            <label>Paragraph 3</label>
                                            <textarea required rows="10" class="form-control" name="prg3"><?php echo $prg3; ?></textarea>
                           
                                        </div>
                                        <div class="form-group">
                                           
                                            
                                            <label>Paragraph 4</label>
                                            <textarea required rows="10" class="form-control" name="prg4"><?php echo $prg4; ?></textarea>
                           
                                        </div>
                                        <div class="form-group">
                                           
                                            
                                            <label>Visi</label>
                                            <textarea required rows="10" class="form-control" name="visi"><?php echo $visi; ?></textarea>
                           
                                        </div>
                                        <div class="form-group">
                                            
                                            
                                            <label>Misi</label>
                                            <textarea required rows="10" class="form-control" name="misi"><?php echo $misi; ?></textarea>
                           
                                        </div>

                                         <div class="form-group">
                                            <!-- <input type="hidden" value="<?php echo $color; ?>" name="color" class="form-control" /> -->
                                            <label>Foto</label>
                                            <input name="foto" value="<?php echo $foto; ?>" type="file" class="form-control"  />
                                            
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