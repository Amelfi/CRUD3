<?php
include "db.php";
?>
<?php
if (empty ($_POST['Nombre']) || empty ($_POST['Apellido']) || empty ($_POST['Telefono']) || empty ($_POST['E-mail']) ){
   

    header("Location:index.php?estado=error");
}

 else {
$nombre= $_POST['Nombre'];
$apellido= $_POST['Apellido'];
$telefono= $_POST['Telefono'];
$email= $_POST['E-mail'];

$insertar= "INSERT INTO alumno (nombre,apellido,telefono,email) VALUES (?, ?, ?, ?)";
$insertar1= $conn->prepare($insertar);
$insertar1->execute(array($nombre,$apellido,$telefono,$email));



if($insertar1)
{
    header("Location:index.php?estado=exitoso");
    
}
}




?>