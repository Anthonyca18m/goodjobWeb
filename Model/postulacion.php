<?php
require_once("db_mysqli.php");

if (!isset($_POST["accion"])) {
    if ($_POST["accion"] == "Postular") {
        $id_actividad = $_POST["id_actividad"];
        $id_usuario = $_POST["id_usuario"];
        $accion = $_POST["accion"];

        $sql = "SELECT * FROM postulacion_actividad WHERE id_actividad = " . $id_actividad . " AND id_usuario = " . $id_usuario;
        $result = mysqli_query($con, $sql);
        if (mysqli_fetch_row($result) > 0) {
            echo '<script>
            toastr["warning"]("Solo se puede postular 1 vez", "Aviso!");  
            </script>';
        } else {
            $sql = "INSERT INTO postulacion_actividad(id_actividad, 
            id_usuario, 
            fechaPostulacion, 
            reputacion_promedio, 
            asistencia, 
            estado) VALUES ($id_actividad,
                            $id_usuario,
                            NOW(),
                            0,
                            0,
                            1)";
            $result = mysqli_query($con, $sql);

            if ($result) {
                echo '
                <script>
                toastr["success"]("Has postulado a la actividad", "Exitó!");  
                </script>';
            } else {
                echo '<script>
                    toastr["warning"]("Ha ocurrido algo inesperado", "Alerta!");  
                    </script>';
            }
        }
    }
}
