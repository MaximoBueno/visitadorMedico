<?php
$datosR = NULL;
$mensaje = "";
if(isset($_POST['valor'])){
    $datosR = $_POST['valor'];
    require('./../../../conexion/funciones.php');
    
    session_start();
    $nro_unk = $_SESSION['nro_doc_acc'];

    $conectar = new Funciones();

    $consulta = "INSERT INTO horario(fecha, dia, hora, cod_distrito, cod_ruta, usu_crea, cod_producto) VALUES ('$datosR[0]',$datosR[1], $datosR[2], $datosR[3],$datosR[4], '$nro_unk', $datosR[5]);";

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