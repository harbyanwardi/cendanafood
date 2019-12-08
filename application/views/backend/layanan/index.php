<?php echo $nav;?>
        <!-- /. NAV SIDE  -->
        <style type="text/css">
            .label {
            color: white;
            font-size: 8px;
            padding: 4px;
        }

        .success {background-color: #4CAF50;} /* Green */
        .info {background-color: #2196F3;} /* Blue */
        .warning {background-color: #ff9800;} /* Orange */
        .danger {background-color: #f44336;} /* Red */ 
        </style>
       
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Layanan
                        </div>
                        <div class="panel-body">
                            <div class="col-md-10 ">
                             <h3>Layanan</h3>
                                <br>

                            </div> 
                           
                                <div class="col-md-12">
                                   <?=$this->session->flashdata('pesan')?>
                                    <a href="<?php echo base_url('C_Layanan/add')?>"><button class="btn btn-success" style="margin-bottom: 10px;">TAMBAH DATA</button></a>
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Layanan</th>
                                            <th>Menu Paket</th>
                                            <th>Nama Makanan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                        $nomor = 1;
                                        foreach($data as $d){ 
                                         ?>
                                        <tr class="odd gradeX">
                                             <td><?php echo $nomor; ?></td>
                                            <td><?php echo $d['jenis_layanan']?></td>
                                            <td><?php echo $d['jenis_menu']?></td>
                                             <td><?php echo $d['nama_makanan']?></td>
                                           <td align="center">
                                                <a href="<?php echo base_url()."C_Layanan/do_edit/".$d['id']; ?>"><button class="btn btn-primary btn-sm" style="margin-bottom: 5px;">EDIT</button></a>
                                                <a href="<?php echo base_url()."C_Layanan/do_delete/".$d['id']; ?>"><button class="btn btn-danger btn-sm" style="margin-bottom: 5px;">DELETE</button></a>
                                            </td>
                                            
                                        </tr>
                                        <?php 
                                        $nomor = $nomor+1;} ?>
                                    </tbody>
                                </table>
                                    <br />
                                      

                                 
    </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    
                   
                   
                     <!-- End Form Elements -->
               <?php echo $footer ?>
