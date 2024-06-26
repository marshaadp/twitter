<html>
<head>
    <title>Twitter</title>
    <meta charset="UTF-8" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>


    <!-- <link rel="shortcut icon" type="image/x-icon" href="?php echo site_url();?>/assets/images/bird.svg"> -->
    <?php 
    /*echo base_url('public/assets/css/style-complete.css');
    echo base_url('public/assets/css/style.css');
    echo base_url('public/assets/css/font-awesome.css');
    echo base_url('public/assets/css/bootstrap.css');
    echo base_url('public/assets/css/bootstrap.min.css');*/
    ?>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/style-complete.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/style.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/font-awesome.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/bootstrap.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/bootstrap.min.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/js/popper.min.js' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/js/bootstrap.min.js' />
    <script>
    // Inline JavaScript to define global URLs
    var baseUrl = "<?= base_url() ?>"; // Base URL for your application
    var siteUrl = "<?= site_url() ?>"; // Site URL for relative routes
    </script>
    <script src="<?= site_url('/assets/js/jquery-3.1.1.min.js');?>"></script>

</head>
<!--Helvetica Neue-->

<body>
    <!--
<div class="front-img">
	<img src="assets/images/background.jpg">
</div>
-->

    <div class="preloader" id="preloader">
        <div id="loader"></div>
    </div>

    <div class="container-fluid">
        <div class="main-box">

            <div class="main-box-wrapper">
                <div class="row">
                    <div class="left col-md-6 col-12">
                        <div class="items-wrapper">
                            <div class="item">
                                <span class="fa fa-search"></span>
                                <h3>Follow your interests.</h3>
                            </div>
                            <div class="item">
                                <span class="fa fa-user"></span>
                                <h3>Hear what your people are talking about.</h3>
                            </div>
                            <div class="item">
                                <span class="fa fa-comment-o"></span>
                                <h3>Join the conversation.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="right col-md-6 col-12">

                        <?php include "login.php";?>

                        <div class="middle">
                            <i class="fa fa-twitter" style="font-size:50px;"></i>
                            <h1>See what's happening in<br />the world right now</h1>
                            <span>Join Twitter today.</span>
                        </div>

                        <?php include "signup-form.php";?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            var preloader = document.getElementsByClassName('preloader')[0];
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 3000);
        };

    </script>

  </body>

</html>
