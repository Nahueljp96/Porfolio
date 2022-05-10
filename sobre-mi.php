<?php
$pg="sobre-mi";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
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

<body id="sobre-mi">
<?php include_once "header.php";?>
    <main class="">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5  mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre Mí</h1>
                    <p class="pb-sm-5">Programador Web Full Stack, entuciasta por la tecnología, auto didacta y amante de los desafios.</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                    <!-- el "Offset-sm-2" sirve para desplazar bien la img a la derecha !-->
                    <img src="../portfolio/images/nahuel.png" alt="Nahuel" title="Nahuel Ponce" class="img-fluid imagen-circle img-yo">
                </div>
            </div>    
        </div>
        <section id="stack" class="color-gradiente pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center"> <!-- forma de hacer las cajas + la propiedad "card" para darle forma-->
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="../portfolio/images/stack-tecnologico/html.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="../portfolio/images/stack-tecnologico/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="../portfolio/images/stack-tecnologico/Bootstrap.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="../portfolio/images/stack-tecnologico/php.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="../portfolio/images/stack-tecnologico/Laravel.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="../portfolio/images/stack-tecnologico/git.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 mysql">
                            <h3>MySQL</h3>
                            <img class="img-fluid d-block mx-auto" width="90" src="../portfolio/images/stack-tecnologico/MySQL.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="../portfolio/images/stack-tecnologico/javascript.jpeg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="../portfolio/images/stack-tecnologico/react.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>jQuery</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="../portfolio/images/stack-tecnologico/jQuery.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img class="img-fluid d-block mx-auto" width="110" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Apache_Software_Foundation_Logo_%282016%29.svg/1200px-Apache_Software_Foundation_Logo_%282016%29.svg.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Mercadopago</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg">
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i>Experiencia Laboral</h2> <!-- Etiqueta i la usamos en este caso para poder incluir el class "fas fa..." sin que nos afecte el texto del h2-->
                </div>
            </div>
            <div class="row shadow bg-white rounded"> <!-- "shadow bg-white rounded" es boostrap para darle el bordeado gris-->
                <div class="col-2 p-4 my-auto d-none d-sm-block">
                    <img src="../portfolio/images/incono/enfermeria.png" alt="" class="img-fluid">
                </div>    
                <div class="col-12- col-sm-10 p-3">
                    <h3>Enfermero Profesional</h3>
                    <h4>Estadio Unico La Plata</h4>
                    <h5>Enero-2021-Actualidad</h5>
                    <p>Enfermero vacunador covid-19, asistencia de personas y asesoramiento de las mismas respecto a cuidados, signos y sintomas de las vacunas covid-19.</p>
                </div>
                <div class="row">
                    <div class="col-2 p-4 my-auto d-none d-sm-block">
                        <img src="../portfolio/images/incono/reparador de pc.png" alt="" class="img-fluid">
                    </div>    
                    <div class="col-12- col-sm-10 p-3">
                        <h3>Técnico reparador de Pc</h3>
                        <h4>La Plata</h4>
                        <h5>Marzo-2017-Actualidad</h5>
                        <p>Reparador de pc, asistencia al usuario y personal, mantenimiento de redes informáticas y servidores locales.</p>
                    </div>
                <div class="row">
                    <div class="col-2 p-4 my-auto d-none d-sm-block">
                        <img src="../portfolio/images/incono/tecno.png" alt="" class="img-fluid">
                    </div>    
                    <div class="col-12- col-sm-10 p-3">
                        <h3>Nahuel Tecno</h3>
                        <h4>La Plata</h4>
                        <h5>Marzo-2021-Actualidad</h5>
                        <p>Venta de tecnología, asistencia al usuario, reparación de celulares/pc y mantenimiento</p>
                    </div>
                <div class="row">
                    <div class="col-2 p-4 my-auto d-none d-sm-block">
                        <img src="../portfolio/images/incono/almacen.png" alt="" class="img-fluid">
                    </div>    
                    <div class="col-12- col-sm-10 p-3">
                        <h3>Distribuidora Almacen Teresa</h3>
                        <h4>La Plata, Romero</h4>
                        <h5>Junio-2018-Diciembre-2020</h5>
                        <p>Encargado del area de ventas, gestión de empleados y proveedores</p>
                    </div>
            </div>            
        </section>
        <section id="formacion" class="container">
            <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2> <!-- Etiqueta i la usamos en este caso para poder incluir el class "fas fa..." sin que nos afecte el texto del h2-->
                    </div>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="../portfolio/images/trabajo-studios/logo-depcsuite.svg" class="img-fluid" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Programador Web Full Stack</h3>
                            <h4>DePcsuite Academia de programación</h4>
                            <h5>2022</h5>
                            <p>https://depcsuite.com/?v=d72a48a8ebd2</p>
                        </div>
                    </div>
                </div>    
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="../portfolio/images/trabajo-studios/hospital.png" class="img-fluid" title="Hospital">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Enfermero Profesional</h3>
                            <h4>Hospital Dr. Alejandro Korn</h4>
                            <h5>2017-2020</h5>
                            <p>https://www.gba.gob.ar/content/regi%C3%B3n_sanitaria_xi_19</p>
                        </div>
                    </div>
                </div>    
        </section>  
        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="../portfolio/images/trabajo-studios/sicos.png" class="img-fluid" title="Sicos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Diplomatura en Ténico Reparador de Pc</h3>
                            <h4>Sicos Informática</h4>
                            <h5>Expedición Febrero:2021</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        <section id="idiomas">   <!-- Cajasde idioma y hobbie, junto al ID "idiomas" propiedad card y boostrap para darle color y forma-->
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS -Básico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Taekwondo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
    </main>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-3">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div class="col-3 lit">Sponsor <a href="https://depcsuite.com"class="">DePcSuite</a></div>
            <div class="col-3 lit"> <a href="mailto:nahuel5831@gmail.com">nahuel5831@gmail.com</a></div>
        </div>
    </footer>
    <div class="whatsapp pt-3 pb-3 px-3">
        <a href="http://api.whatsapp.com/send?phone=542215023514">
        <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>