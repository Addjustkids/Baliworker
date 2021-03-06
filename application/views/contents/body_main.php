<!-- START HEADER -->
<header id="header">      
    <div id="social_icon" class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
               <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-wordpress"></i></a></li>
                    </ul>
                </div> 
            </div>
         </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <h1><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo"><b>BALI</b>WORKER</h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo site_url('main_controller/register');?>">Daftar</i></a></li> 
                    <li class="active"><a href="#modal_login" data-toggle="modal">Login</a></li>                                     
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- END OF HEADER -->

<!-- START TAMPILAN SEARCH -->
<section id="home-slider">
    <div class="container">
        <div class="row">
            <div class="main-slider">
                <div class="slide-text">
                    <h1>Selamat Datang di <br>Bali Worker!</h1>
                    <p>Temukan banyak jasa dari pekerja asal Bali,
                    <br>Tawarkan jasa yang bisa anda beri kepada orang lain,</p>
                    <br>
                    <div class="input-group">
                        <input id="input_pencarian" type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                        <div class="input-group-btn">
                            <input id="pilihan_pencarian" type="button" class="btn btn-default" value="Cari Jasa">
                            <button id="tmb_pilih_pencarian" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a id="cari_pekerja" href="#">Cari Jasa</a></li>
                                <li><a id="cari_pekerjaan" href="#">Cari Pekerjaan </a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn btn-common">Bagikan Pekerjaan</a>
                    <a href="#" class="btn btn-common">Tawarkan Jasa</a>
                </div>
                <img src="<?php echo base_url('assets/images/home/slider/hill.png'); ?>" class="slider-hill" alt="slider image">
                <img src="<?php echo base_url('assets/images/home/slider/house.png'); ?>" class="slider-house" alt="slider image">
                <img src="<?php echo base_url('assets/images/home/slider/sun.png'); ?>" class="slider-sun" alt="slider image">
                <img src="<?php echo base_url('assets/images/home/slider/birds1.png'); ?>" class="slider-birds1" alt="slider image">
                <img src="<?php echo base_url('assets/images/home/slider/birds2.png'); ?>" class="slider-birds2" alt="slider image">
            </div>
        </div>
    </div>
    <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
<!--END OF TAMPILAN SEARCH -->

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="<?php echo base_url('assets/images/home/icon1.png'); ?>" alt="">
                    </div>
                    <h2>Incredibly Responsive</h2>
                    <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img src="<?php echo base_url('assets/images/home/icon2.png'); ?>" alt="">
                    </div>
                    <h2>Superior Typography</h2>
                    <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                        <img src="<?php echo base_url('assets/images/home/icon3.png'); ?>" alt="">
                    </div>
                    <h2>Swift Page Builder</h2>
                    <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#services-->

<section id="action" class="responsive">
    <div class="vertical-center">
         <div class="container">
            <div class="row">
                <div class="action take-tour">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1 class="title">Triangle Corporate Template</h1>
                        <p>A responsive, retina-ready &amp; wide multipurpose template.</p>
                    </div>
                    <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="tour-button">
                            <a href="#" class="btn btn-common">TAKE THE TOUR</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

<section id="features">
    <div class="container">
        <div class="row">
            <div class="single-features">
                <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="<?php echo base_url('assets/images/home/image1.png'); ?>" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h2>Experienced and Enthusiastic</h2>
                    <P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
                </div>
            </div>
            <div class="single-features">
                <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h2>Built for the Responsive Web</h2>
                    <P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
                </div>
                <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="<?php echo base_url('assets/images/home/image2.png'); ?>" class="img-responsive" alt="">
                </div>
            </div>
            <div class="single-features">
                <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="<?php echo base_url('assets/images/home/image3.png'); ?>" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h2>Experienced and Enthusiastic</h2>
                    <P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
                </div>
            </div>
        </div>
    </div>
</section>
 <!--/#features-->

<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <p><img src="<?php echo base_url('assets/images/home/clients.png'); ?>" class="img-responsive" alt=""></p>
                    <h1 class="title">Happy Clients</h1>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                </div>
                <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="col-xs-3 col-sm-2">
                        <a href="#"><img src="<?php echo base_url('assets/images/home/client1.png'); ?>" class="img-responsive" alt=""></a>
                    </div>
                    <div class="col-xs-3 col-sm-2">
                        <a href="#"><img src="<?php echo base_url('assets/images/home/client2.png'); ?>" class="img-responsive" alt=""></a>
                    </div>
                     <div class="col-xs-3 col-sm-2">
                        <a href="#"><img src="<?php echo base_url('assets/images/home/client3.png'); ?>" class="img-responsive" alt=""></a>
                    </div>
                     <div class="col-xs-3 col-sm-2">
                        <a href="#"><img src="<?php echo base_url('assets/images/home/client4.png'); ?>" class="img-responsive" alt=""></a>
                    </div>
                     <div class="col-xs-3 col-sm-2">
                        <a href="#"><img src="<?php echo base_url('assets/images/home/client5.png'); ?>" class="img-responsive" alt=""></a>
                    </div>
                     <div class="col-xs-3 col-sm-2">
                        <a href="#"><img src="<?php echo base_url('assets/images/home/client6.png'); ?>" class="img-responsive" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!--/#clients-->