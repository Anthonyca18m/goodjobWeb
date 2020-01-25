<?php



if (!isset($_POST["action"]) && !isset($_POST["idEmpresa"])) {

    require_once("db_mysqli.php");


    $sql = "SELECT * FROM  empresa WHERE idEmpresa = " . intval($_POST["idEmpresa"]);

    $result = mysqli_query($con, $sql);

    if (mysqli_fetch_row($result) == "") {
        echo '
            <script>
                    toastr["warning"]("La empresa ya ha sido aceptada por favor actualice la pagina", "Ups!");  
                </script>
            ';
    } else {
        $sql = "UPDATE empresa SET estado = 1 WHERE idEmpresa = " . intval($_POST["idEmpresa"]);

        $result = mysqli_query($con, $sql);

        if ($result) {
            echo '
            <script>
                    toastr["success"]("La empresa ha sido aceptada", "Exito!");  
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
}
