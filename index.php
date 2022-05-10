<?php
$pg="index";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>
<body id="index">
<?php include_once "header.php";?>
    <main id="inicio" class="container">
        <div class="row">
            <div class="col-12 div-pc text-center">
                <a href="proyectos.php"><img src="../portfolio/images/incono/pcfondo.svg" class="pc img-fluid" alt=""></a>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                    <div class="input-home">
                        <p class="p-1">Bienvenid@s a mi página personal</p>
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
                    
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