<?php

require_once("db_mysqli.php");


if ($_POST["action"] == "aceptarActividad") {
    $sql = "UPDATE actividad SET actividad.estado = 1 WHERE actividad.id = " . intval($_POST["codigo"]);
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '
        <script>

                toastr["success"]("Actividad Aceptada", "Genial!");  
            </script>
        ';
    } else {
        echo '
        <script>
                toastr["warning"]("Ha ocurrido algo inesperado", "Ups!");  
            </script>
        ';
    }
}elseif ($_POST["action"] == "rechazarActividad") {
    $mns = $_POST["mns"];
    $sql = "UPDATE actividad SET actividad.estado = 2, actividad.mensaje = '$mns' WHERE actividad.id = " . intval($_POST["codigo"]);
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '
        <script>
                toastr["success"]("Ha sido rechazado con exitó la actividad", "Exitó!");  
            </script>
        ';
    } else {
        echo '
        <script>
                toastr["warning"]("Ha ocurrido algo inesperado", "Ups!");  
            </script>
        ';
    }
}
