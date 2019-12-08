<?php echo $nav;?>

<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Menu</h2>
      <hr>
      <p>Menu Layanan Kami terdiri dari beberapa paket</p>
    </div>
  </div>
  <div class="container">
    <?
        foreach($menu as $dm){ 
     ?> 
    <div class="row">
       
      <div class="col-xs-12 col-sm-6 col-md-12">
        
        <div class="menu-section">
         
          <center><button class="menu-section-title" id="menutitle<?php echo $dm['id']; ?>" onclick="return menutitle(<?php echo $dm['id']; ?>)"><?php echo $dm['jenis_layanan']?></button></center>
          <hr>
         <?php
            $id_layanan = $dm['id'];        
           $get = $this->M_data->GetData("menu_layanan ","where id_layanan = '$id_layanan'"); 
        ?>
        <div id="item<?php echo $dm['id']; ?>" style="display:none">
        <?
        foreach($get as $d){ 
     ?>  <div class="col-md-4">
         
        
                
          <div id="menu-item" class="menu-item">
            <div style="font-size:150%;" id="menu-item-name.$id" class="a menu-item-name"><?php echo $d['jenis_menu']?></div>
            <!--<div class="menu-item-price"> $35 </div>-->
            <?php
            $id_menu_layanan = $d['id'];        
               $mkn = $this->M_data->GetData("makanan ","where id_menu_layanan = '$id_menu_layanan'"); 
            ?>
            <?
                foreach($mkn as $d){ 
             ?>  
            <div style="font-size:100%;" class="menu-item-description"><?php echo $d['nama_makanan']?></div>
            <?php 
            } ?>
          </div>
          </div>
          
         <?php 
            } ?>
            </div>
        </div>
        
        
      </div>
      
      
    </div>
    <br><br>
    <?php 
            } ?>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function menutitle(id) {
        if($("#item" + id).css('display') == 'none') {
            $("#item" + id).show(1000);
        }else {
            $("#item" + id).hide(1000);
        }
    }
</script>
<?php echo $footer;?>