<?php

$hidden = "";
$mostrar= "";
session_start();
if (!isset($_SESSION['usuario'])) {
    $hidden =  "";
    $mostrar= "style='display:none;'";
} else {
    $hidden =  "style='display:none;'";
    $mostrar = "";
}
?>
<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GOODJOB</title>

    <meta name="keywords" content=" ">
    <meta name="description" content="">
    <meta name="author" content="anthostudio.ga">

    <?php include_once("layouts/subheader.php");?>

</head>

<body>

    <div class="body">
        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0">
                <div class="header-top">
                    <div class="container">
                        <div class="header-row py-2">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item nav-item-anim-icon d-none d-md-block"> <a
                                                    class="nav-link pl-0" href="nosotros"><i
                                                        class="fas fa-angle-right"></i>
                                                    Nosotros</a> </li>
                                            <li class="nav-item nav-item-anim-icon d-none d-md-block"> <a
                                                    class="nav-link" href="contactanos"><i
                                                        class="fas fa-angle-right"></i>
                                                    Contactános</a> </li>
                                            <li
                                                class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
                                                <a class="nav-link" href="#" role="button" id="dropdownLanguage"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img\blank.gif" class="flag flag-es" alt="English">
                                                    Español</a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownLanguage"> <a
                                                        class="dropdown-item" href="#"><img src="img\blank.gif"
                                                            class="flag flag-us" alt="English"> English</a> <a
                                                        class="dropdown-item" href="#"><img src="img\blank.gif"
                                                            class="flag flag-es" alt="English"> Español</a> <a
                                                        class="dropdown-item" href="#"><img src="img\blank.gif"
                                                            class="flag flag-fr" alt="English"> Française</a> </div>
                                            </li>
                                            <li
                                                class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                                <span class="ws-nowrap"><i class="fas fa-phone"></i> (123)
                                                    456-789</span> </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/"
                                                target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/"
                                                target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/"
                                                target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="index">
                                        <img alt="" width="150" height="90" data-sticky-width="82"
                                            data-sticky-height="40" src="goodjob/logo_grande.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div
                                    class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle active"
                                                        href="index"> INICIO </a>

                                                </li>
                                                <li class="dropdown dropdown-mega"> <a
                                                        class="dropdown-item dropdown-toggle" href="actividades">
                                                        Actividades </a>

                                                </li>
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle"
                                                        href="testimonios"> Testimonios </a>

                                                </li>
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle"
                                                        href="https://www.facebook.com">
                                                        FanPage </a>

                                                </li>

                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="registrarse"
                                                        <?php echo $hidden; ?>>
                                                        Registrarse </a>
                                                </li>
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle"
                                                        href="profile" <?php echo $mostrar; ?>>
                                                        Mi Perfil </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="mypostulations">
                                                                <i class="icon-grid icons"> </i>
                                                                Mis Postulaciones
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="myparticiones">
                                                                <i class="icon-book-open icons"> </i>
                                                                Mis Participaciones
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="Model/logout.php">
                                                                <i class="icon-power icons"> </i>
                                                                Cerrar Sesión
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div <?php echo $hidden; ?>class="header-nav-features 
								header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="#" data-toggle="modal" data-target="#FormLogin"
                                            class="header-nav-features-toggle">
                                            <i class="fas fa-user header-nav-top-icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">


            <div class="container">

                <div class="row text-center pt-3">
                    <div class="col-md-10 mx-md-auto">
                        <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation"
                            data-appear-animation="fadeInUpShorter">
                            <span>GOODJOB </span>
                            <span class="word-rotator-words text-light " style="background: #1AAB00;">
                                <b class="is-visible">Mejora</b>
                                <b>Apoya</b>
                                <b>Cuida</b>
                            </span>
                            <span> a todo nuestro planeta.</span>
                        </h1>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="300">
                            La tierra provee lo suficiente para satisfacer las necesidades de cada persona,
                            pero no la avaricia de cada uno de ellos.
                        </p>
                    </div>
                </div>

            </div>

            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="home-concept mt-5">
                    <div class="container">

                        <div class="row text-center">
                            <span class="sun"></span>
                            <span class="cloud"></span>
                            <div class="col-lg-2 ml-lg-auto">
                                <div class="process-image">
                                    <img src="goodjob/a2.png" alt="">
                                    <strong>Aire</strong>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="process-image process-image-on-middle">
                                    <img src="goodjob/a1.png" alt="">
                                    <strong>Tierra</strong>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="process-image">
                                    <img src="goodjob/a3.png" alt="">
                                    <strong>Mar</strong>
                                </div>
                            </div>
                            <div class="col-lg-4 ml-lg-auto">
                                <div class="project-image">
                                    <div id="fcSlideshow" class="fc-slideshow">
                                        <ul class="fc-slides">
                                            <li><a href=""><img class="img-responsive" src="goodjob/a1.jpg" alt=""></a>
                                            </li>
                                            <li><a href=""><img class="img-responsive" src="goodjob/a1.jpg" alt=""></a>
                                            </li>
                                            <li><a href=""><img class="img-responsive" src="goodjob/a1.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <strong class="our-work">Cuidemos nuestro planeta</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>





        <?php include_once("modals/modal_FormLogin.php"); ?>


        <?php include_once("layouts/footer.php");?>