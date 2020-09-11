<?php
include ('_head.php'); ?>
<body class="fondo-de-contacto">
<?php
    include ('_header.php'); ?>
<!-- Contenedor general -->
<div class="main-contacto-form">
<!-- primer items del contenedor -->

    <img src="assets/img/inicio/Oficina04.jpg" alt="" class="main-contenido__general--img">
<!-- Segundo items de contenedor -->
    <div class="main-contacto__formularios">
        <!-- titulo y logo de contactanos -->
    <div class="titulo-formulario">
            <img src="assets/img/iconos/Icono_Logo.png" alt="Icono del logo" class="main-contenido__logo--img">
            <h1>Contactanos
            <div class="line-contacto"></div>
            </h1>
    </div>
        <form action="" class="main-formulario">
            <div class="input-box__nombre">
                <label for="txtnombre">Nombre y apellidos</label>
                <input type="text" id="txtnombre" class="input-nombre">
            </div>

            <div class="input-box__celularEmail">
                <div class="celular">
                    <label for="txtcelular">Celular</label>
                    <input type="text" id="txtcelular" class="inputcelular">
                </div>
                <div class="email">
                    <label for="txtE-email">E-mail</label>
                    <input type="text" id="txtE-mail" class="inputcelular">
                </div>
            </div>
            <div class="input-box__mensaje">
                <label for="txtMensaje">Mensaje:</label>
                <textarea class="textarea" name="" id="txtMensaje" cols="30" rows="10"></textarea>
            </div>
        </form>
            
    </div>
</div>

<?php
include ('_footer.php');
?>

<?php
include ('import-script.php');
?>
<body>
