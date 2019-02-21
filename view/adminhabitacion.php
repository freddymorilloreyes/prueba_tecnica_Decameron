
<!-- Page Content -->
<div class="container">

    <h1 class="my-4">Bienvenido a Hoteles Decameron</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col">
            <div class="card h-100">
                <h4 class="card-header"><?= $hotel[0]['nombre']?></h4>
                <div class="card-body">
                    <div class="row">
                    <p class="card-text">Ciudad: <?= $hotel[0]['ciudad']?></p>
                    </div>
                    <div class="row">
                        <p class="card-text">Dirección: <?= $hotel[0]['direccion']?></p>
                    </div>
                    <div class="row">
                        <p class="card-text">NIT: <?= $hotel[0]['nit']?></p>
                    </div>
                    <div class="row">
                        <p class="card-text">Habitaciones Asignadas:<?= $habAsignadas?> de <?= $hotel[0]['nro_habitaciones']?></p>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <br>
    <!-- table -->
    <div class="row">
        <div class="col">
            <div class="card h-100">
                <h4 class="card-header">Catalogar Habitaciones</h4>
                <div class="card-body">
                    <div class="form">
                        <form class="form-inline" method="post" action="registrarHab.php">
                            <input type="hidden" value="<?= $hotel_id?>" name="hotel_id">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="cantidad" class="sr-only">Cantidad</label>
                                <input type="number" min="1" max="<?= $habNoAsignadas?>" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="tipo" class="sr-only">Tipo</label>
                                <select class="form-control" name="tipo" id="tipo" required>
                                    <option>tipo</option>
                                    <?php foreach ($tiposHab as $tipoHab): ?>
                                        <option value="<?= $tipoHab['id'] ?>"><?= $tipoHab['nombre'] ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="acomodacion" class="sr-only">Acomodación</label>
                                <select class="form-control" name="acomodacion" id="acomodacion" required>
                                    <option>acomodacion</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Registrar</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <br>
    <!-- table -->
    <div class="row">
        <div class="col">
            <div class="card h-100">
                <h4 class="card-header">Información de Habitaciones</h4>
                <div class="card-body">
                    <div class="table">
                        <table class="table table-striped">
                            <tr>
                                <th>Cantidad</th>
                                <th>Tipo de Habitación</th>
                                <th>Acomodación</th>
                                <th>Eliminar</th>
                            </tr>
                            <?php foreach ($infoHabitaciones as $habitacion): ?>
                            <tr data-id="<?= $habitacion['tipo_id'].$habitacion['acomodacion_id'].$hotel_id?>">
                                <td><?= $habitacion['cant'] ?></td>
                                <td><?= $habitacion['tipo'] ?></td>
                                <td><?= $habitacion['acomodacion'] ?></td>
                                <td><button class="btn btn-danger" onclick="deleteRecord(<?= $habitacion['tipo_id'] ?>, <?= $habitacion['acomodacion_id'] ?>, <?= $hotel_id ?>)">Elminar</button></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <br>


</div>
<!-- /.container -->



