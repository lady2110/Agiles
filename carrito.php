<style>
    @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');
    .titulo{
        font-family: 'Gluten', cursive;
        text-align: center;
    }

    </style>
<?php
include 'cabecera/cabecera.php' ;
?>
<div class="container">
<title>Carrito</title>
    <div class="titulo">
        <h1>Carrito</h1>
    </div>
    <?php
    include 'controller/listarProducto.php';
    ?>
</div>
    <div>
        <?php
        include 'cabecera/pie.php';
    ?></div>
