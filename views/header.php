<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />    
     <link href="<?php echo BACKEND_TEMPLATE; ?>assets/css/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo BACKEND_TEMPLATE; ?>assets/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo BACKEND_TEMPLATE; ?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <link href="<?php echo BACKEND_TEMPLATE; ?>assets/css/custom.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <script src="<?php echo BACKEND_TEMPLATE; ?>assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
</head>
<body class="front-end">

<?php Session::init(); ?>

    
<div id="content">
    
    