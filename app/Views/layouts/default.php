<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Cobita</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php echo base_url('resources/bulma/css/bulma.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/css/own.css');?>">
    
    <!-- JS only -->
    <script src="<?php echo base_url('resources/js/jquery-3.7.0.js')?>"></script>
    <script src="<?php echo base_url('resources/js/popper.min.js')?>"></script>

</head>
<body>
    <?= $this->renderSection('content') ?>
</body>
</html>