<!-- Header -->
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>LPTSI - Panduan Pengembangan Sistem Informasi</title>

  <link rel="apple-touch-icon" href="<?php  echo base_url(); ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php  echo base_url(); ?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/css/site.min.css">

  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.css">

  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/jquery-wizard/jquery-wizard.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/vendor/formvalidation/formValidation.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
    @media (min-width: 768px) and (max-width: 992px) {
      .form-inline .control-label {
        display: block;
      }
      .form-inline .form-group {
        margin-bottom: 20px;
        vertical-align: baseline;
      }
    }
  </style>

  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php  echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>
  <script src="<?php  echo base_url(); ?>assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>

<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="">
        <img class="navbar-brand-logo" src="<?php  echo base_url(); ?>assets/images/logo.png" title="Sistem Informasi Jual Beli Toko Djondol Pelangi">
        <span class="navbar-brand-text"> DevGuide</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-left navbar-toolbar-left">
          <li role="presentation">
            <a href="" role="menuitem">LPTSI - Panduan Pengembangan Sistem Informasi</a>
          </li>    
        </ul>
        <!-- End Navbar Toolbar Right -->

      </div>
      <!-- End Navbar Collapse -->

    </div>

  </nav>

<!-- Menu -->
  <div class="site-menubar">

    <div class="site-menubar-body">

          <ul class="site-menu">

            <li class="site-menu-category">Umum</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                  <span class="site-menu-title">Dashboard</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                  <span class="site-menu-title">Profil</span>
                </a>
              </li>

            <li class="site-menu-category">Tabel</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                  <span class="site-menu-title">Pengguna</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-pencil" aria-hidden="true"></i>
                  <span class="site-menu-title">Kategori</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                  <span class="site-menu-title">Post</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                  <span class="site-menu-title">Gambar</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                  <span class="site-menu-title">Status</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                  <span class="site-menu-title">Bab</span>
                </a>
              </li>

              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="advanced">
                  <i class="site-menu-icon wb-folder" aria-hidden="true"></i>
                  <span class="site-menu-title">Sub Bab</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="" data-slug="advanced-animation">
                      <i class="site-menu-icon " aria-hidden="true"></i>
                      <span class="site-menu-title">Sub Bab 1</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="" data-slug="advanced-lightbox">
                      <i class="site-menu-icon " aria-hidden="true"></i>
                      <span class="site-menu-title">Sub Bab 2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="" data-slug="advanced-lightbox">
                      <i class="site-menu-icon " aria-hidden="true"></i>
                      <span class="site-menu-title">Sub Bab 3</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="site-menu-category">Panduan</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                  <span class="site-menu-title">Sistem Informasi</span>
                </a>
              </li>

            </li>
          </ul>

        </div>

          <div class="site-menubar-footer">
            <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
            data-original-title="Bantuan">
              <span class="icon wb-settings" aria-hidden="true"></span>
            </a>
            <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Kontak">
              <span class="icon wb-eye" aria-hidden="true"></span>
            </a>
            <a href="<?php echo base_url(); ?>log/login" data-placement="top" data-toggle="tooltip" data-original-title="Keluar">
              <span class="icon wb-power" aria-hidden="true"></span>
            </a>
          </div>

      </div>