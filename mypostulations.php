<?php
    require_once("Model/db_mysqli.php");
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

    <title>Mis postulaciones | GOODJOB</title>

    <meta name="keywords" content=" ">
    <meta name="description" content="">
    <meta name="author" content="anthostudio.ga">

    <?php include_once("layouts/subheader.php"); ?>

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
                                                    class="nav-link" href="contactacnos"><i
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
                                        <img alt="Porto" width="150" height="90" data-sticky-width="82"
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
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle"
                                                        href="index">
                                                        INICIO </a>

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
                                                <li class="dropdown" <?php echo $hidden;?>> <a class="dropdown-item dropdown-toggle active" href="registrarse">
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
                                <div class="header-nav-features 
								header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="#" <?php echo $hidden;?> data-toggle="modal" data-target="#FormLogin"
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


            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="container shadow p-3 mb-2 bg-white rounded">
                    <div class="row text-center">
                        <div class="col-sm-3">
                            <a href="profile">Mi perfil</a>
                        </div>
                        <div class="col-sm-3"style="background:#fafafa;">
                            <a href="mypostulations">Mis postulaciones</a>
                        </div>
                        <div class="col-sm-3">
                            <a href="myparticiones">Mis participaciones</a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">Descargar la APP</a>
                        </div>
                    </div>
                </div>
                <div class="container shadow p-3 mb-5 bg-white rounded">
                    <div class="row pb-1 pt-2">
                        
                        <div class="col-md-12">
                            <div class="row pb-1">
                                <div class="col-lg-12">
                                    <article
                                        class="border-bottom thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                                        <div class="row align-items-center pb-1">
                                            <div class="col-sm-4">
                                                <a href="#" data-href="ajax/actividadpostulada.php" data-ajax-on-page="">
                                                    <img src="img\blog\default\blog-47.jpg"
                                                        class="img-fluid border-radius-0" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-8 pl-sm-0">
                                                <div class="thumb-info-caption-text">
                                                    <div class="d-inline-block text-default text-1 float-none">
                                                        <a class="text-decoration-none text-color-default">15 de
                                                            Diciembre de 2019</a>
                                                    </div>
                                                    <h4
                                                        class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0">
                                                        <a class="text-decoration-none text-color-dark">
                                                            Calle Jr San German #654 Paradero 5
                                                        </a>
                                                    </h4>
                                                    <p class="text-2">Make
                                                        Esta calle cuenta con una gran cantidad de basura
                                                        en el cual estamos dando S/1111 soles a las personas
                                                        que limpien e dejen como nuevo ese paradero para
                                                        el bien de la vista publica e personas que viven
                                                        cerca a ella...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-9">
                            <div id="porfolioAjaxBox" class="ajax-box ajax-box-init">

                                <div class="bounce-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>

                                <div class="ajax-box-content" id="porfolioAjaxBoxContent"></div>

                            </div>
                        </div>
                            </div>

                            <div class="text-center py-3 mb-4">
                                <a href="index" target="_blank" class="d-block">
                                    <img alt="goodJOB" class="img-fluid pl-3" src="img\blog\blog-ad-3.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



   
    </div>


    <?php include_once("modals/modal_FormLogin.php"); ?>


    <?php include_once("layouts/footer.php"); ?>