<style>
    @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');

    .titulo {
        font-family: 'Gluten', cursive;
        text-align: center;
        background-color: #EC407A;
    }
</style>
<?php
include 'cabecera/cabecera.php';
?>
<div class="titulo">
    <h1 style="color: white ;">Carrito</h1>
</div>
<div class="container">
    <title>Carrito</title>
    <div>
        <?php
        include 'controller/listarProducto.php';
        ?>
    </div>
</div>
<div>
    <?php
    include 'cabecera/pie.php';
    ?>
</div>