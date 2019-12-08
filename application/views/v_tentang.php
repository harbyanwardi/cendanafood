<?php echo $nav;?>
<!-- Header -->
<!-- <header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Céndana Food</h1>
            <p>Restaurant / Coffee / Pub</p>
            <a href="https://api.whatsapp.com/send?phone=6285213360878&text=Halo%20Admin%20Saya%20Mau%20Pesan%20Catering" class="btn btn-custom btn-lg page-scroll">Mulai Pesanan</a> </div>
        </div>
      </div>
    </div>
  </div>
</header> -->
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <!-- <div class="col-xs-12 col-md-12 ">
         <div class="about-img"><img src="<?php echo base_url('assets/img/about.jpg')?>" class="img-responsive" alt=""></div>
      </div> -->
        <div class="about-text">
          <center><h2>Cendana Catering</h2><hr>
          
          <div class="about-img"><img src="<?php echo base_url('assets/img/about.jpg')?>" class="img-responsive" alt=""></div></center>
          
          <p><?php echo $prg1?></p>
         
          <p><?php echo $prg2?></p>

          <p><?php echo $prg3?></p>

          <p>
            <?php echo $prg4?>
          </p>
          <p><b>Visi</b></p>
          <p><?php echo $visi?> </p>
          <p><b>Misi</b></p>
          <p><?php echo $misi?> </p>
        </div>
      </div>
    </div>
    <center><i class="fa fa-download" style="font-size:36px"><a href="<?php echo base_url().'Welcome/act_download' ?>"><h3>Download Brosur</h3></a></i></center>
  </div>
</div>
<!-- Restaurant Menu Section -->

<!-- Portfolio Section -->

<!-- Team Section -->

<!-- Call Reservation Section -->

<!-- Contact Section -->
<div id="contact" class="text-center">
  
  <div class="container">
    <div class="section-title text-center">
      <br>
      <h2>Contact Form</h2>
      <hr>
      <
    </div>
    <div class="col-md-10 col-md-offset-1">
      <form name="sentMessage" id="contactForm" novalidate>
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
