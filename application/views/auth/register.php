<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2019 10:20:18 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Register with Background Color - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="<?=base_url()?>/assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>/assets/images/ico/favicon.ico">
    <link href="../../../../../../fonts.googleapis.com/css93c2.css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/core/colors/palette-switch.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/pages/login-register.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="text-center mb-1">
                                    <img src="<?=base_url()?>/assets/images/logo/logo_uin.jpg" width="80" alt="branding logo">
                                </div>
                                <div class="font-large-1  text-center">
                                    Register
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body">
                                    <form class="form-horizontal"method="post" action="<?=base_url('auth/insertMahasiswa')?>" novalidate>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round" id="user-name" placeholder="Enter Nim" required name="username_pengguna">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round" id="user-name" placeholder="Enter name" required name="username_pengguna">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" id="user-password" placeholder="Enter Password" required name="password_pengguna">
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset>

                                        <div class="form-group text-center">
                                            <button type="submit" name="simpan" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Register</button>
                                        </div>

                                    </form>
                                <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1">
                        <span>Already a member ?
                            <a href="login.html" class="card-link">Sign In</a>
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="<?=base_url()?>/assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>/assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>/assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?=base_url()?>/assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?=base_url()?>/assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>/assets/js/core/app.min.js" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?=base_url()?>/assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2019 10:20:18 GMT -->
</html>
