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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
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
                    <a class="navbar-brand" href="<?= base_url('Home') ?>">
                        <img src="<?= base_url('assets/img/logo-emtech.png') ?>" class="logo logo-display" alt="Logo" style="width: 250px;">
                        <img src="<?= base_url('assets/img/logo-emtech2.png') ?>" class="logo logo-scrolled" alt="Logo" style="width: 180px;">
                    </a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="<?= base_url('Home') ?>">Inicio</a>
                        </li>
                        <li>
                            <a href="#aboutUs">About us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('SalesforceAdministrator') ?>">Salesforce admin</a></li>
                                <li><a href="<?= base_url('SalesforceAdministrator') ?>">Salesforce Analyst</a></li>
                                <li><a href="<?= base_url('SalesforceAdministrator') ?>">Salesforce Developer</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#beneficios">Beneficios</a>
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
    <div class="banner-area text-combo gradient-bg  bg-bottom-center text-light" style="background-image: url(<?= base_url('assets/img/home/bannerHome2.png') ?>);padding-top: 0px;height: 60rem;">
        <div class="item">
            <div class="box-table" style="height: 45rem;">
                <div class="box-cell">
                    <div class="container">
                        <div class="row">
                            <div class="double-items">
                                <div class="col-lg-12 info">
                                    <h2 class="wow fadeInDown font-Novbold" data-wow-duration="1s">
                                        ¡Bienvenido al<br>
                                        <div style="color: #25C7D9;">universo Salesforce!</div>
                                    </h2>
                                    <h3 class="wow fadeInLeft" data-wow-duration="1.5s">
                                        Esta es la oportunidad de transformar<br>
                                        tu carrera profesional y obtener el<br>
                                        <span class="font-Novbold">trabajo de tus sueños.</span>
                                    </h3>
                                    <a class="btn circle btn-sm btn-naranja shape wow fadeInUp" data-wow-duration="1.8s" href="#">Ver cursos</a>
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
    <div id="aboutUs" class="pt-5 about-area shape-left bg-blue-light relative" style="padding-bottom: 2rem;">
        <div class="container">
            <div class="items-box">
                <div class="row">
                    <div class="col-lg-6 thumb wow fadeInDown">
                        <img src="<?= base_url('assets/img/home/jovenLaptop.png') ?>" alt="Thumb">
                    </div>
                    <div class="col-lg-6 info wow fadeInRight" data-wow-duration="1.3s">
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
                                            <p style="font-family: 'proxima-nova';">
                                                En <span class="font-Novbold" style="color: #25C7D9;">EmTech Institute</span>
                                                estamos comprometidos con el<br>
                                                potencial desarrollo de tus habilidades y competencias<br>
                                                en las nuevas tecnologías emergentes.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span class="font-Novbold" style="color: #25C7D9;">Somos partners certificados de Salesforce,</span> el ecosistema<br>
                                                digital más importante del mundo, es por eso, que hoy<br>
                                                hemos creado una alianza clave con <span class="font-Novbold" style="color: #25C7D9;">Experis,</span> para<br>
                                                brindarte la oportunidad de obtener las oportunidades<br>
                                                de empleo mejores pagadas en el mundo, al convertirte<br>
                                                en un experto en Salesforce.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab2" class="tab-pane fade">
                                    <ul>
                                        <li>
                                            <p>
                                                Logramos que <span class="font-Novbold" style="color: #25C7D9;">
                                                    aceleres exponencialmente tu<br>
                                                    crecimiento profesional y personal,
                                                </span> al incursionar en el<br>
                                                <span class="font-Novbold" style="color: #25C7D9;">CRM # 1 en el mundo,</span> con el que tendrás una<br>
                                                experiencia significativa para descubrir el potencial de<br>
                                                cada una de sus herramientas.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Nuestro programa, busca formarte profesionalmente<br>
                                                en el ecosistema <span class="font-Novbold" style="color: #25C7D9;">Salesforce,</span> con el objetivo de enfocar<br>
                                                tus habilidades digitales para certificarte en los career<br>
                                                paths, con mayor demanda en el mercado.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab3" class="tab-pane fade">
                                    <ul>
                                        <li>
                                            <p>
                                                Hemos desarrollado <span class="font-Novbold" style="color: #25C7D9;">3 cursos en los que podrás<br>
                                                    especializarte</span> en algunos de los career paths más<br>
                                                importantes del ecosistema Salesforce:
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
                                            <p>
                                                Luego de obtener tu certificación, Experis canalizará<br>
                                                tu perfil con diferentes empresas, y te garantizamos<br>
                                                obtener al menos <span class="font-Novbold" style="color: #25C7D9;">1 oferta laboral durante los<br> primeros 3 meses.</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pt-3 row text-center">
                                <div class="col-lg-4 col-md-4 single-item">
                                    <img src="<?= base_url('assets/img/home/emtech-logo.png') ?>" alt="Logo">
                                </div>
                                <div class="col-lg-4 col-md-4 single-item">
                                    <img src="<?= base_url('assets/img/home/experis-logo.png') ?>" alt="Logo">
                                </div>
                                <div class="col-lg-4 col-md-4 single-item">
                                    <img src="<?= base_url('assets/img/home/logo-salesforce.png') ?>" alt="Logo" style="width: 50%;">
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
        <div class="fixed-bg" style="background-image: url(<?= base_url('assets/img/home/bannerNumeros.png') ?>);background-repeat: no-repeat;background-size: cover;">
        </div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="text-center client-items divDesarrolloProfesional" style="padding-left: 5rem;">
                <div class="row">
                    <h2 class="text-center font-Novbold" style="color:#ffff;position: relative">¿Por qué desarrollarte
                        profesionalmente en el
                        mundo de
                        <span style="color: #25C7D9;">Salesforce?</span>
                    </h2>
                </div>
                <div class="row rowIconosDesarrolloProfesional">
                    <div class="col-lg-4 col-md-6 item">
                        <ul>
                            <li style="float: left;width: 15%;">
                                <img class="pt-4 mx-auto" src="<?= base_url('assets/img/home/iconoCalendario.png') ?>" alt="">
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
                                <img class="pt-4 mx-auto" src="<?= base_url('assets/img/home/iconoMaletin.png') ?>" alt="">
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
                                <img class="pt-4 mx-auto" src="<?= base_url('assets/img/home/iconoCalendario.png') ?>" alt="">
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
                        <h2 class="font-Novbold" style="color: #00215B;">
                            Salesforce es más que el <span style="color:#25C7D9;">CRM #1 en el mundo</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="works-process-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-3 single-item">
                        <div class="item-custom">
                            <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body" style="padding: 0px;padding-bottom: 1rem;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1" style="cursor: pointer;width: 90px;" src="<?= base_url('assets/img/home/iconoTarjeta.svg') ?>" alt="Icono" width="100" />
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
                            <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body" style="padding: 0px;padding-bottom: 1.3rem;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1" style="cursor: pointer;width: 90px;" src="<?= base_url('assets/img/home/iconoTarjeta2.svg') ?>" alt="Icono" width="100" />
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
                            <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body" style="padding: 0px;padding-bottom: 3rem;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1" style="cursor: pointer;width: 90px;" src="<?= base_url('assets/img/home/iconoTarjeta3.svg') ?>" alt="Icono" width="100" />
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
                            <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body" style="padding: 0px;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1" style="cursor: pointer;width: 90px;" src="<?= base_url('assets/img/home/iconoTarjeta4.svg') ?>" alt="Icono" width="100" />
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
    <!-- Start Our About
    ============================================= -->
    <div class="about-area bg-blue-light overflow-hidden rectangular-shape default-padding">
        <div class="container">
            <div class="about-items choseus-items right-thumb">
                <div class="row align-center">
                    <div class="col-lg-12">
                        <div class="site-heading text-center">
                            <h3 style="color: #00215B;">
                                <span class="font-Novbold"><mark style="background-color: #25C7D9;">Salesforce for Success</mark></span> fue el primer paso que diste
                                para iniciar tu<br>
                                carrera profesional en <span class="font-Novbold">Salesforce,</span> ahora es momento de
                                continuar<br>
                                con tu especialización en el ecosistema.
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row container rowVideo">
                    <div class="col-lg-7">
                        <div class="thumb wow fadeInUp" data-wow-delay="0.5s">
                            <video class="video-trailer" controls poster="<?= base_url('assets/img/home/portadaVideo.png') ?>" style="cursor: pointer;">
                                <source src="<?= base_url('assets/video/PEDSTrailerV2.mp4') ?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col-lg-5 columnaSliderVertical">
                        <div class="info wow fadeInLeft">
                            <h2 class="font-Novbold text-center" style="color: #00215B;">¡No te quedes atrás!</h2>
                            <h5 class="font-Novbold text-center" style="color: #00215B;">
                                Ahora ya cuentas con estos conocimientos
                            </h5>
                        </div>
                        <div class="slider-wrap">
                            <div id="card-slider" class="slider">
                                <div class="slider-item">
                                    <div class="animation-card_image">
                                        <img class="imgAva" src="<?= base_url('assets/img/home/iconoSliderVertical.png') ?>" alt="">
                                    </div>
                                    <div class="animation-card_content">
                                        <p class="animation-card_content_description p-2">Oportunidad para impulsar su carrera profesional.</p>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="animation-card_image">
                                        <img class="imgAva" src="<?= base_url('assets/img/home/iconoSliderVertical.png') ?>" alt="">
                                    </div>
                                    <div class="animation-card_content">
                                        <p class="animation-card_content_description p-2">Identificación de algunas de las herramientas de Salesforce.</p>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="animation-card_image">
                                        <img class="imgAva" src="<?= base_url('assets/img/home/iconoSliderVertical.png') ?>" alt="">
                                    </div>
                                    <div class="animation-card_content">
                                        <p class="animation-card_content_description p-2">Exploración de las nubes de Salesforce y sus diferentes usos.</p>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="animation-card_image">
                                        <img class="imgAva" src="<?= base_url('assets/img/home/iconoSliderVertical.png') ?>" alt="">
                                    </div>
                                    <div class="animation-card_content">
                                        <p class="animation-card_content_description p-2">Conocimiento de la visión 360 y la cualidad Omnichannel.</p>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="animation-card_image">
                                        <img class="imgAva" src="<?= base_url('assets/img/home/iconoSliderVertical.png') ?>" alt="">
                                    </div>
                                    <div class="animation-card_content">
                                        <p class="animation-card_content_description p-2">Valor que aporta Salesforce a las industrias.</p>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="animation-card_image">
                                        <img class="imgAva" src="<?= base_url('assets/img/home/iconoSliderVertical.png') ?>" alt="">
                                    </div>
                                    <div class="animation-card_content">
                                        <p class="animation-card_content_description p-2">Capacidad de Salesforce para ofrecer soluciones tecnológicas a problemas de negocio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->
    <!-- Start Tabs
    ============================================= -->
    <div class="tabs-area default-padding-bottom text-center bg-blue-light">
        <div class="container">
            <div class="pb-5 row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="heading">
                        <h5 class="font-Novbold">Conoce los diferentes tipos de <span style="font-style: italic;">career
                                path</span> que
                            <span style="color: #25C7D9;">Salesforce tiene
                                para ti.</span><br>
                            Estamos seguros de que hay una ruta específica para tus habilidades y gustos.
                        </h5>
                        <br>
                        <h2 class="font-Novbold" style="color: #00215B;">
                            Cursos de especialización
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-tabs">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#tabSA" data-toggle="tab" class="active nav-link">
                                    Salesforce Administrator
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tabSBA" data-toggle="tab" class="nav-link">
                                    Salesforce Business Analyst
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tabSD" data-toggle="tab" class="nav-link">
                                    Salesforce Developer
                                </a>
                            </li>
                        </ul>
                        <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                            <div id="tabSA" class="tab-pane fade active show">
                                <div class="row align-center">
                                    <div class="col-lg-6 col-md-12 info">
                                        <div class="row">
                                            <div class="col-lg-2" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p>
                                                    <span class="font-Novbold" style="color: #25C7D9;">El Administrador
                                                        de Salesforce</span>
                                                    es un experto<br>
                                                    en darle vida a la innovación tecnológica de las<br>
                                                    herramientas de Salesforce. Asume su rol, en el<br>
                                                    alto impacto de la automatización de procesos<br>
                                                    comerciales complejos, eficientando los<br>
                                                    tiempos de servicio al cliente, a través de los<br>
                                                    diversos usos de la plataforma.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p>
                                                    Gestiona a los usuarios y brinda vistas<br>
                                                    personalizadas por medio de tableros y<br>
                                                    reportes para <span class="font-Novbold" style="color: #25C7D9;">optimizar los procesos internos<br>
                                                        de la compañía.</span>
                                                </p>
                                            </div>
                                        </div>

                                        <a class="btn-simple btn-sm wow fadeInUp " data-wow-duration="1.8s" href="#" style="border-radius: 16px; background: #F27C21 none repeat scroll 0 0;border: 2px solid #F27C21;color: #FAFAFA;visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">Ver curso</a>
                                    </div>
                                    <div class="video-tarjeta col-lg-6 col-md-12 thumb">
                                        <div id="portfolio" class="projects-area overflow-hidden">
                                            <div class="container">
                                                <div class="project-items-area">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="gallery-content">
                                                                <div class="magnific-mix-gallery masonary">
                                                                    <div id="portfolio-grid" class="gallery-items projects-items">
                                                                        <!-- Single Item -->
                                                                        <div class="pf-item consulting branding">
                                                                            <div class="single-item">
                                                                                <div class="thumb item-effect">
                                                                                    <img src="<?= base_url('assets/img/home/imgVideoTab.png') ?>" alt="Thumb">
                                                                                    <div class="effect-info">
                                                                                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube">
                                                                                            <i class="fas fa-video"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h6 style="color: #FFFFFF;text-align: center;">
                                                                                        <a style="color: #FFFFFF;text-align: center;" href="#">Fecha de inicio: Octubre 2022</a>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tabSBA" class="tab-pane fade">
                                <div class="row align-center">
                                    <div class="col-lg-6 col-md-12 info">
                                        <div class="row">
                                            <div class="col-lg-2" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p>
                                                    <span class="font-Novbold" style="color: #25C7D9;">El experto analista de datos,</span> ayudará a guiar a<br>
                                                    las compañías a mejorar los procesos de<br>
                                                    negocio con éxito.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p>
                                                    El rol de <span class="font-Novbold" style="color: #25C7D9;">Salesforce Business Analyst,</span><br>
                                                    documenta y analiza los requisitos en torno a<br>
                                                    los desafíos de negocio y producen soluciones<br>
                                                    basadas en el análisis profundo de los datos.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p>
                                                    Con un enfoque metódico, es capaz de<br>
                                                    modelizar datos, diagnósticos y análisis que</br>
                                                    ayuden a tomar las mejores <span class="font-Novbold" style="color: #25C7D9;">rutas de éxito y<br>
                                                        marcar la diferencia en el mundo empresarial.</span>
                                                </p>
                                            </div>
                                        </div>

                                        <a class="btn-simple btn-sm wow fadeInUp " data-wow-duration="1.8s" href="#" style="border-radius: 16px; background: #F27C21 none repeat scroll 0 0;border: 2px solid #F27C21;color: #FAFAFA;visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">Ver curso</a>
                                    </div>
                                    <div class="video-tarjeta col-lg-6 col-md-12 thumb">
                                        <div id="portfolio" class="projects-area overflow-hidden">
                                            <div class="container">
                                                <div class="project-items-area">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="gallery-content">
                                                                <div class="magnific-mix-gallery masonary">
                                                                    <div id="portfolio-grid" class="gallery-items projects-items">
                                                                        <!-- Single Item -->
                                                                        <div class="pf-item consulting branding">
                                                                            <div class="single-item">
                                                                                <div class="thumb item-effect">
                                                                                    <img src="<?= base_url('assets/img/home/imgVideoTab.png') ?>" alt="Thumb">
                                                                                    <div class="effect-info">
                                                                                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube">
                                                                                            <i class="fas fa-video"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h6 style="color: #FFFFFF;text-align: center;">
                                                                                        <a style="color: #FFFFFF;text-align: center;" href="#">Fecha de inicio: 12 Septiembre 2022</a>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tabSD" class="tab-pane fade">
                                <div class="row align-center">
                                    <div class="col-lg-6 col-md-12 info">
                                        <div class="row">
                                            <div class="col-lg-2" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p>
                                                    <span class="font-Novbold" style="color: #25C7D9;">El experto analista de datos,</span> ayudará a guiar a<br>
                                                    las compañías a mejorar los procesos de<br>
                                                    negocio con éxito.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p>
                                                    El rol de <span class="font-Novbold" style="color: #25C7D9;">Salesforce Business Analyst,</span><br>
                                                    documenta y analiza los requisitos en torno a<br>
                                                    los desafíos de negocio y producen soluciones<br>
                                                    basadas en el análisis profundo de los datos.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p>
                                                    Con un enfoque metódico, es capaz de<br>
                                                    modelizar datos, diagnósticos y análisis que</br>
                                                    ayuden a tomar las mejores <span class="font-Novbold" style="color: #25C7D9;">rutas de éxito y<br>
                                                        marcar la diferencia en el mundo empresarial.</span>
                                                </p>
                                            </div>
                                        </div>

                                        <a class="btn-simple btn-sm wow fadeInUp " data-wow-duration="1.8s" href="#" style="border-radius: 16px; background: #F27C21 none repeat scroll 0 0;border: 2px solid #F27C21;color: #FAFAFA;visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">Ver curso</a>
                                    </div>
                                    <div class="video-tarjeta col-lg-6 col-md-12 thumb">
                                        <div id="portfolio" class="projects-area overflow-hidden">
                                            <div class="container">
                                                <div class="project-items-area">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="gallery-content">
                                                                <div class="magnific-mix-gallery masonary">
                                                                    <div id="portfolio-grid" class="gallery-items projects-items">
                                                                        <!-- Single Item -->
                                                                        <div class="pf-item consulting branding">
                                                                            <div class="single-item">
                                                                                <div class="thumb item-effect">
                                                                                    <img src="<?= base_url('assets/img/home/imgVideoTab.png') ?>" alt="Thumb">
                                                                                    <div class="effect-info">
                                                                                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube">
                                                                                            <i class="fas fa-video"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h6 style="color: #FFFFFF;text-align: center;">
                                                                                        <a style="color: #FFFFFF;text-align: center;" href="#">Fecha de inicio: 12 Septiembre 2022</a>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tabs -->
    <div class="work-process-area default-padding">
        <div class="container">
            <div class="works-process-items text-center">
                <div class="row container">
                    <div class="col-lg-5 single-item text-left" style="padding-top: 10rem;">
                        <div class="pb-5 item-custom">
                            <h2 class="font-Novbold tituloBeneficiosh2" style="color: #00215B;text-align: left;">Caracteristas del<br>
                                programa</h2>
                            <h6 class="font-Novreg parrafoTituloBeneficios" style="color: #000000; text-align: left;">Enfoca tus habilidades y
                                competencias<br>
                                en la especialización de los cursos que<br>
                                EmTech ofrece para tu certificación en<br>
                                los career path más importantes del<br> ecosistema <span style="color: #25C7D9;">Salesforce.</span></h6>
                        </div>
                        <a class="btn-simple btn-sm wow fadeInUp btnVerCursoBeneficios" data-wow-duration="1.8s" href="#" style="border-radius: 16px; background: #F27C21 none repeat scroll 0 0;border: 2px solid #F27C21;color: #FAFAFA;visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">Ver
                            cursos</a>
                    </div>
                    <div class="col-lg-7 single-item">
                        <div class="row">
                            <div class="col-lg-6" style="padding-top: 5rem;">
                                <div class="item-custom">
                                    <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                        <div class="card-body container text-left" style="padding: 12px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img class="pt-2 pb-3 mx-auto d-block imgIconosTarjetasDescuadradas" id="iconModulo1" style="cursor: pointer;width: 100%;" src="<?= base_url('assets/img/home/iconoCasosPracticos.svg') ?>" alt="Icono" />
                                                </div>
                                                <div class="col-lg-9 text-left tituloTarjetasDescuadradas" style="padding-left: 0px;">
                                                    <h5 class="font-Novbold" style="color: #00215B;padding-top: 1rem;">Casos Prácticos</h5>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="info">
                                                <p style="line-height: 24px;">
                                                    Pondrás en práctica el conocimiento<br>
                                                    y la utilidad de las herramientas<br>
                                                    digitales de Salesforce para la<br>
                                                    resolución de casos en el mundo<br>
                                                    laboral.
                                                </p>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                        <div class="card-body container text-left" style="padding: 12px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img class="pt-2 pb-3 mx-auto d-block imgIconosTarjetasDescuadradas" id="iconModulo1" style="cursor: pointer;width: 100%;" src="<?= base_url('assets/img/home/iconoTutor.svg') ?>" alt="Icono" />
                                                </div>
                                                <div class="col-lg-9 text-left tituloTarjetasDescuadradas" style="padding-left: 0px;">
                                                    <h5 class="font-Novbold" style="color: #00215B;padding-top: 1rem;">Acompañamiento</h5>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="info">
                                                <p style="line-height: 24px;">
                                                    Nuestro objetivo es convertirte en un<br>
                                                    experto en Salesforce, por ello, tendrás<br>
                                                    un acompañamiento personalizado y<br>
                                                    guiado por los expertos en Salesforce.
                                                </p>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                    <div class="card-body container text-left" style="padding: 12px;">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img class="pt-2 pb-3 mx-auto d-block imgIconosTarjetasDescuadradas" id="iconModulo1" style="cursor: pointer;width: 100%;" src="<?= base_url('assets/img/home/iconoContenidoAsincrono.svg') ?>" alt="Icono" />
                                            </div>
                                            <div class="col-lg-9 text-left tituloTarjetasDescuadradas" style="padding-left: 0px;">
                                                <h5 class="font-Novbold" style="color: #00215B;padding-top: 1rem;">Contenido Asíncrono</h5>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="info">
                                            <p style="line-height: 24px;">
                                                Podrás avanzar a tu propio ritmo y<br>
                                                tendrás la posibilidad de organizar<br>
                                                tus tiempos para acceder al<br>
                                                contenido asíncrono en el momento<br>
                                                que lo decidas.
                                            </p>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <br>
                                <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                    <div class="card-body container text-left" style="padding: 12px;">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img class="pt-2 pb-3 mx-auto d-block imgIconosTarjetasDescuadradas" id="iconModulo1" style="cursor: pointer;width: 100%;" src="<?= base_url('assets/img/home/iconoSesiones.svg') ?>" alt="Icono" />
                                            </div>
                                            <div class="col-lg-9 text-left tituloTarjetasDescuadradas" style="padding-left: 0px;">
                                                <h5 class="font-Novbold" style="color: #00215B;padding-top: 1rem;">Sesiones Síncronas</h5>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="info">
                                            <p style="line-height: 24px;">
                                                Podrás participar activamente en las<br>
                                                sesiones de trabajo y podrás tener<br>
                                                interacciones con otros integrantes<br>
                                                del programa. Las sesiones síncronas<br>
                                                serán guiadas por tutores y expertos,<br>
                                                con los que tendrás el apoyo<br>
                                                didáctico para la resolución de dudas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Star About Area
    ============================================= -->
    <div id="beneficios" class="about-area default-padding bg-blue-light seccion-beneficios relative">
        <div class="container">
            <div class="items-box">
                <div class="row">
                    <div class="col-lg-6 info">
                        <h2 class="font-Novbold" style="color: #00215B;">Beneficios del programa</h2>
                        <ul>
                            <li class="li-beneficios">
                                <h5 class="font-Novbold" style="color: #00215B;font-size: 18px;">Facilidades de pago</h5>
                                <p>
                                    Podrás realizar tus pagos durante<br>
                                    <span style="color: #25C7D9;">5 quincenas sin intereses.</span>
                                </p>
                            </li>
                            <li class="li-beneficios">
                                <h5 class="font-Novbold" style="color: #00215B;font-size: 18px;">Garantía de trabajo EmTech</h5>
                                <p>
                                    Estamos convencidos del alto valor que
                                    tiene cada uno de los cursos que
                                    ofrecemos, es por ello, que te
                                    <span style="color: #25C7D9;">garantizamos obtener al menos una
                                        oferta laboral durante los primeros 3
                                        meses de haber obtenido tu
                                        certificación</span> y si no lo consigues, te
                                    devolvemos tu dinero.<br><br>

                                    Aplican restricciones
                                </p>
                            </li>
                            <li class="li-beneficios">
                                <h5 class="font-Novbold" style="color: #00215B;font-size: 18px;">Vinculación laboral</h5>
                                <p>
                                    Por medio de <span style="color: #25C7D9;">EXPERIS,</span> tendrás la<br>
                                    oportunidad de vincularte con<br>
                                    diferentes empresas tanto nacionales<br>
                                    como internacionales.
                                </p>
                            </li>
                            <li class="li-beneficios">
                                <h5 class="font-Novbold" style="color: #00215B;font-size: 18px;">Incluye certificación</h5>
                                <p>
                                    En <span style="color: #25C7D9;">EmTech somos partners autorizados por Salesforce,</span>
                                    para formar académicamente a sus futuros expertos.
                                    Dentro de este programa, incluimos la certificación
                                    oficial por parte de <span class="font-Novbold" style="color: #000000;">Salesforce</span> en cualquiera
                                    de los career paths que decidas incursionar.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 thumb">
                        <img src="<?= base_url('assets/img/home/imgBeneficios.png') ?>" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area bg-gray default-padding" style="padding-bottom: 6rem;padding-top: 7rem">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url(<?= base_url('assets/img/home/bannerNumeros.png') ?>);">
        </div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="text-center client-items">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="text-center" style="color:#ffff;position: relative">
                            ¡Forma parte de la comunidad de <span class="font-Novbold">innovadores digitales más importante del planeta!</span>
                        </h2>
                    </div>
                    <div class="col-lg-4">
                        <a class="btn circle btn-sm btn-naranja shape wow fadeInUp" data-wow-duration="1.8s" href="#">Aplicar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->
    <div class="testimonials-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="font-Novbold" style="color: #00215B; text-transform: capitalize;">Testimonios</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-items text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="<?= base_url('assets/img/home/imgLizbeth.png') ?>" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="<?= base_url('assets/img/home/imgGloria.png') ?>" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="<?= base_url('assets/img/home/imgIvonne.png') ?>" alt="Thumb">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h4 style="color: #00215B;padding-bottom: 1rem;">Mtra. Lizbeth<br> Gregorio Avila</h4>
                                    <!-- <span>CEO of Softing</span> -->
                                    <img src="<?= base_url('assets/img/home/iconoEstrellas1.png') ?>" style="width: 15%;padding-bottom: 1rem;">
                                    <p style="color: #333333;">
                                        Fue muy significativo que a lo largo del curso en vez de situarme
                                        como una estudiante o usuario, asumí el rol de arquitecto cognitivo.
                                        Este último término fue el impulso para que en mi formación profesional
                                        tuvieran sentido las herramientas y metodologías desde una pedagogía
                                        centrada en el alumno y las cuales me permitieran hacer un puente
                                        entre un aprendizaje holístico mediado por la tecnología y los retos
                                        que demanda la educación contemporánea.¡Una increíble experiencia!
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <h4 style="color: #00215B;padding-bottom: 1rem;">Dra. Gloria de los Ángeles<br> Bennetts Carlock</h4>
                                    <!-- <span>CEO of Softing</span> -->
                                    <img src="<?= base_url('assets/img/home/iconoEstrellas1.png') ?>" style="width: 15%;padding-bottom: 1rem;">
                                    <p style="color: #333333;">
                                        El curso me ha parecido muy dinámico desde el principio, la mayoría de las actividades de estudio independiente estaban
                                        diseñadas desde un enfoque constructivista, sobre todo el proyecto integrador, lo que ayudó a unificar mis funciones laborales
                                        con las necesidades del contexto en el cual me encuentro inmersa. Por otro lado, integrar una hora de tutoría semanal ayudó
                                        a explorar más a fondo algunas temáticas que quedaban sueltas durante las sesiones de aprendizaje guiadas por el asesor, otra de las cosas que noté fue la mejora de la narrativa académica en cuanto a los contenidos educativos alojados en la plataforma LMS.
                                        Por último, finalizo con un enorme agradecimiento a todo el equipo que diseñó y llevó a cabo la presente oferta educativa, debido a que fue uno de los diplomados más retadores que curse en los últimos años.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <h4 style="color: #00215B;padding-bottom: 1rem;">Dra. Ivonne Estela<br> Martínez Hernández</h4>
                                    <!-- <span>CEO of Softing</span> -->
                                    <img src="<?= base_url('assets/img/home/iconoEstrellas1.png') ?>" style="width: 15%;padding-bottom: 1rem;">
                                    <p style="color: #333333;">
                                        El valor que imprime el instructor es sin lugar a dudas un sello de calidad del boot camp en su módulo 2, su dinamismo y conocimiento de los temas te brindan confianza en que, aunque estás saturado de aprendizaje llegarás a un lugar seguro en la consolidación de este con tu proyecto.. El grupo también, dinamizado por el instructor, fue un potencial enorme para compartir experiencias, conocer nuestros talentos y retarnos a dar lo mejor de nosotros, vivenciando el curso desde la esencia de nuestras instituciones y renovándonos.
                                        Se percibe un equipo armonioso de trabajo en el bootcamp, el apoyo técnico, los invitados que nos compartieron de guion y producción,
                                        lo cual redondea excelente el curso.
                                        Muchas gracias por esta experiencia detonadora de cambios en mi vida profesional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="equal-height col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Inicio</h4>
                            <ul>
                                <li>
                                    <a href="#">¿Quiénes somos?</a>
                                </li>
                                <li>
                                    <a href="#">¿Qué hacemos?</a>
                                </li>
                                <li>
                                    <a href="#">¿Cómo lo hacemos?</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Cursos</h4>
                            <ul>
                                <li>
                                    <a href="#">Salesforce fos Success</a>
                                </li>
                                <li>
                                    <a href="#">Salesforce Analyst</a>
                                </li>
                                <li>
                                    <a href="#">Salesforce Administrator</a>
                                </li>
                                <li>
                                    <a href="#">Salesforce Developer</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">El programa</h4>
                            <ul>
                                <li>
                                    <a href="#">Características</a>
                                </li>
                                <li>
                                    <a href="#">Beneficios</a>
                                </li>
                                <li>
                                    <a href="#">Testimoniales</a>
                                </li>
                                <li>
                                    <a href="#">Nuestra Alianza</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-3 col-md-6 item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contáctanos</h4>
                            <p>
                                Stay connected with us and let's hear more stories about scholarships and education
                            </p>
                            <ul class="social">
                                <li>
                                    <a href="#"><img src="<?= base_url('assets/img/home/iconoFacebook.png') ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url('assets/img/home/iconoTwitter.png') ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url('assets/img/home/iconoInstagram.png') ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url('assets/img/home/iconoPinterest.png') ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="pt-5 footer-bottom" style="background-color: #ffffff;">
        <div class="row container">
            <div class="col-lg-2 col-md" style="padding-left: 2rem;">
                <img src="<?= base_url('assets/img/home/footerLogo.png') ?>" style="width: 100%;">
            </div>
            <div class="col-10 col-md">
                <small class="d-block mb-3 text-muted" style="color: #00215B !important;">
                    Emerging Technologies Institute | All Rights Reserved
                </small>
            </div>
        </div>
    </div>
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
    <script src="<?= base_url('assets/js/TweenMax.js') ?>"></script>
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


        var cards = $('#card-slider .slider-item').toArray();

        startAnim(cards);

        function startAnim(array) {
            if (array.length >= 4) {
                TweenMax.fromTo(array[0], 0.5, {
                    x: 0,
                    y: 0,
                    opacity: 0.75,
                    backgroundColor: "unset"
                }, {
                    x: 0,
                    y: -120,
                    opacity: 0,
                    zIndex: 0,
                    delay: 0.03,
                    ease: Cubic.easeInOut,
                    onComplete: sortArray(array),
                    backgroundColor: "unset"
                });

                TweenMax.fromTo(array[1], 0.5, {
                    x: 79,
                    y: 125,
                    opacity: 1,
                    zIndex: 1,
                    backgroundColor: "unset"
                }, {
                    x: 0,
                    y: 0,
                    opacity: 0.75,
                    zIndex: 0,
                    boxShadow: '-5px 8px 8px 0 rgba(82,89,129,0.05)',
                    ease: Cubic.easeInOut,
                    backgroundColor: "unset"
                });

                TweenMax.to(array[2], 0.5, {
                    bezier: [{
                        x: 0,
                        y: 250
                    }, {
                        x: 65,
                        y: 200
                    }, {
                        x: 79,
                        y: 125
                    }],
                    boxShadow: '-5px 8px 8px 0 rgba(82,89,129,0.05)',
                    zIndex: 1,
                    opacity: 1,
                    ease: Cubic.easeInOut,
                    backgroundColor: "#25C7D9",
                    color: "#ffffff"
                });

                TweenMax.fromTo(array[3], 0.5, {
                    x: 0,
                    y: 400,
                    opacity: 0,
                    zIndex: 0
                }, {
                    x: 0,
                    y: 250,
                    opacity: 0.75,
                    zIndex: 0,
                    ease: Cubic.easeInOut
                }, );
            } else {
                $('#card-slider').append('<p>Sorry, carousel should contain more than 3 slides</p>')
            }
        }

        function sortArray(array) {
            clearTimeout(delay);
            var delay = setTimeout(function() {
                var firstElem = array.shift();
                array.push(firstElem);
                return startAnim(array);
            }, 3000)
        }
    </script>
</body>

</html>