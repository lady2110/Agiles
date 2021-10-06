<?php
include 'cabecera/cabecera.php';
?>
<title>Inicio</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');

    a,
    h1,
    h2,
    h3 {
        font-family: 'Gluten', cursive;
    }

    .titulo {
        margin-top: 10px;
        font-family: 'Gluten', cursive;
        text-align: center;
        background-color: #EC407A;
    }

    .titulos {
        background-color: #EC407A;
        color: white;
    }

    .mision,
    .vision {
        font-family: 'Gluten', cursive;
        text-align: center;
    }

    .texto,
    .imagen,
    .izquierda,
    .derecha,
    .empresa {
        width: 50%;
        height: 200px;
        float: left;
        font-family: 'Gluten', cursive;
        text-align: center;
    }
</style>
<div id="contenedor">
    <div id="bannerhistoria">
        <img src="images/historia.png" style="width:100%; height: 250px">
    </div>
    <div class="titulo">
        <h1 style="color: white ;">Historia</h1>
    </div>
    <div class="cuerpo">
        <div class="texto">
            <h3>
                Iniciamos en el año 2020 con pandequesos santarrosano, en medio de la pandemia COVID-19,
                por la oportunidad que se dio de un local desocupado y muy bien ubicado, poco a poco todo se fue dando,
                comenzamos comprando algunas máquinas, y posicionando las ventas en el local, tiendas y supermercados.
                <br>
                Expandiendonos hasta tener gran variedad en nuestros productos
            </h3>
        </div>
        <div class="imagen">
            <img src="images/imagen1.jpg" width="600px" , height="300px">
        </div>
    </div>
    <div class="cuerpo" style="margin-top: 400px; height: 700px;">
        <div class="izquierda" style="width:20%;height: 700px;">
            <img src="images/bannervertical.png" width="260px" height="690px">
        </div>
        <div class="empresa" style="width:60%;height: 700px;">
            <div class="mision" style="width:100%;height: 350px;">
                <h2 class="titulos" style="margin-top: 50px;">Misión</h2>
                <h3 style="margin-top: 30px;">
                    En Panaderia MyE nos dedicamos a la elaboración y distribución de productos de panadería,
                    comprometidos con nuestros clientes en brindarles productos de gran calidad y sabor, con un servicio amable y oportuno.
                </h3>
            </div>
            <div class="vision" style="width:100%;height: 350px;">
                <h2 class="titulos">Visión</h2>
                <h3 style="margin-top: 30px;">
                    Nuestro propósito en el 2023 es ser una empresa posicionada en el mercado, caracterizada por brindar productos de calidad e innovación,
                    ofreciendo una experiencia excepcional de producto y servicio al cliente.
                </h3>
            </div>
        </div>

        <div class="derecha" style="width:20%;height: 700px;">
            <img src="images/bannerderecha.png" width="260px" height="690px">
        </div>
    </div>
</div>
<div>
    <?php
    include 'cabecera/pie.php';
    ?>
</div>