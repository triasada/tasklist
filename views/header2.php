<?php
/*
 * mvc ;
 * header2.php ;
 * Satria Persada <triasada@yahoo.com> ;
 * Nov 4, 2017;
 * 4:51:33 PM;
 * Jakarta International Container Terminal (JICT);
 */
?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $this->title ?></title>
        <!-- BOOTSTRAP STYLES-->
        <link href="<?php echo BACKEND; ?>assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="<?php echo BACKEND; ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- MORRIS CHART STYLES-->
        <link href="<?php echo BACKEND; ?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="<?php echo BACKEND; ?>assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <script src="<?php echo BACKEND; ?>assets/js/jquery-1.10.2.js"></script>

    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><?php echo $this->companyLogo ?></a> 
                </div>
                <div style="color: white;
                     padding: 15px 50px 5px 50px;
                     float: right;
                     font-size: 16px;"><img height="30px"  src="<?php echo BACKEND; ?>assets/img/find_user.png" class="img-circle" /><?php echo $this->nameuser ?> &nbsp; <a href="<?= URL ?>dashboard/dashboard/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
            </nav>   
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <?php foreach ($this->Navbar as $menu) {
                            if (isset($menu['child'])) {
                                ?>
                                <li>
                                    <a id="<?= $menu['page'] ?>" href="#" title="<?= $menu['descript'] ?>"><i class="fa <?= $menu['pclass'] ?> fa-3x"></i><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <?php foreach ($menu['child'] as $menu2) { 
                                            ?>
                                            <li>
                                                <a id="<?= $menu2['page'] ?>" href="<?= URL . $menu2['page'] ?>" title="<?= $menu2['descript'] ?>"><i class="fa <?= $menu['pclass'] ?> fa-2x"></i></a>
                                            </li>
                                          <?php } ?>
                                    </ul>
                                </li>
                                <?php } else{
                                ?>
                                <li>
                                    <a id="<?= $menu['page'] ?>" href="<?= URL . $menu['page'] ?>" title="<?= $menu['descript'] ?>"><i class="fa <?= $menu['pclass'] ?> fa-3x"></i></a>
                                </li>
    <?php }
} ?>

                        <li  >
                            <a   href="chart.html" title="Morris Charts"><i class="fa fa-bar-chart-o fa-3x"></i> </a>
                        </li>	
                        <li  >
                            <a  href="table.html" title="Table Examples"><i class="fa fa-table fa-3x" ></i> </a>
                        </li>



                        <li>
                            <a href="#" title="Dropdown"><i class="fa fa-sitemap fa-3x"></i> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>

                                    </ul>

                                </li>
                            </ul>
                        </li>  
                        <li  >
                            <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                        </li>	
                    </ul>

                </div>

            </nav>
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?= $this->title ?></h2>
                            <h5><?= isset($this->msg) ? $this->msg : ''; ?></h5>
                            <div id="splash" class="alert " hidden>
                                <span class="glyphicon" > </span>
                            </div>
                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <!-- /. NAV SIDE  -->
