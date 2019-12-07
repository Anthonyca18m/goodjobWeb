<?php  
    require_once("db.php");

		$sql = "SELECT * FROM usuario WHERE Ucorreo = :usuario AND Upass = sha1(:clave)";

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
				if($rs["tipo_usuario"] == 1){
					header("Location: ../actividades"); 
				}elseif($rs["tipo_usuario"] == 2){
					header("Location: ../panelAdmin");
				}
                
            }
			
		}else{
			$ruc = htmlentities(addslashes($_POST['LoginUser']));
			$pass = htmlentities(addslashes($_POST['LoginPass']));

			$sql = "SELECT * from empresa e 
			INNER JOIN distrito d ON e.idDistrito = d.idDistrito WHERE 
			Eruc = ':usuario' AND e.password = sha1(':clave')";

			$resultado->bindValue(":usuario", $usuario);

			$resultado->bindValue(":clave", $clave);

			$resultado->execute();
			header("Location: ../actividades"); 
			session_start();
            
            $result = $resultado->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $rs) {
                $_SESSION['empresa'] = $rs["idUsuario"];
                header("Location: ../actividades"); 
            }
        }