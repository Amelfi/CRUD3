<?php 
include "db.php";
?>

<?php
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $eliminar= "DELETE FROM alumno WHERE id=?";
    $eliminar1= $conn->prepare($eliminar);
    $eliminar1->execute(array($id));
    
    if($eliminar1){
        header("Location:index.php?estado=exitoso");
    }
}


?>