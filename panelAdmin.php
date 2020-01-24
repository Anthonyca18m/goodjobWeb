<?php

$hidden = "";
$mostrar = "";
session_start();
if (!isset($_SESSION['usuario'])) {
    $hidden =  "";
    $mostrar = "style='display:none;'";
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

    <?php include_once("layouts/subheader.php"); ?>

</head>

<body>

    <div class="body">
        <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0">
                <div class="header-top">
                    <div class="container">
                        <div class="header-row py-2">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item nav-item-anim-icon d-none d-md-block"> <a class="nav-link pl-0" href="nosotros"><i class="fas fa-angle-right"></i>
                                                    Nosotros</a> </li>
                                            <li class="nav-item nav-item-anim-icon d-none d-md-block"> <a class="nav-link" href="contactanos"><i class="fas fa-angle-right"></i>
                                                    Contactános</a> </li>
                                            <li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
                                                <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img\blank.gif" class="flag flag-es" alt="English">
                                                    Español</a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownLanguage"> <a class="dropdown-item" href="#"><img src="img\blank.gif" class="flag flag-us" alt="English"> English</a> <a class="dropdown-item" href="#"><img src="img\blank.gif" class="flag flag-es" alt="English"> Español</a> <a class="dropdown-item" href="#"><img src="img\blank.gif" class="flag flag-fr" alt="English"> Française</a> </div>
                                            </li>
                                            <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                                <span class="ws-nowrap"><i class="fas fa-phone"></i> (123)
                                                    456-789</span> </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
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
                                        <img alt="" width="150" height="90" data-sticky-width="82" data-sticky-height="40" src="goodjob/logo_grande.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle active" href="index"> INICIO </a>

                                                </li>
                                                <li class="dropdown dropdown-mega"> <a class="dropdown-item dropdown-toggle" href="actividades">
                                                        Actividades </a>

                                                </li>
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="testimonios"> Testimonios </a>

                                                </li>
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="https://www.facebook.com">
                                                        FanPage </a>

                                                </li>

                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="registrarse" <?php echo $hidden; ?>>
                                                        Registrarse </a>
                                                </li>
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="profile" <?php echo $mostrar; ?>>
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
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div <?php echo $hidden; ?>class="header-nav-features 
								header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="#" data-toggle="modal" data-target="#FormLogin" class="header-nav-features-toggle">
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
                <div class="home-concept mt-5">
                    <div class="container">

                        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
                            <div class="container-fluid">
                                <div class="row align-items-center">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                                <div class="overflow-hidden pb-2">
                                                    <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Panel de Administración de
                                                        Actividades
                                                    </h1>
                                                </div>
                                            </div>
                                            <div class="col-md-12 align-self-center order-1">
                                                <ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                                    <li><a href="#">GOODJOB</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>

                        <div class="container py-2">

                            <div class="row">
                                <div class="col pb-5">

                                    <div id="porfolioAjaxBox" class="ajax-box ajax-box-init">

                                        <div class="bounce-loader">
                                            <div class="bounce1"></div>
                                            <div class="bounce2"></div>
                                            <div class="bounce3"></div>
                                        </div>

                                        <div class="ajax-box-content" id="porfolioAjaxBoxContent"></div>

                                    </div>

                                    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                                        <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#"></a></li>
                                    </ul>

                                    <div class="blog-posts recent-posts">

                                        <div id="portfolioLoadMoreWrapper" class="row masonry" data-plugin-masonry="" data-plugin-options="{'itemSelector': '.masonry-item'}" data-total-pages="3" data-ajax-url="ajax/index-blog-4-ajax-load-more-">
                                            <?php
                                            include_once("Model/db_mysqli.php");
                                            $sql = "SELECT *, DAY(a.fecha_creacion) as diafc,
                                                            MONTHNAME(a.fecha_creacion) as mesfc
                                                     FROM actividad a INNER JOIN empresa e ON a.empresa = e.idEmpresa WHERE a.estado = 0";
                                            $result = mysqli_query($con, $sql);

                                            while ($rs = mysqli_fetch_array($result)) {

                                            ?>
                                                <form id="actividadForm" method="POST">
                                                    <input type="hidden" id="idActividad" name="idActividad" value="<?php echo $rs["id"] ?>">
                                                    <div class="masonry-item no-default-style col-md-6">
                                                        <article class="post post-medium border-0 pb-0 mb-5">
                                                            <div class="post-image">
                                                                <a>
                                                                    <img src="img\blog\medium\blog-46.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0 w-100" alt="">
                                                                    <div class="date p-absolute z-index-2 top-10 right-10 mr-0 mr-3 pl-1 pt-1">
                                                                        <span class="day bg-color-light font-weight-extra-bold py-2 text-color-dark">
                                                                            <?php
                                                                            echo $rs["diafc"];
                                                                            ?>
                                                                        </span>
                                                                        <span class="month text-1 bg-color-light line-height-9 text-default w-100 top-2 d-block py-0">
                                                                            <span class="text-1">
                                                                                <?php
                                                                                echo $rs["mesfc"];
                                                                                ?>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="post-content bg-color-light p-4">

                                                                <h2 class="font-weight-bold text-5 line-height-6 mt-0 mb-2">
                                                                    <?php echo $rs["titulo"]; ?>
                                                                </h2>
                                                                <p>
                                                                    <?php echo $rs["descripcion"]; ?>
                                                                </p>

                                                                <div class="post-meta m-0 p-0">
                                                                    <span><i class="far fa-user"></i> Publicado por <a href="#"><?php echo $rs["EnombreComercial"]; ?></a>
                                                                    </span>
                                                                    <span></span>
                                                                    <span><i class="fas fa-users"></i> <a href="#">
                                                                            <?php echo $rs["participantes_requeridos"] . " personas requeridas"; ?>
                                                                        </a></span>
                                                                    <span class="d-block mt-2">
                                                                        <a id="btnAceptar" class="btn btn-xs btn-success text-1 text-uppercase text-light">
                                                                            ACEPTAR
                                                                        </a>
                                                                        <a id="btnRechazar" data-toggle="modal" data-target="#rechazarActividad" class="btn btn-xs btn-danger text-1 text-uppercase text-light">
                                                                            RECHAZAR
                                                                        </a></span>

                                                                </div>

                                                            </div>
                                                        </article>
                                                    </div>
                                                </form>
                                            <?php } ?>
                                        </div>
                                        <div id="alerts"></div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="rechazarActividad" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Actividad</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form id="FormMnsActividad" method="POST">
                            <input type="hidden" id="idActividadmns">
                            <label>Ingresa motivo de rechazo de actividad: </label>
                            <input type="text" id="mnsRechazo" name="mnsRechazo" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="btnRechazarModal" data-dismiss="modal">Enviar</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include_once("modals/modal_FormLogin.php"); ?>


            <?php include_once("layouts/footer.php"); ?>


            <script>
                $("#btnAceptar").on("click", function() {
                    var codigo = $("#idActividad").val();
                    var action = "aceptarActividad";
                    $.ajax({
                        url: 'Model/actividad.php',
                        data: {
                            codigo: codigo,
                            action: action
                        },
                        type: 'post',
                        beforeSend: function() {},
                        success: function(data) {
                            $("#alerts").html(data);
                        }
                    });
                });
                $("#btnRechazar").on("click", function() {
                    var codigo = $("#idActividad").val();
                    var action = "aceptarActividad";
                    $("#idActividadmns").val(codigo);
                });


                $("#btnRechazarModal").on("click", function() {
                    var codigo = $("#idActividadmns").val();
                    var action = "rechazarActividad";
                    var mns = $("#mnsRechazo").val();
                    $.ajax({
                        url: 'Model/actividad.php',
                        data: {
                            codigo: codigo,
                            action: action,
                            mns: mns
                        },
                        type: 'post',
                        beforeSend: function() {},
                        success: function(data) {
                            $("#alerts").html(data);
                        }
                    });
                });
            </script>