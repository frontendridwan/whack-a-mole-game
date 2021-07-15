<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $var_title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugin/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugin/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

  <!-- content Page -->
  <?php $this->load->view("auth/$var_content"); ?>
  <!-- end of content Page -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/plugin/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>assets/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/js/adminlte.min.js"></script>

  <script>
    window.setTimeout(function() {
      $(".alert-success").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000);

    window.setTimeout(function() {
      $(".alert-danger").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000);

    window.setTimeout(function() {
      $(".alert-warning").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000);
  </script>
</body>

</html>