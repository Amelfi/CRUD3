<?php
include "db.php";
?>

<?php
if(isset($_POST['actualizar']))
{
    $id=$_GET['id'];   
    $nombre=$_POST['Nombre'];
    $apellido=$_POST['Apellido'];
    $telefono=$_POST['Telefono'];
    $email=$_POST['E-mail'];
    
    $actualizar="UPDATE alumno SET nombre=?,apellido=?,telefono=?,email=? where id=?";
    $actualizar1=$conn->prepare($actualizar);
    $actualizar1->execute(array($nombre,$apellido,$telefono,$email,$id));


    
    if($actualizar1)
    {
        header("Location:index.php?estado=exitoso");
        
    }
    else
    {
        header("Location:index.php?estado=error");
    }
}
?>