<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Impacta Empreendedorismo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel = "shortcut icon" type = "image / x-icon" href = "public/img/ico3.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="public/fonts/icomoon/style.css">

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/jquery-ui.css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="public/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="public/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="public/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="public/css/aos.css">

    <link rel="stylesheet" href="public/css/style.css">
    
    <?php if (isset($styles)) {
      foreach ($styles as $style_name){
        $href = base_url() . "public/css" . $style_name; ?>
        <link href="<?=$href?>" rel="stylesheet">
        <?php
      }
    } ?>

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-warning" role="status">
      <span class="sr-only">Carregando...</span>
    </div>
  </div>

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
   
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-md-3 col-xl-4  d-block">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Impacta<span class="text-dark">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-9 col-xl-8 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                <li><a href="<?php echo base_url(); ?>#home-section" class="nav-link">Início</a></li>
                <li><a href="<?php echo base_url(); ?>#features-section" class="nav-link">Serviços</a></li>
                <li class="has-children">
                  <a href="<?php echo base_url(); ?>#about-section" class="nav-link">Sobre</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="<?php echo base_url(); ?>#our-team-section" class="nav-link">Nosso time</a></li>
                   
                  </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>#testimonials-section" class="nav-link">Depoimentos</a></li>
                <li><a href="<?php echo base_url(); ?>#blog-section" class="nav-link">Vantagens</a></li>
                <li><a href="<?php echo base_url(); ?>#contact-section" class="nav-link">Contato</a></li>
                <li><a href="<?php echo base_url(); ?>restrito" class="nav-link">Restrito</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>