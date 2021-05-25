<link rel="stylesheet" href="estilos.css"> 

<?php
$nombre=$_POST['nombre'];
$destinatario=$_POST['emailDestino'];
$asunto="Consulta sobre el producto";
$texto=$_POST['mensaje'];

$cabecera="From: jasminrubi1998@hotmail.com\r\n";
$cabecera.="Content-Type: text/html; charset=ISO-8859-1\r\n";
$cabecera.="MINE-Version:1.0\r\n";

$mensaje  ="<div style='width: 300px; padding-left:  10px; padding-right: 20px; margin-left:   30px; margin-right:  30px;border: 1px solid black;'";
$mensaje .='<html><body>';
$mensaje .='<strong>Hola,</strong> Soy  ';
$mensaje .= $nombre . '</p> ';
$mensaje .='Mi consulta es la siguiente: </p>';
$mensaje .= $texto . '</p> ';
$mensaje .='Gracias por su atención.';
$mensaje .='</div></body></html>';

/*
$Enviado = mail($destinatario,$asunto,$mensaje,$cabecera);

if($Enviado){
    
    echo "<script>
                alert('Correo Enviado con exito');
                window.location= 'index.php'
    </script>";
}
else{
    echo 'Error al enviar correo';
}*/

try {

    $Enviado = mail($destinatario,$asunto,$mensaje,$cabecera);

    if ($Enviado){
        echo "<script>
                alert('Correo Enviado con exito');
                window.location= 'index.php'
            </script>";
    }
    else{
        
        throw new Exception("Mensaje no enviado");
    }
}
catch(Exception $e){
	
    echo 'manejando error en mail  </br>'. $e->getMessage() . "<br>";   
    $file = fopen('log','a+');
    fwrite($file, $e. "\n" ) ;
    fclose($file);
}
