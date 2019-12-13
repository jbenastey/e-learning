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
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/images/ico/uin-suska.png">
	<!--    <link href="../../../../../../fonts.googleapis.com/css93c2.css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">-->

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
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap-extended.css">
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
	<!-- END: Page CSS-->

	<!--     BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/custom.css">
	<!--     END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 2-columns " data-open="click" data-menu="vertical-menu"
	  data-color="bg-gradient-x-red-pink" data-col="2-columns">


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-cordion    menu-shadow " data-scroll-to-active="true"
	 data-img="<?= base_url() ?>/assets/images/backgrounds/02.jpg">
	<div class="navbar-header">
		<ul class="nav navbar-nav flex-row">
			<li class="nav-item mr-auto"><a class="navbar-brand" href="index-2.html">
				<img class="brand-logo" alt="Chameleon admin logo" src="<?= base_url() ?>/assets/images/logo/uin-suska.png"/>
				<h3 class="brand-text" style="font-family: Roboto"> E-Learning</h3></a>
			</li>
			<li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
		</ul>
	</div>

<!--	<div class="navigation-background"></div>-->
	<div class="main-menu-content">
		<div class="bg-profile" style="background-image: url('<?= base_url()?>assets/images/portfolio/portfolio-6.jpg')" >
			<div class="bg-black-transparent p-1" style="height: 100%">
				<div class="row" style="margin-top: 16px">
					<div class="col-3">
						<h2 class="icon-header font-weight-light"><i class="ft ft-user text-white"></i></h2>
					</div>
					<div class="col-9">
						<div class="dropdown">
							<button class="btn dropdown-toggle btn-user"  title="<?= $this->session->userdata('username_pengguna') ?>"
									type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
								<?= substr($this->session->userdata('username_pengguna'),0,10).'..' ?>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#"><i class="ft ft-activity"></i> Profil</a>
								<a class="dropdown-item" href="#"><i class="ft ft-inbox"></i> Pesan</a>
								<a class="dropdown-item" href="<?= base_url('auth/logout')?>"><i class="ft ft-log-out"></i> Logout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
			<li class=" nav-item">
				<a href="<?= base_url() ?>">
					<i class="ft-home"></i><span class="menu-title" data-i18n="">Home</span>
				</a>
			</li>

			<?php

			$CI =& get_instance();
			$CI->load->model('ModulModel');
			$result = $CI->ModulModel->get_modul($this->session->userdata('matkul_id'));

			?>
			<?php
			if ($this->uri->segment(1) != null):
				$paket = $CI->ModulModel->get_paket_by_id($this->session->userdata('matkul_id'));
				?>
				<li class="nav-item open">
				<!--	<a href="<?/*= base_url() */?>modul">
						<?/*= $paket['matkul_nama'] */?>
					</a>-->
                    <a href="<?= base_url() ?>">
                        <i class="ft-package"></i><span class="menu-title" data-i18n="">Modul</span>
                    </a>

					<ul class="menu-content">
						<?php
						foreach ($result as $item):
							?>
							<li>
								<a class="menu-item" href="<?= base_url() ?>modul/lihat/<?= $item['id_modul'] ?>"
								   title="<?= $item['nama_modul'] ?>">
									<?= $item['nama_pertemuan'] ?>
								</a>
							</li>
						<?php
						endforeach;
						?>
					</ul>
				</li>
			<?php
			endif;
			?>
			<!--    <li class=" nav-item"><a href="<? /*=base_url()*/ ?>jawaban"><i class="ft-file-text"></i><span class="menu-title" data-i18n="">Jawaban</span></a>
            </li>-->
			<?php if ($this->session->userdata('level_pengguna') !== 'mahasiswa'): ?>
				<!--    <li class=" nav-item"><a href="<? /*=base_url()*/ ?>profile"><i class="ft-file"></i><span class="menu-title" data-i18n="">RPS</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="timeline-center.html">Silabus</a>
                    </li>u
                    <li><a class="menu-item" href="timeline-horizontal.html">Modul</a>
                    </li>
                </ul>
            </li>-->
			<?php endif; ?>
			<!--   <li class=" nav-item"><a href="<? /*=base_url()*/ ?>about"><i class="ft-alert-circle"></i><span class="menu-title" data-i18n="">About</span></a>
            </li>-->


		</ul>
	</div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-body">
