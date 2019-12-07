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

$id = 0;
if (!isset($_SESSION['usuario']) && !isset($_SESSION['empresa'])) {
    echo "";
} elseif (!isset($_SESSION['empresa']) && $_SESSION['usuario'] != "") {
    $id = $_SESSION["usuario"];
} elseif ($_SESSION['empresa'] != "" && !isset($_SESSION['usuario'])) {
    $id = $_SESSION['empresa'];
}


?>
<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Mi Perfil | GOODJOB</title>

    <meta name="keywords" content=" ">
    <meta name="description" content="">
    <meta name="author" content="anthostudio.ga">

    <?php include_once("layouts/subheader.php"); ?>

</head>

<body>

    <div class="body" style="background: #fafafa;">
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
                                            <li class="nav-item nav-item-anim-icon d-none d-md-block"> <a class="nav-link" href="nosotros"><i class="fas fa-angle-right"></i>
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
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="index"> INICIO </a>

                                                </li>
                                                <li class="dropdown dropdown-mega"> <a class="dropdown-item dropdown-toggle" href="actividades">
                                                        Actividades </a>

                                                </li>
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="testimonios"> Testimonios </a>

                                                </li>
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                        FanPage </a>

                                                </li>
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle active" href="registrarse">
                                                        Registrarse </a>

                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div class="header-nav-features 
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
                <div class="container shadow p-3 mb-5 mt-3 rounded ">
                    <div class="row text-center">
                        <div class="col-sm-3">
                            <a href="profile">Mi perfil</a>
                        </div>
                        <div class="col-sm-3">
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

                <div class="container shadow p-3 rounded">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 mt-4 mt-lg-0">

                                    <div class="d-flex justify-content-center mb-4">
                                        <div class="profile-image-outer-container">
                                            <div class="profile-image-inner-container bg-color-primary">
                                                <img src="img\avatars\avatar.jpg">
                                                <span class="profile-image-button bg-color-dark">
                                                    <i class="fas fa-camera text-light"></i>
                                                </span>
                                            </div>
                                            <input type="file" id="file" class="profile-image-input" style="width:200px;">
                                        </div>
                                    </div>

                                    <aside class="sidebar mt-2" id="sidebar">
                                        <ul class="nav nav-list flex-column mb-5">
                                            <li class="nav-item"><a class="nav-link text-dark active" href="#">
                                                    Datos personales</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Experiencias en
                                                    GOODJOB</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Experiencias Laborales</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#">Conocimientos y
                                                    habilidades</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Idiomas</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Cambiar Contraseña</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#">Cerrar Sesión</a></li>

                                            <div class="row align-items-center mt-5 text-center">
                                                <div class="col-sm-12">
                                                    <div class="pr-3 pr-sm-5 pb-3 pb-sm-0 border-right-light">
                                                        <h4 class="mb-2">Reputación</h4>
                                                        <div class="d-block pb-2">
                                                            <input type="text" class="rating-invisible" value="4" title="" data-plugin-star-rating="" data-plugin-options="{'displayOnly': true, 'color': '#1AAB00', 'size':'sm'}">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </ul>
                                    </aside>

                                </div>
                                <?php
                                include_once("Model/db_mysqli.php");
                                $sql = "SELECT * FROM usuario INNER JOIN distrito ON usuario.idDistrito = distrito.idDistrito WHERE usuario.idUsuario =" . intval($id);
                                $result = mysqli_query($con, $sql);
                                while ($rs = mysqli_fetch_assoc($result)) {


                                    ?>


                                    <div class="col-lg-9">

                                        <div class="overflow-hidden mb-1">
                                            <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold"><?php echo $rs["Unombre"]; ?> </strong>
                                                <?php echo $rs["UPaterno"] . " " . $rs["UMaterno"]; ?></h2>
                                        </div>
                                        <div class="overflow-hidden mb-4 pb-3">
                                            <p class="mb-0">No compartas tus datos con nadie, te lo recomienda GOODJOB.</p>
                                        </div>

                                        <form role="form" class="needs-validation" id="FormPerfilUsuario">
                                            <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id; ?>">
                                            <div class="row">
                                                <div class="col-sm-12 mb-3">
                                                    <h4 class="font-weight-bold" style="color:#1AAB00;">Información Básica
                                                    </h4>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class=" font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Nombres</label>
                                                    <input class="form-control" required="" id="profile_nombres" name="profile_nombres" type="text" value="<?php echo $rs["Unombre"]; ?>">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class=" font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Apellido Paterno</label><input id="profile_paterno" name="profile_paterno" class="form-control" value="<?php echo $rs["UPaterno"]; ?>" required="" type="text">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Apellido Paterno</label><input id="profile_materno" name="profile_materno" class="form-control" value="<?php echo $rs["UMaterno"]; ?>" required="" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">Email</label>
                                                    <input class="form-control" id="profile_email" value="<?php echo $rs["Ucorreo"]; ?>" name="profile_email" required="" type="email">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Celular</label>
                                                    <input class="form-control" id="profile_celular" name="profile_celular" value="<?php echo $rs["Ucorreo"]; ?>" required="" type="text">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        DNI</label>
                                                    <input class="form-control" id="profile_dni" name="profile_dni" value="<?php echo $rs["Udni"]; ?>" required="" type="text">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Fecha de Nacimiento</label>
                                                    <input class="form-control" id="profile_fechnac" name="profile_fechnac" value="<?php echo $rs["UfechaNacimiento"]; ?>" required="" type="date">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Género</label>
                                                    <select name="profile_genero" id="profile_genero" class="form-control" value="<?php echo $rs["Ugenero"]; ?>">
                                                        <option value=""> SELECCIONE GENERO</option>
                                                        <option value="1"> HOMBRE</option>
                                                        <option value="2"> MUJER</option>
                                                        <option value="3"> SIN ESPECIFICAR</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Estado Civil</label>
                                                    <select name="profile_estadocivil" id="profile_estadocivil" value="<?php echo $rs["Uestadocivil"]; ?>" class="form-control">
                                                        <option value=""> SELECCIONE ESTADO CIVIL</option>
                                                        <option value="1"> CASADO(A)</option>
                                                        <option value="2"> SOLTERO(A)</option>
                                                        <option value="3">COMPLICADO(A)</option>
                                                        <option value="4">VIUDO(A)</option>
                                                        <option value="5">CONVIVIENTE</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-sm-12 mb-3">
                                                    <h4 class="font-weight-bold" style="color:#1AAB00;">Dirección u/o
                                                        Domicilio
                                                    </h4>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Dirección</label>
                                                    <input class="form-control" id="profile_direccion" value="<?php echo $rs["Udireccion"]; ?>" name="profile_direccion" required="" type="text">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Distrito</label>
                                                    <select name="profile_distrito" value="<?php echo $rs["idDistrito"]; ?>" id="profile_distrito" class="form-control">
                                                        <option value=""> SELECCIONE DISTRITO</option>
                                                        <?php
                                                            $sql = "SELECT * FROM distrito";
                                                            $result = mysqli_query($con, $sql);
                                                            while ($rs = mysqli_fetch_assoc($result)) {
                                                                echo "<option value='" . $rs["idDistrito"] . "'>" . $rs["DNombre"] . "</option>";
                                                            }
                                                            ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Provincia</label>
                                                    <select name="profile_provincia" id="profile_provincia" class="form-control">
                                                        <option value=""> LIMA</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Departamento</label>
                                                    <select name="profile_departamento" id="profile_departamento" class="form-control">
                                                        <option value=""> LIMA</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Pais</label>
                                                    <select name="profile_pais" id="profile_pais" class="form-control">
                                                        <option value=""> PERÚ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-sm-12 mb-3">
                                                    <h4 class="font-weight-bold" style="color:#1AAB00;">Datos Adicionales
                                                    </h4>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Link Facebook</label>
                                                    <input class="form-control" id="profile_linkfacebook" value="<?php echo $rs["UlinkFacebook"] ?>" name="profile_linkfacebook" required="" type="url">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Link linkedin</label>
                                                    <input class="form-control" id="profile_linklinkedin" value="<?php echo $rs["UlinkLinkedin"] ?>" name="profile_linklinkedin" required="" type="url">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="font-weight-bold text-dark col-form-label form-control-label text-2 required">
                                                        Subir CV</label>
                                                    <div class="input-group mb-3">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="profile_cv" name="profile_cv">
                                                            <label class="custom-file-label" for="inputGroupFile01">
                                                                archivo</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="row">
                                            <div class="form-group col-sm-12">

                                                <button type="submit" id="profile_btnGuardar" class="mb-1 mt-1 mr-1 btn btn-outline btn-success float-right" data-loading-text="Loading...">
                                                    <i class="far fa-save"></i>
                                                </button>
                                                <button type="button" id="profile_btnEditar" class="mb-1 mt-1 mr-1 btn btn-outline btn-info float-right" data-loading-text="Loading...">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" id="profile_btnCancelar" class="mb-1 mt-1 mr-1 btn btn-outline btn-default float-right" data-loading-text="Loading...">
                                                    <i class="far fa-window-close"></i>
                                                </button>

                                            </div>
                                        </div>
                                        </form>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>


        <?php include_once("modals/modal_FormLogin.php"); ?>
        <?php include_once("layouts/footer.php"); ?>




        <script type="text/javascript">
            $(document).ready(function() {
                //desabilitar todos los inputs del profile
                document.getElementById("profile_nombres").disabled = true;
                document.getElementById("profile_paterno").disabled = true;
                document.getElementById("profile_materno").disabled = true;
                document.getElementById("profile_email").disabled = true;
                document.getElementById("profile_celular").disabled = true;
                document.getElementById("profile_dni").disabled = true;
                document.getElementById("profile_fechnac").disabled = true;
                document.getElementById("profile_genero").disabled = true;
                document.getElementById("profile_estadocivil").disabled = true;
                document.getElementById("profile_direccion").disabled = true;
                document.getElementById("profile_distrito").disabled = true;
                document.getElementById("profile_provincia").disabled = true;
                document.getElementById("profile_departamento").disabled = true;
                document.getElementById("profile_pais").disabled = true;
                document.getElementById("profile_linkfacebook").disabled = true;
                document.getElementById("profile_linklinkedin").disabled = true;
                document.getElementById("profile_cv").disabled = true;

                document.getElementById("profile_btnGuardar").disabled = true;
                document.getElementById("profile_btnCancelar").hidden = true;

                $("#profile_btnEditar").click(function(e) {

                    document.getElementById("profile_nombres").disabled = false;
                    document.getElementById("profile_paterno").disabled = false;
                    document.getElementById("profile_materno").disabled = false;
                    document.getElementById("profile_email").disabled = false;
                    document.getElementById("profile_celular").disabled = false;
                    document.getElementById("profile_dni").disabled = false;
                    document.getElementById("profile_fechnac").disabled = false;
                    document.getElementById("profile_genero").disabled = false;
                    document.getElementById("profile_estadocivil").disabled = false;
                    document.getElementById("profile_direccion").disabled = false;
                    document.getElementById("profile_distrito").disabled = false;
                    document.getElementById("profile_provincia").disabled = false;
                    document.getElementById("profile_departamento").disabled = false;
                    document.getElementById("profile_pais").disabled = false;
                    document.getElementById("profile_linkfacebook").disabled = false;
                    document.getElementById("profile_linklinkedin").disabled = false;
                    document.getElementById("profile_cv").disabled = false;
                    document.getElementById("profile_btnGuardar").disabled = false;
                    document.getElementById("profile_btnEditar").disabled = true;

                    document.getElementById("profile_btnCancelar").hidden = false;
                })

                $("#profile_btnCancelar").click(function(e) {

                    document.getElementById("profile_nombres").disabled = true;
                    document.getElementById("profile_paterno").disabled = true;
                    document.getElementById("profile_materno").disabled = true;
                    document.getElementById("profile_email").disabled = true;
                    document.getElementById("profile_celular").disabled = true;
                    document.getElementById("profile_dni").disabled = true;
                    document.getElementById("profile_fechnac").disabled = true;
                    document.getElementById("profile_genero").disabled = true;
                    document.getElementById("profile_estadocivil").disabled = true;
                    document.getElementById("profile_direccion").disabled = true;
                    document.getElementById("profile_distrito").disabled = true;
                    document.getElementById("profile_provincia").disabled = true;
                    document.getElementById("profile_departamento").disabled = true;
                    document.getElementById("profile_pais").disabled = true;
                    document.getElementById("profile_linkfacebook").disabled = true;
                    document.getElementById("profile_linklinkedin").disabled = true;
                    document.getElementById("profile_cv").disabled = true;
                    document.getElementById("profile_btnGuardar").disabled = true;
                    document.getElementById("profile_btnEditar").disabled = false;

                    document.getElementById("profile_btnCancelar").hidden = true;
                })


            });




            $("#FormPerfilUsuario").submit(function(event) {
                $('#profile_btnGuardar').html('<i class="fa fa-refresh"></i> Verificando...');
                $('#profile_btnGuardar').attr("disabled", true);

                var parametros = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "Model/ModelUpdatePerfil.php",
                    data: parametros,
                    beforeSend: function(objeto) {
                        //$("#resultados_ajax").html('<img src="./img/ajax-loader.gif"> Cargando...');
                    },
                    success: function(datos) {
                        // $("#resultados_ajax").html(datos);
                        $('#profile_btnGuardar').html('Guardar datos');
                        $('#profile_btnGuardar').attr("disabled", false);
                        load(1);
                    }
                });
                event.preventDefault();
            })
        </script>