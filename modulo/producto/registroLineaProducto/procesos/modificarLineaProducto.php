<?php
$datosR = NULL;
$mensaje = "";
if(isset($_POST['valor'])){
    $datosR = $_POST['valor'];
    require('./../../../conexion/funciones.php');

    $conectar = new Funciones();

    $consulta = "UPDATE linea_producto SET linea_producto='$datosR[0]', descripcion='$datosR[1]' WHERE cod_linea_producto=$datosR[2];";
    $resultado = $conectar->Seleccionar($consulta);
    
    if($resultado == true){
        $mensaje = "OK";
    }else{
        $mensaje = "NUL";
    }
    echo $mensaje;
}else{
    echo $mensaje;
}
?>