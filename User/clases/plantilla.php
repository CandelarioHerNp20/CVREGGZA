<?php
interface plantillaDatos{
    public function crear($objeto);
    public function modificar($objeto);
    public function eliminar($id);
    public function leerTodo();

}
interface plantillaDatos_prd{
    public function RegPrd($objeto);
    public function EditPrd($objeto);
    public function DelPrd($id);
    public function VerPrd($valor);


}
?>