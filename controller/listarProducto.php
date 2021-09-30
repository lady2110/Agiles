        <div class="container mt-3">
            <div class="row">
            
            <?php

            include_once './conexion.php';
            include_once './producto.php';

            $conexion = new Conexion();
            $db = $conexion->getConexion();

            $producto = new Producto($db);
            $objPro = $producto->getPro();
            $listaPro = $objPro->num_rows;

            while ($row = mysqli_fetch_row($objPro)) {
            ?>
                     
                     <div class="col-lg-4  col-md-6  col-sm-12">
                        <div class="card" style="margin-top: 10px;">
                            <img src="./images/<?php echo $row[4]; ?>" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row[1]; ?></h5>
                                <p class="card-text">
                                    Precio $: <?php echo $row[2]; ?>
                                </p>
                                <a href="#" class="btn btn-primary">Comprar ahora!!!</a>
                            </div>
                        </div>
                    </div>
                <?php
                } //fin while
                ?>
            </div>
            </div>