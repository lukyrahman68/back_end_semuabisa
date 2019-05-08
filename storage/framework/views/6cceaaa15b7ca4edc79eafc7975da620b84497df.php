<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Photo Video Surabaya">
        <meta name="keywords" content="Photo,Video,Wedding,Prewedding,Dokumentasi,Branding,Wedding murah surabaya,semuabisa">
        <meta name="author" content="Semuabisa">
        <meta http-equiv="Pragma" content="no-cache">

        <link rel="icon" href="<?php echo e(asset('img/fav-icon.png')); ?>" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Semua Bisa Cinema</title>

        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/libs.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/costume.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css')); ?>" / >
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


        <style>
            /* Indicators list style */
.article-slide .carousel-indicators {
    bottom: 0;
    left: 0;
    margin-left: 5px;
    width: 100%;
    height:20%;
}
/* Indicators list style */
.article-slide .carousel-indicators li {
    border: medium none;
    border-radius: 0;
    float: left;
    height: 54px;
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    margin-top: 0;
    width: 100px;
}
/* Indicators images style */
.article-slide .carousel-indicators img {
    border: 2px solid #FFFFFF;
    float: left;
    height: 54px;
    left: 0;
    width: 100px;
}
/* Indicators active image style */
.article-slide .carousel-indicators .active img {
    border: 2px solid #428BCA;
    opacity: 0.7;
}
        </style>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>


        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="pull-left">
                        <a href="#"><i class="fas fa-phone"></i>(+62) 85790741610</a>
                        <a href="#"><i class="fas fa-map-marker"></i>Perum Gunung Anyar Emas Selatan IIA Blok B3 No 3 Surabaya Indonesia</a>
                        <a href="#"><i class="fas fa-clock"></i>24 Hour</a>
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                            <li><a target="_blank" rel="noopener noreferrer" href="http://www.facebook.com/semuabisasby"><i class="fab fa-facebook"></i></a></li>
                            <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/semuabisa.cinema"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCYDz3o8ahK_wDF_sXiLnLWw"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header" style="padding-bottom: 2em;">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo e(route('daboard_home')); ?>"><img src="<?php echo e(asset('img/logo/Logo Putih.png')); ?>" alt="" width="150" height="70" style="object-fit: contain;"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="
                                <?php if($data=='home'): ?>
                                    active
                                <?php endif; ?>
                                "><a href="<?php echo e(route('daboard_home')); ?>">Home</a></li>
                                <li class="
                                <?php if($data=='project'): ?>
                                    active
                                <?php endif; ?>
                                "><a href="<?php echo e(route('pre-wedding')); ?>">Project</a></li>
                                <li class="
                                <?php if($data=='services'): ?>
                                    active
                                <?php endif; ?>
                                "><a href="<?php echo e(route('services')); ?>">Services</a></li>
                                <li class="
                                <?php if($data=='price_list'): ?>
                                    active
                                <?php endif; ?>
                                "><a href="<?php echo e(route('pl_pre-wedding')); ?>">Price List</a></li>
                                <li class="
                                <?php if($data=='about'): ?>
                                    active
                                <?php endif; ?>
                                "><a href="<?php echo e(route('about')); ?>">about us</a></li>
                                <li class="
                                <?php if($data=='contact_us'): ?>
                                    active
                                <?php endif; ?>
                                "><a href="<?php echo e(route('contact_us')); ?>">Contact</a></li>
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <?php echo $__env->yieldContent('content'); ?>

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="row footer_widgets_inner">
                        <div class="col-md-6 col-sm-6">
                            <aside class="f_widget about_widget">
                                <center><img  src="<?php echo e(asset('img/logo/Logo Merah.png')); ?>" alt="" width="150" height="150" style="object-fit: contain;"></center>
                                <p>Cara paling sederhana untuk mengingat kenangan adalah menjadikannya abadi</p>
                                <ul>
                                    <li><a target="_blank" rel="noopener noreferrer" href="http://www.facebook.com/semuabisasby"><i class="fab fa-facebook"></i></a></li>
                                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/semuabisa.cinema"><i class="fab fa-instagram"></i></a></li>
                                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCYDz3o8ahK_wDF_sXiLnLWw"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget address_widget">
                                <div class="f_w_title">
                                    <h3 style="color: #fff !important">Office Address</h3>
                                </div>
                                <div class="address_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Perum Gunung Anyar Emas Selatan IIA Blok B3 No 3 Surabaya Indonesia </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>(+62) 85790741610</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>rendy@semoabisa.com</p>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget give_us_widget">
                                <h5  style="color: #fff !important">Give Us A Call</h5>
                                <h4 style="color: #fff !important">(+62) 85790741610</h4>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copy_right">
                <div class="container">
                    <h4><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h4>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        <script src="<?php echo e(asset('js/libs.js')); ?>"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="<?php echo e(asset('vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')); ?>"></script>
        <?php echo $__env->yieldContent('script'); ?>
    </body>
</html>
