<?php echo $nav;?>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Cendana Catering</h1>
            
            <a href="https://api.whatsapp.com/send?phone=6282112468548&text=Halo%20Admin%20Saya%20Mau%20Pesan%20Catering" class="btn btn-custom btn-lg page-scroll">Mulai Pesanan</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
        <?php
                                        foreach($abt as $d){ 
                                         ?>
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="<?php echo base_url().'assets_b/img/'.$d['foto'] ?>" class="img-responsive" alt=""></div>
       
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          
          <h2>Cendana Catering</h2>
          <hr>
          <p><?php echo $d['prg1']?></p>
          
          <a class="a" href="<?php echo base_url('Welcome/tentang/1')?>">Baca Selengkapnya ...</a>
        </div>
      </div>
    </div>
     <?php 
            } ?>
  </div>
</div>
<!-- Restaurant Menu Section -->

<!-- Portfolio Section -->
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
                                        foreach($glr as $d){ 
                                         ?>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url().'assets_b/img/'.$d['gambar'] ?>" title="Dish Name" data-lightbox-gallery="gallery1">
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
<!-- Team Section -->
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
<!-- Call Reservation Section -->
<div id="call-reservation" class="text-center">
  <div class="container">
    <h2>Want to make a reservation? Call <strong>021-8476659</strong></h2>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
<!--  <div id="googleMaps" style="width:100%;height:400px;"></div>-->
<!--  <script>-->
<!--        function myMap() {-->
<!--        var mapProp= {-->
<!--            center:new google.maps.LatLng(-6.2668603,107.0621947),-->
<!--            zoom:15,-->
<!--        };-->
<!--        var map=new google.maps.Map(document.getElementById("googleMaps"),mapProp);-->
<!--        var marker=new google.maps.Marker({-->
<!--      position: new google.maps.LatLng(-6.2668603,107.0621947),-->
<!--      map: map-->
<!--  });-->
<!--        }-->
<!--</script>-->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.000159728552!2d106.93399641506355!3d-6.263707495466267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d22a1ad4197%3A0xdb8a5d54a1946213!2sJl.+Cendana+IV%2C+Jatibening+Baru%2C+Pondokgede%2C+Kota+Bks%2C+Jawa+Barat+17412!5e0!3m2!1sen!2sid!4v1544106016338" width="1200" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

  <div class="container">
    <div class="section-title text-center">
        <br>
      <h2>Contact Form</h2>
      <hr>
      <p>Silahkan kontak kami dengan form dibawah ini</p>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <form action="<?php echo base_url('Welcome/kirim_email') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
      </form>
    </div>
  </div>
</div>
<?php echo $footer ?>