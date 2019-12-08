<?php echo $nav;?>
<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Testimoni</h2>
        <hr>
        <p>Beberapa testimoni yang diberikan pelanggan terhadap pelayanan kami</p>
      </div>
      <div id="row">
          <?php
            foreach($testi as $d){ 
           ?>
        <div class="col-md-6 team">
          <div class="thumbnail">
            
            <div class="caption">
              <h3><?php echo date('d F Y', strtotime($d['tanggal'])); ?></h3>
              <h3><?php echo $d['judul']?></h3>
              <p><?php echo $d['testimoni']?></p>
            </div>
          </div>
        </div>
         <?php 
            } ?>
      </div>
    </div>
  </div>
</div>
<?php echo $footer;?>