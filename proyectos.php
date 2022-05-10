<?php
$pg="proyectos";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="proyectos">
    <?php include_once "header.php";?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row"> 
            <div class="col-12">
                <p>Los siguientes son unos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row"> <!-- fila de las cajas y comienza la forma de realizarlas-->
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="../portfolio/images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <h2 class="p-3 d-block">ABM Clientes</h2>
                    <p class="p-3 pb-5 d-block">Alta, baja y modificación de un registro de clientes. Realizado en HTML,CSS,PHP,Boostrap y Json. </p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="b_blank" class="btn btn-rojo"> Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="b_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div> <!-- 56 a linea 69 forma de hacer una caja + boton, los div empujan otros divs para que quede funcional-->
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="../portfolio/images/abmventas.png" alt="Sistema de Gestión de Ventas" class="img-fluid">
                    <h2 class="p-3 d-block">Sistema de Gestión de Ventas</h2>
                    <p class="p-3 pb-5 d-block"> Sistema de gestión de clientes,productos y ventas.Realizado en HTML, CSS,PHP,MVC,Boostrap,Js,Ajax,jQuery y MySQL de base de datos.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="b_blank" class="btn btn-rojo"> Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="b_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="../portfolio/images/proyecto-integrador.png" alt="Proyecto Integrador" class="img-fluid">
                    <h2 class="p-3 d-block">Proyecto Integrador</h2>
                    <p class="p-3 pb-5 d-block">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript,jQuery, AJAX, HTML,CSS,Mercadopago con panel administrador,gestor de usuarios,módulo de permisos y funcionalidades a fines.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="b_blank" class="btn btn-rojo"> Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="b_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
   <footer class="container mt-5"> <!-- Falta colocar los links de git y linkedin una vez perfeccionados-->
        <div class="row">
            <div class="col-3">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div class="col-3 ">Sponsor <a href="https://depcsuite.com">DePcSuite</a></div>
            <div class="col-3" class="lit"> <a href="mailto:nahuel5831@gmail.com">nahuel5831@gmail.com</a></div>
        </div>

    </footer>
    <div class="whatsapp pt-3 pb-3 px-3"> <!-- Forma de colocar link de wsp + clase de boostrap-->
        <a href="http://api.whatsapp.com/send?phone=542215023514">
        <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>
</html>