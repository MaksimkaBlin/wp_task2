<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
    <!-- Title -->
    <title>Habitat - A Professional Bootstrap Template</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>

<body>
<div id="body-bg">
    <!-- Phone/Email -->
    <div id="pre-header" class="background-gray-lighter">
        <div class="container no-padding">
            <div class="row hidden-xs">
                <div class="col-sm-6 padding-vert-5">
                    <strong>Phone:</strong>&nbsp;1-800-123-4567
                </div>
                <div class="col-sm-6 text-right padding-vert-5">
                    <strong>Email:</strong>&nbsp;info@joomla51.com
                </div>
            </div>
        </div>
    </div>
    <!-- End Phone/Email -->
    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html" title="">
                        <img src="assets/img/logo.png" alt="Logo" />
                    </a>
                </div>
                <!-- End Logo -->
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Top Menu -->
    <div id="hornav" class="bottom-border-shadow">
        <div class="container no-padding border-bottom">
            <div class="row">
                <div class="col-md-8 no-padding">
                    <div class="visible-lg">
                        <ul id="hornavmenu" class="nav navbar-nav">
                            <li>
                                <a href="index.php" class="fa-home active">Home</a>
                            </li>
                            <li>
                                <span class="fa-font ">Сategories</span>
                                <ul>

                               <?php
                                $categories = get_terms('category', 'orderby=name&hide_empty=0');


                                if($categories){

                                    foreach ($categories as $cat){?>
                                    <li>
                                        <a href="<?php echo get_category_link( $cat->term_id );?>"><?php echo "<option value='{$cat->term_id}'>{$cat->name}</option>";?></a>
                                    </li>
                                    <?php

                                    }

                                }else{?>
                                   <li>
                                       Рубрик не найдено.
                                    </li>
                               <?php }
                                ?>



                                </ul>
                            </li>
                            <li>
                                <a href="http://task2.com/?page_id=85" class="fa-comment ">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 no-padding">
                    <ul class="social-icons pull-right">
                        <li class="social-rss">
                            <a href="#" target="_blank" title="RSS"></a>
                        </li>
                        <li class="social-twitter">
                            <a href="#" target="_blank" title="Twitter"></a>
                        </li>
                        <li class="social-facebook">
                            <a href="#" target="_blank" title="Facebook"></a>
                        </li>
                        <li class="social-googleplus">
                            <a href="#" target="_blank" title="Google+"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Menu -->
    <!-- === END HEADER === -->