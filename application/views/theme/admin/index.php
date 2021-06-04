<!doctype html>
<html lang="en">

<head>
	<title><?= $judul; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
    <?php $this->load->view('theme/admin/style');;?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
        <?php $this->load->view('theme/admin/navbar');;?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<?php $this->load->view('theme/admin/sidebar');; ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
        <?php $this->load->view($theme_page);; ?>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<?php $this->load->view('theme/admin/footer');;?>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
    <?php $this->load->view('theme/admin/script');; ?>
</body>

</html>
