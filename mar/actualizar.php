<?php 
//tipo_prd Precio_cubo Precio_caja Foto_prod
if(!empty($_POST)){
	if(isset($_POST["id_prd"]) &&isset($_POST["nombre_prd"]) &&isset($_POST["tipo_prd"]) &&isset($_POST["Precio_cubo"]) &&isset($_POST["Precio_caja"]) &&isset($_POST["Foto_prod"])){
		if($_POST["id_prd"]!=""&& $_POST["nombre_prd"]!=""&&$_POST["tipo_prd"]!="" $_POST["Precio_cubo"]!=""&& $_POST["Precio_caja"]!=""&& $_POST["Foto_prod"]!=""&&){
			include "User/clases/Conex_DB.php";
			
			$sql = "update person set id_prd=\"$_POST[id_prd]\",nombre_prd=\"$_POST[nombre_prd]\",tipo_prd=\"$_POST[tipo_prd]\",Precio_cubo=\"$_POST[Precio_cubo]\",Precio_caja=\"$_POST[Precio_caja]\", Foto_prod=\"$_POST[Foto_prod]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='productos/productos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='productos/productos.php';</script>";

			}
		}
	}
}



?>