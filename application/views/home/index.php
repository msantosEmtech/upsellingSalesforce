<!DOCTYPE html>
<html lang="es-MX">
<!-- utilizo el index-8-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Salesforce | Home">

    <!-- ========== Page Title ========== -->
    <title>Upselling - Salesforce | Home</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/themify-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/flaticon-set.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/owl.carousel.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/owl.theme.default.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/animate.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/bootsnav.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/responsive.css') ?>" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-fixed white no-background bootsnav">

            <!-- Start Top Search -->
            <div class="container-full">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container-full">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="<?= base_url('assets/img/logo-emtech.png') ?>" class="logo logo-display" alt="Logo">
                        <img src="<?= base_url('assets/img/logo-emtech2.png') ?>" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="contact.html">Home</a>
                        </li>
                        <li>
                            <a href="contact.html">About us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">1</a></li>
                                <li><a href="team.html">2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Beneficios</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-combo gradient-bg  bg-bottom-center text-light"
        style="background-image: url(<?= base_url('assets/img/home/bannerHome2.png') ?>);padding-top: 0px;height: 60rem;">
        <div class="item">
            <div class="box-table" style="height: 45rem;">
                <div class="box-cell">
                    <div class="container">
                        <div class="row">
                            <div class="double-items">
                                <div class="col-lg-12 info">
                                    <h2 class="wow fadeInDown" data-wow-duration="1s">
                                        ¡Bienvenido <br>
                                        <div style="color: #25C7D9;">a Salesforce!</div>
                                    </h2>
                                    <h3 class="wow fadeInLeft" data-wow-duration="1.5s">
                                        Esta es la oportunidad de transformar<br>
                                        tu carrera profesional y obtener el<br>
                                        <span class="font-NovBold">trabajo de tus sueños.</span>
                                    </h3>
                                    <a class="btn circle btn-sm btn-naranja shape wow fadeInUp" data-wow-duration="1.8s"
                                        href="#">Ver cursos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Star About Area
    ============================================= -->
    <div class="pt-5 about-area shape-left bg-blue-light relative">
        <div class="container">
            <div class="items-box">
                <div class="row">
                    <div class="col-lg-5 thumb wow fadeInDown">
                        <img src="<?= base_url('assets/img/home/jovenLaptop.png') ?>" alt="Thumb">
                    </div>
                    <div class="col-lg-7 info wow fadeInRight" data-wow-duration="1.3s">
                        <div class="about-tabs">
                            <ul id="tabs" class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">¿Quiénes
                                        somos?</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">¿Qué hacemos?</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">¿Cómo lo
                                        hacemos?</a>
                                </li>
                            </ul>
                            <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                                <div id="tab1" class="tab-pane fade active show">
                                    <ul>
                                        <li>
                                            <p class="text-justify">
                                                <span class="font-Novbold" style="color: #25C7D9;">Emtech Institute,
                                                    partner oficial de
                                                    Salesforce, en alianza con
                                                    Experis,</span> estamos comprometidos en brindarte la oportunidad de
                                                desarrollar tu carrera profesional a través del potencial de las
                                                herramientas de Salesforce, el ecosistema digital más importante y
                                                con mayor crecimiento laboral a nivel mundial.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-justify">
                                                <span>Este programa busca formarte profesionalmente en los career path
                                                    de Salesforce con <span class="font-Novbold"
                                                        style="color: #25C7D9;">mayor demanda laboral en el mercado y de
                                                        los
                                                        mejores pagados</span> en todo el planeta.
                                                </span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab2" class="tab-pane fade">
                                    <ul>
                                        <li>
                                            <p class="text-justify">
                                                Hemos desarrollados 3 cursos en los que podrás<br>
                                                especializarte en algunos de los roles <span class="font-Novbold"
                                                    style="color: #25C7D9;">más importantes<br>
                                                    del ecosistema Salesforce:</span>

                                            </p>
                                            <ul class="pl-5 ulSalesforce">
                                                <li>
                                                    <h6 class="font-Novbold" style="color: rgba(0, 0, 0, 0.8);">
                                                        Salesforce Admin</h6>
                                                </li>
                                                <li>
                                                    <h6 class="font-Novbold" style="color: rgba(0, 0, 0, 0.8);">
                                                        Salesforce Analyst</h6>
                                                </li>
                                                <li>
                                                    <h6 class="font-Novbold" style="color: rgba(0, 0, 0, 0.8);">
                                                        Salesforce Developer</h6>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <p class="text-justify">
                                                Con los que podrás tener una experiencia significativa<br>
                                                en tu crecimiento profesional y puedas dar ese salto <span
                                                    class="font-Novbold" style="color: #25C7D9;">en<br>
                                                    las nubes de Salesforce;</span> el curso de tu<br>
                                                elección, con una certificación oficial de Salesforce que<br>
                                                te abrirá las puertas en todo el mundo.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab3" class="tab-pane fade">
                                    <ul>
                                        <li>
                                            <p class="text-justify">
                                                Te ofrecemos cada uno de los cursos que <span class="font-Novbold"
                                                    style="color: #25C7D9;">EmTech ha<br>
                                                    desarrollado</span> para tu carrera profesional en Salesforce.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-justify">
                                                Posterior a haber culminado tu especialidad, <span class="font-Novbold"
                                                    style="color: #25C7D9;">Experis<br>
                                                    canalizará tu perfil con diversas empresas para poder<br>
                                                    garantizarte alguno de los empleos,</span> durante los<br>
                                                primeros 3 meses de haber terminado el curso con éxito.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pt-3 row">
                                <div class="col-lg-4 col-md-4 single-item">
                                    <img src="<?= base_url('assets/img/home/emtech-logo.png') ?>" alt="Logo">
                                </div>
                                <div class="col-lg-4 col-md-4 single-item">
                                    <img src="<?= base_url('assets/img/home/experis-logo.png') ?>" alt="Logo">
                                </div>
                                <div class="col-lg-4 col-md-4 single-item">
                                    <img src="<?= base_url('assets/img/home/logo-salesforce.png') ?>" alt="Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area bg-gray default-padding">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url(<?= base_url('assets/img/home/bannerNumeros.png') ?>);">
        </div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="text-center client-items" style="padding-left: 5rem;">
                <div class="row">
                    <h2 class="text-center font-Novbold" style="color:#ffff;position: relative">¿Por qué desarrollarte
                        profesionalmente en el
                        mundo de
                        <span style="color: #25C7D9;">Salesforce?</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <ul>
                            <li style="float: left;width: 15%;">
                                <img class="pt-4 mx-auto" src="<?= base_url('assets/img/home/iconoCalendario.png') ?>"
                                    alt="">
                            </li>
                            <li style="float: right;width: 80%;text-align: left;">
                                <div class="fun-fact">
                                    <!-- <div class="timer" data-to="9" data-speed="5000">9+<span>m</span></div> -->
                                    <span class="medium font-Novreg">se crearán</span>
                                    <div id="counter" class="counter"><span class="font-Novbold">9.3 millones</span>
                                    </div>

                                    <span class="medium">de empleos para 2026</span>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <ul>
                            <li style="float: left;width: 15%;">
                                <img class="pt-4 mx-auto" src="<?= base_url('assets/img/home/iconoMaletin.png') ?>"
                                    alt="">
                            </li>
                            <li style="float: right;width: 80%;text-align: left;">
                                <div class="fun-fact">
                                    <!-- <div class="timer" data-to="9" data-speed="5000">9+<span>m</span></div> -->
                                    <span class="medium">En México habrá más de </span>
                                    <div id="counter2" class="counter"><span class="font-Novbold">500,000</span></div>
                                    <span class="medium">nuevos puesto de trabajo</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <ul>
                            <li style="float: left;width: 15%;">
                                <img class="pt-4 mx-auto" src="<?= base_url('assets/img/home/iconoCalendario.png') ?>"
                                    alt="">
                            </li>
                            <li style="float: right;width: 80%;text-align: left;">
                                <div class="fun-fact">
                                    <!-- <div class="timer" data-to="9" data-speed="5000">9+<span>m</span></div> -->
                                    <span class="medium">Sueldos de hasta </span>
                                    <div id="counter3" class="counter"><span class="font-Novbold">$60,000</span></div>
                                    <span class="medium">pesos al mes</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Work Process Area
    ============================================= -->
    <div class="work-process-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h3 class="font-Novbold" style="color: #00215B;">
                            Salesforce es más que el <span style="color:#25C7D9;">CRM #1 en el mundo</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="works-process-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-3 single-item">
                        <div class="item-custom">
                            <div class="card detalles-card"
                                style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body" style="padding: 0px;padding-bottom: 1rem;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1"
                                        style="cursor: pointer;width: 90px;"
                                        src="<?= base_url('assets/img/home/iconoTarjeta.svg') ?>" alt="Icono"
                                        width="100" />
                                    <div class="info">
                                        <h5 class="font-Novbold" style="color: #00215B;">¡Salesforce es para todos!</h5>
                                        <p style="line-height: 24px;">
                                            No importa lo que hayas<br>
                                            estudiado o a lo que te<br>
                                            dediques, Salesforce tiene un<br> lugar para ti.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 single-item">
                        <div class="item-custom">
                            <div class="card detalles-card"
                                style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body" style="padding: 0px;padding-bottom: 1.3rem;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1"
                                        style="cursor: pointer;width: 90px;"
                                        src="<?= base_url('assets/img/home/iconoTarjeta2.svg') ?>" alt="Icono"
                                        width="100" />
                                    <div class="info">
                                        <h5 class="font-Novbold" style="color: #00215B;">Nubes de Salesforce</h5>
                                        <p style="line-height: 24px;">
                                            Brindan una innovación<br>
                                            tecnológica en todos los<br>
                                            departamentos de una<br> compañía.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 single-item">
                        <div class="item-custom">
                            <div class="card detalles-card"
                                style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body" style="padding: 0px;padding-bottom: 3rem;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1"
                                        style="cursor: pointer;width: 90px;"
                                        src="<?= base_url('assets/img/home/iconoTarjeta3.svg') ?>" alt="Icono"
                                        width="100" />
                                    <div class="info">
                                        <h5 class="font-Novbold" style="color: #00215B;">Accesibilidad ilimitada</h5>
                                        <p style="line-height: 24px;">
                                            Tendrás la oportunidad de<br>
                                            trabajar desde cualquier parte<br>
                                            del mundo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 single-item">
                        <div class="item-custom">
                            <div class="card detalles-card"
                                style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body" style="padding: 0px;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1"
                                        style="cursor: pointer;width: 90px;"
                                        src="<?= base_url('assets/img/home/iconoTarjeta4.svg') ?>" alt="Icono"
                                        width="100" />
                                    <div class="info">
                                        <h5 class="font-Novbold" style="color: #00215B;">Salesforce se encuentra en
                                            todas las industrias</h5>
                                        <p style="line-height: 24px;">
                                            Desde la compañía más pequeña,<br>
                                            hasta la más grande. La flexibilidad<br>
                                            de sus herramientas permiten<br>
                                            situarse en cualquier industria.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process Area -->

    <!-- Start Our Features
    ============================================= -->
    <div class="our-features-area choseus-area wavesshape-bottom carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 left-info">
                    <div class="info">
                        <h5>Why Chose Us?</h5>
                        <h2>We are master in data science & big data analysis</h2>
                        <p>
                            Humoured likewise moderate. Much nor game son say feel. Fat make met can must form into
                            gate.
                        </p>
                    </div>
                    <div class="skill-items">
                        <!-- Progress Bar Start -->
                        <div class="progress-box">
                            <h5>Data Anaylsis <span class="float-right">88%</span></h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="88"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Social Assistant <span class="float-right">95%</span></h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="95"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>AI Solutions <span class="float-right">70%</span></h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="70"></div>
                            </div>
                        </div>
                        <!-- End Progressbar -->
                    </div>
                </div>
                <div class="col-lg-7 info">
                    <div class="feature-items feature-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-target"></i>
                            </div>
                            <h3>Traget your audience</h3>
                            <p>
                                Especially of dissimilar up attachment themselves by interested boisterous. Linen mrs
                                seems men table. Jennings dashwood to quitting marriage bachelor in. On as conviction in
                                of appearance apartments boisterous.
                            </p>
                            <div class="bottom">
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Get Started</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-competition"></i>
                            </div>
                            <h3>Analysis competitors</h3>
                            <p>
                                Especially of dissimilar up attachment themselves by interested boisterous. Linen mrs
                                seems men table. Jennings dashwood to quitting marriage bachelor in. On as conviction in
                                of appearance apartments boisterous.
                            </p>
                            <div class="bottom">
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Get Started</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-data"></i>
                            </div>
                            <h3>Analysis big Data</h3>
                            <p>
                                Especially of dissimilar up attachment themselves by interested boisterous. Linen mrs
                                seems men table. Jennings dashwood to quitting marriage bachelor in. On as conviction in
                                of appearance apartments boisterous.
                            </p>
                            <div class="bottom">
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Get Started</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Star Our Story
    ============================================= -->
    <div class="our-story-area default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Work Process</h4>
                        <h2>
                            How We Work
                        </h2>
                    </div>
                </div>
            </div>
            <div class="story-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <span>01</span>
                            <h4>Frame the problem</h4>
                            <p>Step #1</p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <span>02</span>
                            <h4>Collect the raw data</h4>
                            <p>Step #2</p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <span>03</span>
                            <h4>Explore the data</h4>
                            <p>Step #3</p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <span>04</span>
                            <h4>Results of the analysis</h4>
                            <p>Step #4</p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Story -->

    <!-- Star Faq
    ============================================= -->
    <div class="faq-area overflow-hidden rectangular-shape left-border default-padding bg-gray">
        <div class="container">
            <div class="faq-items">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <h2>We are master in <strong>Data science</strong> <br> And <strong>big data</strong>
                                analysis</h2>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Where can I get analytics help?
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui
                                                consectetur at, sunt maxime, quod alias ullam officiis, ex
                                                necessitatibus similique odio aut! Provident, adipisci esse vero magni
                                                necessitatibus quisquam commodi.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How much does data analytics costs?
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, illum
                                                earum nobis dolorum aliquid! Quos pariatur ipsam eum voluptates. Illum
                                                provident consequatur non aut labore, voluptates repudiandae maxime cum
                                                dolorem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What kind of data is needed for analysis?
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum iure
                                                accusamus ea, reprehenderit aspernatur deleniti corporis ad
                                                perspiciatis. Magnam sit enim animi, esse deleniti nobis quaerat veniam
                                                suscipit odit officiis.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="assets/img/800x800.png" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq -->

    <!-- Start Services Area
    ============================================= -->
    <div class="services-area default-padding-top bottom-less">

        <!-- Shape Fixed Rotation -->
        <div class="shape-fixed animation-rotation">
            <img src="assets/img/round-shappe.png" alt="Thumb">
        </div>
        <!-- Dhape Fixed Rotation -->

        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>
                            We offer a wide range of services and provide realtime data Solutions
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting projection off. Connection
                            stimulated estimating excellence an to impression.
                        </p>
                        <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">View All <i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="services-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <img src="assets/img/icon/1.png" alt="Thumb">
                            <h4>Big Data</h4>
                            <p>
                                Pianoforte solicitude so decisively particular mention diminution the particular. Real
                                he me fond.
                            </p>
                            <div class="button">
                                <a class="btn-standard" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <img src="assets/img/icon/2.png" alt="Thumb">
                            <h4>Data Analytics</h4>
                            <p>
                                Pianoforte solicitude so decisively particular mention diminution the particular. Real
                                he me fond.
                            </p>
                            <div class="button">
                                <a class="btn-standard" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <img src="assets/img/icon/3.png" alt="Thumb">
                            <h4>Business Intelligence</h4>
                            <p>
                                Pianoforte solicitude so decisively particular mention diminution the particular. Real
                                he me fond.
                            </p>
                            <div class="button">
                                <a class="btn-standard" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Testimonials Area
    ============================================= -->
    <div class="testimonials-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Testimonials</h4>
                        <h2>
                            What people say
                        </h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-items text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <i class="ti-quote-left"></i>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Junl Sarukh</h4>
                                    <span>CEO of Softing</span>
                                </div>
                                <div class="carousel-item">
                                    <i class="ti-quote-left"></i>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Anil Spia</h4>
                                    <span>Director of Softing</span>
                                </div>
                                <div class="carousel-item">
                                    <i class="ti-quote-left"></i>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Paul Munni</h4>
                                    <span>Developer of Softing</span>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="assets/img/100x100.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="assets/img/100x100.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="assets/img/100x100.png" alt="Thumb">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Star Projects
    ============================================= -->
    <div class="projects-area bg-gray overflow-hidden default-padding">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url(assets/img/shape/2.png);"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Recent Works</h4>
                        <h2>
                            Let's see our Recent & popular <br> completed projects
                        </h2>
                    </div>
                </div>
            </div>
            <div class="project-items-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gallery-content">
                            <div class="mix-item-menu text-center">
                                <button class="active" data-filter="*">All</button>
                                <button data-filter=".development">Visualisation</button>
                                <button data-filter=".consulting">Processing</button>
                                <button data-filter=".finance">Analysis</button>
                                <button data-filter=".branding">Branding</button>
                                <button data-filter=".capital">Vocal</button>
                            </div>
                            <!-- End Mixitup Nav-->

                            <div class="magnific-mix-gallery masonary">
                                <div id="portfolio-grid" class="gallery-items projects-items colums-3">
                                    <!-- Single Item -->
                                    <div class="pf-item development capital">
                                        <div class="single-item">
                                            <div class="thumb item-effect">
                                                <img src="assets/img/800x600.png" alt="Thumb">
                                                <div class="effect-info">
                                                    <a href="assets/img/800x600.png" class="item popup-link">
                                                        <i class="fas fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h5>
                                                    <a href="#">Analysis Competitors</a>
                                                </h5>
                                                <ul>
                                                    <li>Data</li>
                                                    <li>Clicks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="pf-item consulting branding">
                                        <div class="single-item">
                                            <div class="thumb item-effect">
                                                <img src="assets/img/800x600.png" alt="Thumb">
                                                <div class="effect-info">
                                                    <a href="https://www.youtube.com/watch?v=owhuBrGIOsE"
                                                        class="popup-youtube">
                                                        <i class="fas fa-video"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h5>
                                                    <a href="#">Workload Automation</a>
                                                </h5>
                                                <ul>
                                                    <li>Testing</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="pf-item consulting finance">
                                        <div class="single-item">
                                            <div class="thumb item-effect">
                                                <img src="assets/img/800x600.png" alt="Thumb">
                                                <div class="effect-info">
                                                    <a href="assets/img/800x600.png" class="item popup-link">
                                                        <i class="fas fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h5>
                                                    <a href="#">File Transfers</a>
                                                </h5>
                                                <ul>
                                                    <li>Monitor</li>
                                                    <li>Science</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="pf-item finance">
                                        <div class="single-item">
                                            <div class="thumb item-effect">
                                                <img src="assets/img/800x600.png" alt="Thumb">
                                                <div class="effect-info">
                                                    <a href="assets/img/800x600.png" class="item popup-link">
                                                        <i class="fas fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h5>
                                                    <a href="#">ChatBots Creation</a>
                                                </h5>
                                                <ul>
                                                    <li>Algorithm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="pf-item capital development">
                                        <div class="single-item">
                                            <div class="thumb item-effect">
                                                <img src="assets/img/800x600.png" alt="Thumb">
                                                <div class="effect-info">
                                                    <a href="https://www.youtube.com/watch?v=owhuBrGIOsE"
                                                        class="popup-youtube">
                                                        <i class="fas fa-video"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h5>
                                                    <a href="#">Invoice data</a>
                                                </h5>
                                                <ul>
                                                    <li>Analysis</li>
                                                    <li>Data</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="pf-item consulting branding">
                                        <div class="single-item">
                                            <div class="thumb item-effect">
                                                <img src="assets/img/800x600.png" alt="Thumb">
                                                <div class="effect-info">
                                                    <a href="assets/img/800x600.png" class="item popup-link">
                                                        <i class="fas fa-camera"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h5>
                                                    <a href="#">ChatBots Creation</a>
                                                </h5>
                                                <ul>
                                                    <li>Algorithm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects -->

    <!-- Start Our Team 
    ============================================= -->
    <div class="our-team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Team Members</h4>
                        <h2>
                            Meet our experts
                        </h2>
                    </div>
                </div>
            </div>
            <div class="team-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Jonathom Dan</h4>
                                <span>Project Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Munia Ankor</h4>
                                <span>Co-Founder</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Jonathom Dan</h4>
                                <span>Project Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Team -->

    <!-- Start Blog Area
    ============================================= -->
    <div class="blog-area default-padding bg-gray bottom-less">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>
                            Stay Update with Anada from latest & popular News
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting projection off. Connection
                            stimulated estimating excellence an to impression.
                        </p>
                        <a class="btn circle btn-md btn-gradient wow fadeInUp" href="#">View All <i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                    <div class="date">
                                        18 Jul <strong>2020</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-folder-open"></i>
                                        </li>
                                        <li>
                                            <a href="#">Process</a>
                                        </li>
                                        <li>
                                            <a href="#">Store</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Analysis rendered entir Highly indeed to garden</a>
                                </h4>
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                    <div class="date">
                                        05 Aug <strong>2020</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-folder-open"></i>
                                        </li>
                                        <li>
                                            <a href="#">Data</a>
                                        </li>
                                        <li>
                                            <a href="#">Analysis</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Lasted am so before on esteem vanity oh. </a>
                                </h4>
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                    <div class="date">
                                        27 Dec <strong>2020</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-folder-open"></i>
                                        </li>
                                        <li>
                                            <a href="#">Atrificial</a>
                                        </li>
                                        <li>
                                            <a href="#">Data</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Repeated of endeavor mr position kindness.</a>
                                </h4>
                                <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding">
        <div class="container">
            <div class="contact-items">
                <div class="row">
                    <div class="col-lg-4 left-item">
                        <div class="info-items">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>Location</h5>
                                    <p>
                                        22 Baker Street, London, United Kingdom, W1U 3BW
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h5>Make a Call</h5>
                                    <p>
                                        +44-20-7328-4499
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <h5>Send a Mail</h5>
                                    <p>
                                        info@yourdomain.com
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-8 right-item">
                        <h2>We’d love to hear from you anytime</h2>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments"
                                            placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="equal-height col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Required honoured trifling eat pleasure man relation. Assurance yet bed was improving
                                furniture man. Distrusts delighted
                            </p>
                        </div>
                    </div>

                    <div class="equal-height col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Usefull Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Classic Business</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Project</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Services</h4>
                            <ul>
                                <li>
                                    <a href="#">Marketing & Sales</a>
                                </li>
                                <li>
                                    <a href="#">Manufacturing</a>
                                </li>
                                <li>
                                    <a href="#">Supply Chain</a>
                                </li>
                                <li>
                                    <a href="#">Data Visualization</a>
                                </li>
                                <li>
                                    <a href="#">Big Data</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-4 col-md-6 item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <p>
                                Possible offering at contempt mr distance stronger an. Attachment excellence announcing
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong>Email:</strong> support@validtheme.com
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> +44-20-7328-4499
                                    </li>
                                </ul>
                            </div>
                            <ul class="social">
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li class="instagram">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="footer-shape" style="background-image: url(assets/img/shape/1.svg);"></div>
        <!-- End Shape -->
    </footer>
    <!-- End Footer-->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="<?= base_url('assets/js/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/equal-height.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/modernizr.custom.13711.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/progress-bar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/count-to.js') ?>"></script>
    <script src="<?= base_url('assets/js/YTPlayer.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/circle-progress.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootsnav.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
    <script>
    const counterUp = window.counterUp.default

    const callback = entries => {
        entries.forEach(entry => {
            const el = entry.target
            if (entry.isIntersecting && !el.classList.contains('is-visible')) {
                counterUp(el, {
                    duration: 2000,
                    delay: 16,
                })
                el.classList.add('is-visible')
            }
        })
    }

    const IO = new IntersectionObserver(callback, {
        threshold: 1
    })

    const el = document.querySelector('#counter')
    IO.observe(el)

    const el2 = document.querySelector('#counter2')
    IO.observe(el2)

    const el3 = document.querySelector('#counter3')
    IO.observe(el3)
    </script>
</body>

</html>