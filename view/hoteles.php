
<!-- Page Content -->
<div class="container">

    <h1 class="my-4">Bienvenido a Hoteles Decameron</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
        <?php foreach ($hoteles as $hotel):?>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header"><?= $hotel['nombre']?></h4>
                <div class="card-body">
                    <div class="row">
                    <p class="card-text">Ciudad: <?= $hotel['ciudad']?></p>
                    </div>
                    <div class="row">
                        <p class="card-text">Dirección: <?= $hotel['direccion']?></p>
                    </div>
                    <div class="row">
                        <p class="card-text">NIT: <?= $hotel['nit']?></p>
                    </div>
                    <div class="row">
                        <p class="card-text">Nro de Habitaciones: <?= $hotel['nro_habitaciones']?></p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="adminhabitacion.php?hotel=<?= $hotel['id']?>" class="btn btn-primary">Administrar Habitaciones</a>
                </div>
            </div>
        </div>
        <?php endforeach?>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

