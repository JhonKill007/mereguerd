<?php

$ruta= '../img/'.$_FILES['foto']['name'];
$ruta_send= 'img/'.$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$ruta);

$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$descripcion = $_POST['descripcion'];



if(!empty($ruta) || !empty($nombre) || !empty($genero) || !empty($descripcion)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword =  "";
    $dbname = "dbg34merengue8688";
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


    if($conn){
        $INSERT = "INSERT INTO exponentes (nombre,descripcion,genero,foto)values('$nombre','$descripcion','$genero','$ruta_send')";
        $resultado = mysqli_query($conn,$INSERT);
        if($resultado){
            echo "registrado";
            header("Location: ../index.php");
        }
        else{
            echo "valio verga";
        }
    }
    else{
        echo "la connecion fallo";
    }
}
else{
    echo "todos los datos son OBLIGATORIOS";
    header("Location: agregar.php");
}
?>