<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LPTSI - Panduan Pengembangan Sistem Informasi</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php  echo base_url(); ?>LTR/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php  echo base_url(); ?>LTR/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php  echo base_url(); ?>LTR/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php  echo base_url(); ?>LTR/assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php  echo base_url(); ?>LTR/assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php  echo base_url(); ?>LTR/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php  echo base_url(); ?>LTR/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php  echo base_url(); ?>LTR/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php  echo base_url(); ?>LTR/assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="<?php  echo base_url(); ?>LTR/assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php  echo base_url(); ?>LTR/assets/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php  echo base_url(); ?>LTR/assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="<?php  echo base_url(); ?>LTR/assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php  echo base_url(); ?>LTR/assets/js/pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body class="bg-slate-800">

	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Advanced login -->
				<form action="<?php echo base_url(); ?>home/dashboard">
					<div class="panel panel-body login-form">
						<div class="text-center">
							<div class="icon-object border-warning-400 text-warning-400"><i class="icon-people"></i></div>
							<h5 class="content-group-lg">Masuk ke akun Anda <small class="display-block">Masukkan identitas Anda di bawah ini</small></h5>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" placeholder="Username">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" placeholder="Password">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<!--<div class="form-group login-options">
							<div class="row">
								<div class="col-sm-6">
									<label class="checkbox-inline">
										<input type="checkbox" class="styled" checked="checked">
										Remember
									</label>
								</div>

								<div class="col-sm-6 text-right">
									<a href="login_password_recover.html">Forgot password?</a>
								</div>
							</div>
						</div>-->

						<div class="form-group">
							<button type="submit" class="btn bg-blue btn-block">Masuk <i class="icon-circle-right2 position-right"></i></button>
						</div>

						<!--<div class="content-divider text-muted form-group"><span>or sign in with</span></div>
						<ul class="list-inline form-group list-inline-condensed text-center">
							<li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
							<li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
							<li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
							<li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
						</ul>-->

						<!--<div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
						<a href="login_registration.html" class="btn bg-slate btn-block content-group">Register</a>
						<span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>-->
					</div>
				</form>
				<!-- /advanced login -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->


		<!-- Footer -->
		<div class="footer text-white">
			&copy; 2016. <a href="<?php echo base_url(); ?>log/login" class="text-white">Panduan Pengembangan Sistem Informasi</a> oleh <a href="http://lptsi.its.ac.id/" class="text-white" target="_blank">LPTSI</a>
		</div>
		<!-- /footer -->

	</div>
	<!-- /page container -->

</body>
</html>
