<?php 

try {
		
    $conPDO = new PDO("mysql:host=localhost; dbname=goodjod", "root", "");

    $conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
?>