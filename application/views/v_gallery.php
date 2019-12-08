<?php echo $nav;?>
<div id="portfolio">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Gallery</h2>
      <hr>
     
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="categories">
        <ul class="cat">
          
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="row">
      <div class="portfolio-items">
          <?php
                                        foreach($data as $d){ 
                                         ?>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url().'assets_b/img/'.$d['gambar'] ?>" title="<?php echo $d['makanan']?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4><?php echo $d['makanan']?></h4>
              </div>
              <img src="<?php echo base_url().'assets_b/img/'.$d['gambar'] ?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <?php 
            } ?>
        
       
      </div>
    </div>
  </div>
</div>
<?php echo $footer;?>