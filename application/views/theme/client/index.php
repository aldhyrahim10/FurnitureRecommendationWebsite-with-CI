<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    
    <?php $this->load->view('theme/client/style');; ?>

</head>
<body>
    <!-- Navbar -->
    <?php $this->load->view('theme/client/navbar');; ?>

    <!-- Main Content -->
    <?php $this->load->view($theme_page);; ?>

    <!-- Footer -->
    <?php $this->load->view('theme/client/footer');; ?>

    <?php $this->load->view('theme/client/script'); ?>
</body>
</html>