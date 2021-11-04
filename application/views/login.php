<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<base href="<?php echo base_url(); ?>" />
	<title><?php echo $this->config->item('company') . ' | POS ' . ' | ' .  $this->lang->line('login_login'); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo 'dist/bootswatch/' . (empty($this->config->item('theme')) ? 'flatly' : $this->config->item('theme')) . '/bootstrap.min.css' ?>" />
	<!-- start css template tags -->
	<link rel="stylesheet" type="text/css" href="css/login.css" />
	<!-- end css template tags -->
</head>

<body>



	<!-- Full Page Intro -->
	<div class="view " style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
		<!-- Mask & flexbox options-->
		<div class="mask rgba-gradient align-middle">
			<!-- Content -->
			<div class="container align-middle">
				<!--Grid row-->
				<!-- <div class="row mt-5"> -->
				<!--Grid column-->
				<!-- <div class="col-md-6 mb-5 mt-md-0 mt-5 text-white text-center text-md-left">
							<h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right now! </h1>
							<hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
							<h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
								nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
								dolor molestiae, quisquam iste, maiores. Nulla.</h6>
							<a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
						</div> -->
				<!--Grid column-->
				<!--Grid column-->
				<div class="align-middle d-flex justify-content-start">
					<!--Form-->
					<div class="card wow fadeInRight" data-wow-delay="0.3s">
						<div class="card-body">
							<!--lllllllllllllllllllllllllllllllllllllllllllllllllll-->
							<div id="logo" align="center"><img style="width:250px; height:120px;" src="<?php echo base_url(); ?>/images/infinizee.jpg"></div>


							<div id="login" class="align-center">
								<?php echo form_open('login') ?>
								<div id="container">
									<div align="center" style="color:red"><?php echo validation_errors(); ?></div>

									<?php if (!$this->migration->is_latest()) : ?>
										<div align="center" style="color:red"><?php echo $this->lang->line('common_migration_needed', $this->config->item('application_version')); ?></div>
									<?php endif; ?>

									<div id="login_form">
										<div class="input-group">
											<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-user"></span></span>
											<input class="form-control" placeholder="<?php echo $this->lang->line('login_username') ?>" name="username" type="text" size=20 autofocus></input>
										</div>

										<div class="input-group">
											<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-lock"></span></span>
											<input class="form-control" placeholder="<?php echo $this->lang->line('login_password') ?>" name="password" type="password" size=20></input>
										</div>

										<?php
										if ($this->config->item('gcaptcha_enable')) {
											echo '<script src="https://www.google.com/recaptcha/api.js"></script>';
											echo '<div class="g-recaptcha" align="center" data-sitekey="' . $this->config->item('gcaptcha_site_key') . '"></div>';
										}
										?>

										<input class="btn btn-primary btn-block" type="submit" name="loginButton" value="<?php echo $this->lang->line('login_go') ?>" />
									</div>
								</div>
								<?php echo form_close(); ?>

								<h1>Infinizee POS <?php echo $this->config->item('application_version'); ?></h1>
							</div>
						</div>
					</div>
					<!--/.Form-->
					<!-- </div> -->
					<!--Grid column-->
					<!-- </div> -->
					<!--Grid row-->
				</div>
				<!-- Content -->
			</div>
			<!-- Mask & flexbox options-->
		</div>
		<!-- Full Page Intro -->


		<style>
			html,
			body,
			header,
			.view {
				height: 100%;
			}

			@media (max-width: 740px) {

				html,
				body,
				header,
				.view {
					height: 1000px;
				}
			}

			@media (min-width: 800px) and (max-width: 850px) {

				html,
				body,
				header,
				.view {
					height: 650px;
				}
			}

			.top-nav-collapse {
				background-color: #3f51b5 !important;
			}

			.navbar:not(.top-nav-collapse) {
				background: transparent !important;
			}

			@media (max-width: 991px) {
				.navbar:not(.top-nav-collapse) {
					background: #3f51b5 !important;
				}
			}

			.rgba-gradient {
				background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
				background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%));
				background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
			}

			.card {
				background-color: rgba(120, 133, 115, 0.2);
			}

			.md-form label {
				color: #ffffff;
			}

			h6 {
				line-height: 1.7;
			}
		</style>

		<!-- ...................... -->


</body>

</html>