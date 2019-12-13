<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2019 10:07:34 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
          content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>E-Learning</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/images/ico/logo_uin.jpg">
    <!--    <link href="../../../../../../fonts.googleapis.com/css93c2.css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">-->
        <link
                href="
    <?= base_url() ?>assets/css/fonts/css93c2.css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
                rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css"
          href="<?= base_url() ?>/assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/components.min.css">
    <link rel="stylesheet" type="text/css"
          href="<?= base_url() ?>/assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/fonts/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="<?= base_url() ?>/assets/fonts/line-awesome/1.1/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css"
          href="<?= base_url() ?>/assets/js/easy-autocomplete/easy-autocomplete.themes.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/js/easy-autocomplete/easy-autocomplete.css">
    <!-- END: Theme CSS--><!-- END: Theme CSS-->
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="<?= base_url() ?>/assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/pages/chat-application.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/pages/dashboard-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/funkyradio.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/summernote/dist/summernote-bs4.css">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //=base_url()?><!--assets/css/style.css">-->
    <!-- END: Custom CSS-->

    <style>
        body {
            background-image: url("<?=base_url('/assets/images/backgrounds/bg-18.jpg')?>");
            background-size: 100%;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
      data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>


                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                                                           data-toggle="dropdown"><i
                                    class="ft-power"> </i></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <div class="arrow_box_right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span
                                                class="grey darken-2"><?= $this->session->userdata('nama_pengguna') ?></span>
                                    </h6>
                                    <h6 class="dropdown-header m-0"><span
                                                class="grey darken-2"><?= $this->session->userdata('username_pengguna') ?></span>
                                    </h6>
                                    <h6 class="dropdown-header m-0"><span
                                                class="grey darken-2"><?= $this->session->userdata('level_pengguna') ?></span>
                                    </h6>
                                </li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="ft-power"></i>
                                    Logout</a>

                            </div>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-cordion    menu-shadow " data-scroll-to-active="true"
     data-img="<?= base_url() ?>/assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url() ?>"><img class="brand-logo"
                                                                                          alt="Chameleon admin logo"
                                                                                          src="<?= base_url() ?>/assets/images/logo/logo_uin.jpg"/>
                    <h3 class="brand-text"> E-Learning</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="<?= base_url() ?>"><i class="ft-home"></i><span class="menu-title"
                                                                                           data-i18n="">Home</span></a>
            </li>
            <?php
            $CI =& get_instance();
            $CI->load->model('ModulModel');
            $result = $CI->ModulModel->get_modul($this->session->userdata('matkul_id'));

            ?>
            <?php
            if ($this->uri->segment(1) != null):
                ?>
                <li class=" nav-item"><a href="<?= base_url() ?>modul"><i class="ft-layers"></i><span class="menu-title"
                                                                                                      data-i18n="">Modul</span></a>
                    <ul class="menu-content">
                        <?php
                        foreach ($result as $item):
                            ?>
                            <li><a class="menu-item"
                                   href="<?= base_url() ?>modul/lihat/<?= $item['id_modul'] ?>"><?= $item['nama_modul'] ?></a>
                            </li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </li>
            <?php
            endif;
            ?>

            <?php if ($this->session->userdata('level_pengguna') !== 'mahasiswa'): ?>

            <?php endif; ?>


        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
