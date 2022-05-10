<?php
$pg="contacto";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="contacto">
<?php include_once "header.php";?>
    <main class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row"> <!--Row es para indicar una nueva fila!-->
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o por whastapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <form action="" method="POST">
                            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                                class="form-control">
                    </div>
                    <div class="mb-3">
                        <form action="" method="POST">
                            <input type="tel" name="txtTel" id="txtTel" placeholder="Telefono/WhatsApp"
                                class="form-control">
                        </form>
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco">ENVIAR</button>
                    </div>
                </form>
            </div>

        </div>

    </main>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-3">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div class="col-3">Sponsor <a href="https://depcsuite.com">DePcSuite</a></div>
            <div class="col-3"> <a href="mailto:nahuel5831@gmail.com">nahuel5831@gmail.com</a></div>
        </div>

    </footer>
    <div class="whatsapp pt-3 pb-3 px-3">
        <a href="http://api.whatsapp.com/send?phone=542215023514">
        <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>