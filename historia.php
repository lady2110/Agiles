<?php
include 'cabecera/cabecera.php';
?>
    <title>Inicio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');   
    a,h1,h2,h3{
        font-family: 'Gluten', cursive;
    }
    .titulo{
        font-family: 'Gluten', cursive;
        text-align: center;
    }
    .texto, .imagen, .mision, .vision{
        width: 50%;
        height: 200px;
        float: left;
        font-family: 'Gluten', cursive;
        text-align: center;
    }
    </style>
        <div id="contenedor" >
         <div class="titulo">
            <h1>Historia</h1>
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
                <img src="images/imagen1.jpg" width="600px", height="300px">
            </div>
         </div>
         <div class="cuerpo" style="margin-top: 400px; height: 300px;">
            <div class="mision">
                <h2>Misión</h2>
                <h3>
                En Panaderia MyE nos dedicamos a la elaboración y distribución de productos de panadería,
                 comprometidos con nuestros clientes en brindarles productos de gran calidad y sabor, con un servicio amable y oportuno.
                </h3>
            </div>
            <div class="vision">
                <h2>Visión</h2>
                <h3>
                Nuestro propósito en el 2023 es ser una empresa posicionada en el mercado, caracterizada por brindar productos de calidad e innovación, 
                ofreciendo una experiencia excepcional de producto y servicio al cliente.
                </h3>
            </div>
         </div>
         </div>
         <div>
         <?php
include 'cabecera/pie.php';
?>
         </div>
       