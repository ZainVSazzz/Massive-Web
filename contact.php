<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Kontak Kami- Massive</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="index.php">
                                <img class="logo1" src="assets/images/logo/logo.svg" alt="Logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a href="index.php">Home</a></li>
                                    <li class="nav-item"><a>Jenis</a>
                                        <ul class="sub-menu">
                                            <li><a href="hewan.php">Hewan</a></li>
											<li><a href="tumbuhan.php">Tumbuhan</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="artikel.php">Artikel Lain</a>
									<li class="nav-item">
                                        <a href="about-us.php">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item"><a class="active" href="contact.php">Kontak</a></li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                            <div class="button">
                                <a href="contact.php" class="btn">Get it now</a>
                            </div>
                        </nav>
                        <!-- navbar -->

                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </header>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Kontak Kami</h1>
                        <p>Untuk Memberikan Saran, Masukan atau Kerja sama dengan kami.<br>Silahkan bisa hubungi di kontak berikut ini</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Area -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="single-head" id="projects">
                            
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="form-main">
                            <form class="form" method="post" action="assets/mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Your Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Your Subject"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Your Email"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Your Phone"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Area -->

    <!-- Start Google-map Area -->
    <div class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map-container">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas"
                                src="https://www.google.com/maps?q=Cibinong&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://embedgooglemap.net/129/">
                            </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google-map Area -->

    <!-- Start Newsletter Area -->
    <section class="newsletter-area section">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-text wow fadeInLeft" data-wow-delay=".2s">
                        <h6>Sign up for Newsletter</h6>
                        <p class="">Daftar dan mulai gunakan akun gratis untuk melihat semua</p>
                        <form action="#" method="get" class="newsletter-inner">
                            <input name="NAMA"placeholder="Your name" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'"
                                required="" type="nama">
                            
                            <input name="EMAIL" placeholder="Your email address" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                required="" type="email">
                            <div class="button">
                                <button class="btn">Subscribe Now!</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Newsletter Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Middle Top -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="f-about single-footer">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/logo/footer-logo.svg" alt="Logo"></a>
                            </div>
                            <p>Start building your creative website with our awesome template Massive.</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Pages</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>More Links</h3>
                            <ul>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">License</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Support Team</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="left">
                                <p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow"
                                        target="_blank">GrayGrids</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/axios.min.js"></script>
    <script>
        // Mengambil data detail proyek dari REST API
        axios.get(`api.php?endpoint=info`)
            .then(function (response) {
                
                var project = response.data;
                console.log('dari detail.php ====>',response.data);
                var projectsContainer = document.getElementById('projects');
                var contentBodyDiv = document.createElement('div');
                contentBodyDiv.innerHTML = `
                    <div class="contant-inner-title">
			            <h4>Hubungi Kami</h4>
                    </div>
                    <div class="single-info">
                        <i class="lni lni-phone"></i>
                        <ul>
                            <li>${project[0].nohp}</li>
                        </ul>
                    </div>
                    <div class="single-info">
                        <i class="lni lni-envelope"></i>
                        <ul>
                            <li><a href="mailto:${project[0].email}">${project[0].email}</a></li>
                        </ul>
                    </div>
                    <div class="single-info">
                        <i class="lni lni-map"></i>
                        <ul>
                            <li>${project[0].alamat}</li>
                        </ul>
                    </div>
                    <div class="contact-social">
                        <h5>Follow Us on</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="icon-1"><i class="lni lni-facebook-filled"></i></span>
                                    <span class="icon-2"><i class="lni lni-facebook-filled"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-1"><i class="lni lni-twitter-original"></i></span>
                                    <span class="icon-2"><i class="lni lni-twitter-original"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-1"><i class="lni lni-linkedin-original"></i></span>
                                    <span class="icon-2"><i class="lni lni-linkedin-original"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-1"><i class="lni lni-instagram"></i></span>
                                    <span class="icon-2"><i class="lni lni-instagram"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-1"><i class="lni lni-behance-original"></i></span>
                                    <span class="icon-2"><i class="lni lni-behance-original"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                `;
                projectsContainer.appendChild(contentBodyDiv);
            })
            .catch(function (error) {
                console.error(error);
            });
    </script>
</body>

</html>