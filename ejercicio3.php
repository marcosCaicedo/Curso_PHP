<?php 
$NombUsuario = $_GET['nombre'];
$ApeUsuario = $_GET['apellido'];

/**
 * Se añade validacion si el formulario viene vacio , sin embargo el formulario ya
 * tiene require(campos obligatorios) en PHP CURSO/ejercicio3.html
 */
if($NombUsuario=="" & $ApeUsuario=="" || $NombUsuario==null & $ApeUsuario==null){
    echo"datos vacios";
}else{
    echo($NombUsuario);
    echo('<br/>');
    echo($ApeUsuario);
}

?>