<?php

if(!empty($_GET)){
			include "User/clases/Conex_DB.php";
			
			$sql = "DELETE FROM person WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='productos/productos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='productos/productos.php";

			}
}

?>