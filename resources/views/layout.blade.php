<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="public/img/favicon.png" type="image/png">
        <title> 
            @yield ('title')
        </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="public/css/bootstrap.css">
        <link rel="stylesheet" href="public/vendors/linericon/style.css">
        <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="public/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="public/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="public/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="public/vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="public/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/responsive.css">
    </head>
    <body>
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container box_1620">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="home">
                            <h2 class="text-light">
                                Sajib Adhikary
                            </h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="home">Home</a></li> 
                                <li class="nav-item"><a class="nav-link" href="about-us">About</a></li> 

                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="portfolio">Portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="elements">Elements</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog">Blog Details</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        
        @yield('content')

        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://sajib.adovasoft.com/">Sajib Adhikary</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>

                            <!-- Form Email Starts Here -->
        					<div id="mc_embed_signup">
                                <form 
                                    target="_blank" 
                                    action="" 
                                    method="get" 
                                    class="subscribe_form relative"
                                >
                                	<div class="input-group d-flex flex-row">
                                        <input 
                                            name="email" 
                                            placeholder="Enter email address" 
                                            onfocus="this.placeholder = ''" 
                                            onblur="this.placeholder = 'Email Address '" 
                                            required="" 
                                            type="email"
                                        >
                                        <button type="submit" class="btn sub-btn">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                            <!-- Form Email Ends Here -->
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li>
                                    <a href="https://www.facebook.com/sajib.adhikery.5/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
        						<li>
                                    <a href="https://github.com/Shiftgithub">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li>
        						<li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
        						<li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="public/js/jquery-3.3.1.min.js"></script>
        <script src="public/js/popper.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/stellar.js"></script>
        <script src="public/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="public/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="public/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="public/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="public/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="public/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="public/js/jquery.ajaxchimp.min.js"></script>
        <script src="public/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="public/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="public/js/mail-script.js"></script>
        <script src="public/js/theme.js"></script>

        @yield('script')
    </body>
</html>