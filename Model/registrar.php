<?php
include_once("db_mysqli.php");

$accion = htmlentities(addslashes($_POST["accion"]));

if ($accion == "registrarPersona") {

    $r_nombre       = htmlentities(addslashes($_POST["r_nombre"]));
    $r_appaterno    = htmlentities(addslashes($_POST["r_appaterno"]));
    $r_apmaterno    = htmlentities(addslashes($_POST["r_apmaterno"]));
    $r_email        = htmlentities(addslashes($_POST["r_email"]));
    $r_pass         = htmlentities(addslashes($_POST["r_pass"]));
    $r_r_pass       = htmlentities(addslashes($_POST["r_r_pass"]));

    if ($r_pass != $r_r_pass) {
        echo '
            <script>
                toastr["error"]("Las contraseñas no coinciden", "Ups!");  //llamando al toast
            </script>
        ';
    } else {
        $encontrar = "SELECT * FROM usuario WHERE Ucorreo = '" . $r_email . "'";
        $registros = mysqli_query($con, $encontrar);

        if (mysqli_fetch_row($registros) > 0) {
            echo '
            <script>
                toastr["warning"]("El correo ya se encuentra registrado!", "Ups!");  //llamando al toast
            </script>
        ';
        } else {
            $consulta_string = "INSERT INTO usuario (Unombre, UPaterno, UMaterno, Ucorreo, Upass, UfechaRegistro,tipo_usuario,Uestado) 
            VALUES ('$r_nombre', '$r_appaterno', '$r_apmaterno', '$r_email', sha1('$r_pass'), curdate(),'1','1');";

            $result = mysqli_query($con, $consulta_string);

            if ($result) {
                echo '
            <script>
                toastr["success"]("Te has registrado con exitó!", "Bienvenido!");
            </script> ';
            } else {
                echo '
                <script>
                    toastr["error"]("Ha ocurrido algo inesperado en la APP!", "Ups!");
                </script>
            ';
            }
        }
    }
} elseif ($accion == "registrarEmpresa") {


    $re_ruc                 = htmlentities(addslashes($_POST["re_ruc"]));
    $re_razonSocial         = htmlentities(addslashes($_POST["re_razonSocial"]));
    $re_nombreComercial     = htmlentities(addslashes($_POST["re_nombreComercial"]));
    $re_numeroContacto      = htmlentities(addslashes($_POST["re_numeroContacto"]));
    $re_email               = htmlentities(addslashes($_POST["re_email"]));
    $re_password            = htmlentities(addslashes($_POST["re_password"]));
    $re_r_password          = htmlentities(addslashes($_POST["re_r_password"]));

    if ($re_password != $re_r_password) {
        echo '
            <script>
                toastr["error"]("Las contraseñas no coinciden", "Ups!");  //llamando al toast
            </script>
        ';
    }

    $encontrar = "SELECT * FROM empresa WHERE Eruc = '" . $re_ruc . "'";
    $registros = mysqli_query($con, $encontrar);

    if (mysqli_fetch_row($registros) > 0) {
        echo '
        <script>
            toastr["warning"]("El RUC ya se encuentra registrado!", "Ups!");  //llamando al toast
        </script>
    ';
    } else {

        $consulta_string = "INSERT INTO empresa(idEmpresa, 
        ErazonSocial, Eruc, Ececular, Edireccion, EfechaRegistro, 
        EcodigoPostal, estado, EnombreComercial, EnumeroActividades, 
        idDistrito, ecorreo, password) VALUES 
        (NULL,'" . $re_razonSocial . "','" . $re_ruc . "','" . $re_numeroContacto . "','-',curdate(),'-',
            0,'" . $re_nombreComercial . "',0,1,'" . $re_email . "',sha1('" . $re_password . "'))
        ";

        $result = mysqli_query($con, $consulta_string);

        if ($result) {
            echo '
        <script>
            toastr["success"]("Te has registrado con exitó!", "Bienvenido!");
        </script> ';
        } else {
            echo '
            <script>
                toastr["error"]("Ha ocurrido algo inesperado en la APP!", "Ups!");
            </script>
        ';
        }
    }
}
