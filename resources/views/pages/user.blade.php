<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Skyline Group Dealership</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style_user.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="">
                    <h2>Night<em>Runners</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="cars.html">List</a></li>

                        <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/libertywalk_nagoya/">About Us</a></li>

                        <li class="nav-item"><a class="nav-link" href="https://page.line.me/prs2558u?openQrModal=true">Contact</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">More</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="profile">Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Find your car today!</h4>
                    <h2>There's so many exotic car here !</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>We have new and used cars here</h4>
                    <h2>You can pick what you dreamin of!</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>We have safe transaction</h4>
                    <h2>Dont worry, we already verified !</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Featured Cars</h2>
                        <a href="cars.html">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <a href="huracanGT"><img
                                src="https://libertywalk.co.jp/wp-content/uploads/2023/07/LB-Silhouette-WORKS-HURACAN-GT00003-1024x683.jpg"
                                alt=""></a>
                        <div class="down-content">
                            <a href="car-details.html">
                                <h4>LB-Silhouette WORKS HURACAN GT</h4>
                            </a>

                            <h6><small><del> 4000 万円</del></small> 3220 万円</h6>

                            <p>620 HP &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2016(H28) &nbsp;/&nbsp; Used vehicle</p>

                            <small>
                                <strong title="Author"><i class="fa fa-dashboard"></i> 12,000km</strong>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Author"><i class="fa fa-cube"></i>
                                    5200cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Views"><i class="fa fa-cog"></i> 7AT</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <a href="huracanv1"><img
                                src="https://libertywalk.co.jp/wp-content/uploads/2023/05/LB-WORKS-Lamborghini-Huracan-ver.1-LP610-400002-1024x683.jpg"
                                alt=""></a>
                        <div class="down-content">
                            <a href="car-details.html">
                                <h4>LB-WORKS Lamborghini Huracán ver.1</h4>
                            </a>

                            <h6><small><del> 3150万円</del></small> 2850万円</h6>

                            <p>648 HP &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2016(H28) &nbsp;/&nbsp; Used vehicle</p>

                            <small>
                                <strong title="Author"><i class="fa fa-dashboard"></i> 26082km</strong>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Author"><i class="fa fa-cube"></i>
                                    5200cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Views"><i class="fa fa-cog"></i> 7AT</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <a href="r35"><img
                                src="https://libertywalk.co.jp/wp-content/uploads/2023/06/LB-Silhouette-WORKS-GT-NISSAN-R35-GT-R_27-1024x683.jpg"
                                alt=""></a>
                        <div class="down-content">
                            <a href="car-details.html">
                                <h4>LB-Silhouette WORKS GT NISSAN R35 GT-R</h4>
                            </a>

                            <h6><small><del> 1680万円</del></small> 1380万円</h6>

                            <p>580 HP &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2007(H19) &nbsp;/&nbsp; Used vehicle</p>

                            <small>
                                <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Author"><i class="fa fa-cube"></i>
                                    3800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <a href="gemera"><img
                                src="https://mainwebstorage.blob.core.windows.net/mediacontainers/styles/1920x1400/azure/2023-07/Koenigsegg%20Gemera%20in%20front%20of%20the%20Gripen%20Atelier%20copy.jpg?h=009d19b8&itok=7aI1vjIU"
                                alt=""></a>
                        <div class="down-content">
                            <a href="car-details.html">
                                <h4>Koenigsegg Gemera</h4>
                            </a>

                            <h6><small><del> $1.9 million</del></small> $1.7 million</h6>

                            <p>2300 hp &nbsp;/&nbsp; Hybrid &nbsp;/&nbsp; 2022 &nbsp;/&nbsp; Newvehicle</p>

                            <small>
                                <strong title="Author"><i class="fa fa-dashboard"></i> 0km</strong>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Author"><i class="fa fa-cube"></i>
                                    2000cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <a href="911GT"><img
                                src="https://files.porsche.com/filestore/image/multimedia/none/countryselector-992-gt3-rs/normal/3604d4e5-132b-11ed-80f5-005056bbdc38;s3/porsche-normal.jpg"
                                alt=""></a>
                        <div class="down-content">
                            <a href="car-details.html">
                                <h4>Porche 911 GTRS</h4>
                            </a>

                            <h6><small><del> $600,280</del></small> $578,880</h6>

                            <p>518 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2021 &nbsp;/&nbsp; New vehicle</p>

                            <small>
                                <strong title="Author"><i class="fa fa-dashboard"></i> 0km</strong>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Author"><i class="fa fa-cube"></i>
                                    3996cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <a href="R8"><img
                                src="https://hips.hearstapps.com/hmg-prod/images/2023-audi-r8-gt-front-three-quarters-motion-3-1664827965.jpg?crop=0.684xw:0.577xh;0.0321xw,0.281xh&resize=2048:*"
                                alt=""></a>
                        <div class="down-content">
                            <a href="car-details.html">
                                <h4>Audi R8</h4>
                            </a>

                            <h6><small><del> $170,000</del></small> $161,395</h6>

                            <p>620 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2023 &nbsp;/&nbsp; New vehicle</p>

                            <small>
                                <strong title="Author"><i class="fa fa-dashboard"></i> 0km</strong>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Author"><i class="fa fa-cube"></i>
                                    5204cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <p>Welcome to NightRunners, where the pursuit of automotive excellence meets unparalleled luxury
                            and performance. As passionate enthusiasts of high-performance vehicles, we've curated an
                            exclusive collection of the world's most coveted hypercars, elevating the driving experience
                            to new heights.</p>
                        <p>At NightRunners, we pride ourselves on our unwavering commitment to delivering exceptional
                            service, expertise, and a seamless buying experience. Our team comprises dedicated
                            professionals who share a profound love for automotive craftsmanship and innovation. We're
                            here not just to sell hypercars, but to fulfill dreams and ignite the thrill of owning
                            automotive masterpieces.</p>
                        <p>What sets us apart is our discerning selection process. Each hypercar in our inventory
                            undergoes rigorous scrutiny to ensure it meets our stringent standards of performance,
                            design, and engineering excellence. We collaborate with renowned manufacturers and
                            collectors worldwide, enabling us to offer an unparalleled range of exclusive,
                            limited-edition hypercars.</p>
                        <p>Beyond our exquisite collection, we strive to build lasting relationships with our clientele.
                            Whether you're a seasoned collector, an automotive aficionado, or someone seeking the thrill
                            of owning a hypercar for the first time, our team is dedicated to providing personalized
                            guidance, expertise, and support throughout your ownership journey.</p>
                        <p>Located in Indonesia, our showroom is a haven for automotive enthusiasts, designed to immerse
                            you in the world of hypercars. Step into our space and experience firsthand the beauty,
                            power, and sophistication of these automotive marvels.</p>
                        <p>At NightRunners, we don't just sell hypercars; we cultivate an environment where enthusiasts
                            gather to celebrate their shared passion for automotive excellence. Join us on this
                            exhilarating journey as we redefine the boundaries of automotive luxury and performance.</p>
                        <p>Thank you for considering NightRunners. We invite you to explore our collection, connect with
                            our team, and discover the hypercar of your dreams.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/about-1-570x350.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services"
        style="background-image: url(https://images.unsplash.com/photo-1578637387939-43c525550085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>New Incoming Cars</h2>

                        {{-- <a href="blog.html">read more <i class="fa fa-angle-right"></i></a> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a class="services-item-image"><img
                                src="https://www.pagani.com/app/uploads/2021/03/RENDER03-1-1980x1400.jpg"
                                class="img-fluid" alt=""></a>
                        <div class="down-content">
                            <h4>Pagani Huayra R</h4>
                            <p style="margin: 0;"> Power output of 740 PS (544 kW; 730 hp) at 5,800 rpm and 1,000 N⋅m
                                (738 lbf⋅ft) of torque at 2,250-4,500 rpm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a class="services-item-image"><img
                                src="https://kabarin.co/wp-content/uploads/2016/07/Koenigsegg-One-1-b.png"
                                class="img-fluid" alt=""></a>
                        <div class="down-content">
                            <h4> Koenigsegg One:1 </h4>
                            <p style="margin: 0;"> 5.0-liter twin-turbocharged V8 engine which produces 1,360 hp and
                                1,371 Nm (1,011 lb-ft) of torque at 6000 rpm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a class="services-item-image"><img
                                src="https://s3.ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2023/02/03155702/2022-Bugatti-Chiron-Profilee-1-1024x576-1.jpg"
                                class="img-fluid" alt=""></a>
                        <div class="down-content">
                            <h4>Bugatti Chiron</h4>
                            <p style="margin: 0;"> Peak power output of 1,103 kW (1,479 hp; 1,500 PS) at 6,700 rpm and
                                1,600 N⋅m (1,180 lb⋅ft) of torque starting from 2,000 to 6,000 rpm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Happy Clients</h2>

                        <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel text-center">

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>Agos Kratos</h4>
                                <p class="n-m"><em>"Mantab co, tapi dk tebeli"</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>Ardi furry</h4>
                                <p class="n-m"><em>"Mahal nian woyyy"</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>Wawan Infut</h4>
                                <p class="n-m"><em>"mahal nian co, mahip be belinyo"</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>Jann Mardenborough</h4>
                                <p class="n-m"><em>"The best dealer when u need an hypercar"</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>Max Verstappen</h4>
                                <p class="n-m"><em>"All hypercar you need on here"</em></p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="down-content">
                                <h4>keiichi tsuchiya</h4>
                                <p class="n-m"><em>"必要なものはすべてここにある、ドリフトカーも"</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright © 2023 NightRunners</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>

</html>
