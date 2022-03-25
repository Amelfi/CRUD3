<?php 
include "Header.php";
?>

<?php
include "db.php";
?>
<?php 
if(isset($_GET['id'])){

    $id=$_GET['id'];
    $select=$conn->prepare("SELECT * FROM alumno where id= ?");
$select->execute([$id]);
$resultado=$select->fetch(PDO::FETCH_OBJ);



}




?>
<div class="class container">
<div class="class row justify-content-center">
<div class="col-md-5">
             
                <div class="card">
                    <div class="card-header"> Insertar informacion</div>
                    <form action="Actualizar.php?id=<?php echo $_GET['id']; ?>" method="post" class= py-3>

                        <div class="mb-3">
                            <label for="Nombre" class="form-label"></label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre"  value="<?php echo $resultado->nombre; ?>" >
                            
                        </div>

                        <div class="mb-3">
                            <label for="Apellido" class="form-label"></label>
                            <input type="text" class="form-control" name="Apellido" id="Apellido"  value="<?php echo $resultado->apellido; ?>" >
                            
                        </div>

                        <div class="mb-3">
                            <label for="Telefono" class="form-label"></label>
                            <input type="tel" class="form-control" name="Telefono" id="Telefono"  value="<?php echo $resultado->telefono; ?>" >
                            
                        </div>

                        <div class="mb-3">
                            <label for="E-mail" class="form-label"></label>
                            <input type="e-mail"   class="form-control" name="E-mail" id="E-mail"  value="<?php echo $resultado->email; ?>" >
                            
                        </div>
                        <div class="d-grid">
                        
                        <input class="btn btn-primary" type="submit" name="actualizar" value="Insertar">
                        </div>

                    </form>
                
                </div>


            </div>

    </div>

    </div>
</div>
<?php
 include "Footer.php";
?>