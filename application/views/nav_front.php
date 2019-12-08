<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cendana Food</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.PNG')?>" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo base_url('assets/img/icon.PNG') ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/img/icon.PNG') ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/img/CendanaLogo.jpg') ?>">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/bootstrap.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.css') ?>">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/style.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nivo-lightbox/nivo-lightbox.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nivo-lightbox/default.css') ?>">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.css+owl.theme.css)">
<script src="https://cdn.jsdelivr.net/g/jquery@2.2.4,jquery.owlcarousel@1.31"></script>



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
  body, html {
  font-family: 'Dancing Script', cursive;
}
p {
    font-family: Georgia, serif;
}
h2 {
    font-family: cursive;
}
a.a {
    font-size: large;
}
.floatwa {
position:fixed;
bottom:10px;
right: 15px;
background-color:rgba(255, 255, 255, 0.41);
width:15%;
z-index:1000;
padding:0px;
margin:auto;
text-align:center;
float:none;
box-shadow: 0px -2px 10px #c0c0c0;
}
.tombolwa {
border: 1px #56aa71 solid;
background-color:#2f7e49;
width:100%;
padding:4px;
text-align:center;
margin:0;
border-radius: 5px;
margin:auto;
text-align:center;
float:none;
}
.floatwa:active,.floatwa:focus,
.tombolwa:hover{background-color:#45bb6c!important;border-color:#45bb6c!important;}
.floatwa a{
color:white;
}
</style>

<div class="floatwa">
<a href="https://api.whatsapp.com/send?phone=6282112468548&amp;text=Halo%20admin,%20Saya%20ingin%20order" target="_blank"><div class="tombolwa"><i class="fa fa-whatsapp fa-4x"></i>Chat Admin</div></a></div>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="<?php echo base_url('/')?>"><img src="<?php echo base_url('assets/img/CendanaLogo.png')?>" height="82" width="122"></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('Welcome/tentang/1') ?>" class="page-scroll">Tentang Kami</a></li>
        <li><a href="<?php echo base_url('Welcome/layanan') ?>" class="page-scroll">Layanan Kami</a></li>
        <li><a href="<?php echo base_url('Welcome/gallery') ?>" class="page-scroll">Gallery</a></li>
        <li><a href="<?php echo base_url('Welcome/testimoni') ?>" class="page-scroll">Testimoni</a></li>
        <li><a href="#call-reservation" class="page-scroll">Kontak Kami</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>