<?php 
    require_once("../Model/db_mysqli.php");
    $id_actividad = intval($_GET["id_actividad"]);
    $sql = "SELECT *,
                    a.titulo AS tituloActividad,
                    e.EnombreComercial AS publicante, 
                    a.descripcion AS Descripcion
            FROM actividad a INNER JOIN empresa e ON  a.empresa = e.idEmpresa WHERE a.id = " . $id_actividad . "";
    $result = mysqli_query($con, $sql);

    while ($rs = mysqli_fetch_assoc($result)) {
        $titulo = $rs["tituloActividad"];
        $publicante = $rs["publicante"];
        $descripcion = $rs["Descripcion"];
?>


<div class="post-content ml-0">

    <h2 class="font-weight-bold"><a><?php echo $titulo; ?></a></h2>

    <div class="post-meta">
        <span><i class="far fa-user"></i> Publicado por <a href="#"><?php echo $publicante; ?></a> </span><br>
        <span><i class="fas fa-calendar-alt"></i> <a href="#">Publicado el </a>, <a> 10/10/2019 10:30 pm</a> </span><br>
    </div>

    <p><?php echo $descripcion; ?>
        <a href="img\blog\default\blog-47.jpg">
            <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                <span class="thumb-info-wrapper">
                    <img src="img\blog\default\blog-47.jpg" class="img-fluid" alt="">
                    <span class="thumb-info-action">
                        <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                class="fas fa-plus text-dark"></i></span>
                    </span>
                </span>
            </span>
        </a>
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_tweet"></a>
            <a class="addthis_button_pinterest_pinit"></a>
            <a class="addthis_counter addthis_pill_style"></a>
        </div>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53">
        </script>
        <!-- AddThis Button END -->
    </p>

    <div class="row">
        <div class="col-sm-3">
            <h5>Ubicación: </h5>
            <p>
                Perú- LIMA, Lima Comascity #33.15
            </p>
        </div>
        <div class="col-sm-3">
            <h5>Tipo de Recompensa: </h5>
            <p>
                Dinero
            </p>
        </div>
        <div class="col-sm-3">

            <h5>Monto: </h5>
            <p>
                <strong>S/2000.00</strong>
            </p>
        </div>
        <div class="col-sm-3">

            <h5>Personas Requeridas: </h5>
            <p>
                <strong> 4 Personas</strong>
            </p>
        </div>
        <div class="col-sm-3">

            <h5>Día a realizarse: </h5>
            <p>
                <strong> 17/12/2019</strong>
            </p>
        </div>
    </div>

    <a href="#" class="btn btn-success btn-sm">Postular actividad</a>
    <?php } ?>

</div>

