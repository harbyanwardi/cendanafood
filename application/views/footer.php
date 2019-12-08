<div class="footer">Copyright ©Cendana Food All rights reserved @2018</div>
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
    <script src="<?php echo base_url('assets_b/js/jquery-1.10.2.js') ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets_b/js/bootstrap.min.js') ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets_b/js/jquery.metisMenu.js') ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    
    <script src="<?php echo base_url('assets_b/js/dataTables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets_b/js/dataTables/dataTables.bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets_b/js/dataTables/dataTables.bootstrap.css') ?>"></script>
  <!--   <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable({
                  
                  "iDisplayLenght" : 5,
                  "pageLength": 3,
                });
            });
    </script>
 -->    <script>
       $(document).ready(function (){
            var table = $('#dataTables-example').DataTable({
            "pageLength": 3,
            });
            setInterval(function(){ 
               var info = table.page.info();
               var pageNum = (info.page < info.pages) ? info.page + 1 : 1;
               table.page(pageNum).draw(false);    
            }, 1000);   
            
        });
    </script>
    <script>
            $(document).ready(function () {
                $('#dataTables1-example').dataTable({
                  
                  "iDisplayLenght" : 5,
                  "pageLength": 3,
                });
            });
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery.idle.js') ?>"></script>
    <script>
    $(document).idle({
        onIdle: function(){
            window.location="/Logout/index";                
        },
        idle: 100000
    });
</script>
    <script src="<?php echo base_url('assets_b/js/custom.js') ?>"></script>
</body>
</html>
