
<?php
include 'cabecera/cabecera.php';
?><style>
@import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');    .cuerpos{
float: left;
margin-top: 20px;
margin-left: 10px;
text-align: center;
font-family: 'Gluten', cursive;
}
a{
font-family: 'Gluten', cursive;
}
</style>
    <title>Inicio</title>
        <div id="contenedor">
            <div id="carrusel" style="margin-top: 20px; margin-left: 10%; margin-right: 10%">
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="2000">
                            <img src="images/pandequeso.jpg " class="d-block w-100" width="80%" height="300px">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="images/pastel.jpg" class="d-block w-100" width="80%" height="300px">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="images/dulce.jpg" class="d-block w-100" width="80%" height="300px">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="bannerbienvenido" style="margin-left:10%; margin-right:10%;margin-top:20px;">
                <img src="images/bienvenido.png" style="width:100%; height: 250px">
            </div>
            <div class="cuerpo" style="margin-top: 20px;margin-left:50px;height: 400px;">
                <div class="cuerpos" style="margin-left:6%;">
                    <iframe src="https://giphy.com/embed/q7GFqSX6m0tMPF8msF" width="480" height="300" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                </div>
                <div class="cuerpos" style="width: 480px;height: 300px;">
                    <h3>La empresa se llama Pasteleria MyE, venta y preparación de almojábanas, pandequesos, todo tipo de pan, pastelería y otros
                        servicios para colegios, escuelas, banquetes, de consumo personal y demás.
                        Ubicados en el Sena de pedregal, con altos niveles de satisfacción.</h3>
                </div>
            </div>
         </div>
            <div><?php
            include 'cabecera/pie.php';
            ?></div>
