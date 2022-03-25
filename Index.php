<?php include "Header.php"; ?>
<?php include "db.php"; ?>

<?php 
$seleccionar= $conn->prepare("SELECT * FROM alumno");
$seleccionar->execute();
$resultado= $seleccionar->fetchAll(PDO::FETCH_OBJ);
// print_r($resultado);

?>

<!-- alerta Guardado -->
<?php if(isset($_GET['estado']) && $_GET['estado']=='exitoso'){ ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Exitoso</strong> Operacion realizada con exito.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php }?>

    <!-- alerta Guardado Error -->
    <?php if(isset($_GET['estado']) && $_GET['estado']=='error') { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error</strong> Debe llenar los campos requeridos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php } ?>
<div class= "container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
        
            <div class="card">
                <div class="card-header"> Informacion del usuario</div>
                <div class="p-4">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">E-MAIL</th>
                            <th scope="col" colspan='2'>OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultado as $dato):?>
                        <tr>
                            <td scope="row"> <?php echo $dato->nombre; ?></td>
                            <td><?php echo $dato->apellido; ?></td>
                            <td><?php echo $dato->telefono; ?></td>
                            <td><?php echo $dato->email; ?></td>
                            <td > <a href="Form_actualizar.php?id=<?php echo $dato->id; ?>"> <i class="bi bi-pencil-square text-success"></i></a> </td>
                           
                            <td > <a href="Eliminar.php?id= <?php echo $dato->id ?>"> <i class="bi bi-trash text-danger">  </i></a></td>
                                
                            
                        </tr>
                       
                        <?php endforeach;?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
             
                <div class="card">
                    <div class="card-header"> Insertar informacion</div>
                    <form action="Insertar.php" method="post" class= py-3>

                        <div class="mb-3">
                            <label for="Nombre" class="form-label"></label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre"  placeholder="Escriba su Nombre" required>
                            
                        </div>

                        <div class="mb-3">
                            <label for="Apellido" class="form-label"></label>
                            <input type="text" class="form-control" name="Apellido" id="Apellido"  placeholder="Escriba su Apellido" required>
                            
                        </div>

                        <div class="mb-3">
                            <label for="Telefono" class="form-label"></label>
                            <input type="tel" class="form-control" name="Telefono" id="Telefono"  placeholder="Escriba su Telefono" required>
                            
                        </div>

                        <div class="mb-3">
                            <label for="E-mail" class="form-label"></label>
                            <input type="e-mail" class="form-control" name="E-mail" id="E-mail"  placeholder="Escriba su E-mail" required>
                            
                        </div>
                        <div class="d-grid">

                        <input class="btn btn-primary" type="submit" name="submit" value="Insertar">
                        </div>

                    </form>
                
                </div>


            </div>

    </div>

<?php include "Footer.php"; ?>