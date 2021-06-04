<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Finder - Login Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/vendor/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/vendor/linearicons/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/vendor/chartist/css/chartist-custom.css') ;?>">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/main.css');?>">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/demo.css')?>">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/backend/img/apple-icon.png');?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/backend/img/favicon.png');?>">

</head>

<body>
	<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center">
                                <h1 class="heading">FINDER</h1>
                                <p>
                                    Silahakan login untuk masuk
                                </p>
                            </div>
                        </div>
                        <?= $this->session->flashdata('message');?>
                        <form class="form-auth-small" action="<?= base_url('admin');?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email')?>">
                                <?= form_error('email', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= set_value('password')?>">
                                <?= form_error('password', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h2 class="text-center">
                            Cari dan Dapatkan Furniture
                            <br>
                            Idaman dan Impian Kamu Disini
                        </h2>
                        <p class="text-center">by Kelompok 7</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
	<!-- END WRAPPER -->
</body>

</html>
