<?php  
    require_once("db.php");

		$sql = "SELECT * FROM usuario WHERE Ucorreo = :usuario AND Upass = :clave";

		$resultado = $conPDO->prepare($sql);

		$usuario = htmlentities(addslashes($_POST['LoginUser']));

		$clave = htmlentities(addslashes($_POST['LoginPass']));

		$resultado->bindValue(":usuario", $usuario);

		$resultado->bindValue(":clave", $clave);

		$resultado->execute();


		$registros = $resultado->rowCount();//cuenta si hay 1 existe sino 0 

		if($registros != 0){
			
            session_start();
            
            $result = $resultado->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $rs) {
                $_SESSION['usuario'] = $rs["idUsuario"];
                header("Location: ../actividades"); 
            }
			//echo "El agente de usuario de tu navegador es: {$_SERVER['HTTP_USER_AGENT']}"."<br>";
		}else{
            header("Location:index");
        }