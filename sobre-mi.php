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
    <header class="container">
        <nav class="navbar navbar-expand-md  mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4 active" href="sobre-mi.php">Sobre Mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-rojo px-4">Descargar mi CV <i class="fa-solid fa-file-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
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
                    <img src="../portfolio/images/trabajo-studios/Enfermería.jpg" alt="" class="img-fluid">
                </div>    
                <div class="col-12- col-sm-10 p-3">
                    <h3>Enfermero Profesional</h3>
                    <h4>Estadio Unico La Plata</h4>
                    <h5>Enero-2021-Actualidad</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, non id ea similique tenetur dolorem voluptatibus delectus vero esse ratione iste tempore, maiores eius deleniti, error a aspernatur recusandae asperiores.</p>
                </div>
                <div class="row">
                    <div class="col-2 p-4 my-auto d-none d-sm-block">
                        <img src="../portfolio/images/trabajo-studios/Enfermería.jpg" alt="" class="img-fluid">
                    </div>    
                    <div class="col-12- col-sm-10 p-3">
                        <h3>Enfermero Profesional</h3>
                        <h4>Estadio Unico La Plata</h4>
                        <h5>Enero-2021-Actualidad</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, non id ea similique tenetur dolorem voluptatibus delectus vero esse ratione iste tempore, maiores eius deleniti, error a aspernatur recusandae asperiores.</p>
                    </div>
                <div class="row">
                    <div class="col-2 p-4 my-auto d-none d-sm-block">
                        <img src="../portfolio/images/trabajo-studios/Enfermería.jpg" alt="" class="img-fluid">
                    </div>    
                    <div class="col-12- col-sm-10 p-3">
                        <h3>Enfermero Profesional</h3>
                        <h4>Estadio Unico La Plata</h4>
                        <h5>Enero-2021-Actualidad</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, non id ea similique tenetur dolorem voluptatibus delectus vero esse ratione iste tempore, maiores eius deleniti, error a aspernatur recusandae asperiores.</p>
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
                            <img src="images/ean.jpg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Licenciado en Tecnología</h3>
                            <h4>Escuela Argentina de Negocios</h4>
                            <h5>2015 – 2020</h5>
                            <p>http://www.ean.edu.ar/</p>
                        </div>
                    </div>
                </div>    
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/ean.jpg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Licenciado en Tecnología</h3>
                            <h4>Escuela Argentina de Negocios</h4>
                            <h5>2015 – 2020</h5>
                            <p>http://www.ean.edu.ar/</p>
                        </div>
                    </div>
                </div>    
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/ean.jpg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Licenciado en Tecnología</h3>
                            <h4>Escuela Argentina de Negocios</h4>
                            <h5>2015 – 2020</h5>
                            <p>http://www.ean.edu.ar/</p>
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
            <div class="col-3 lit">Sponsor <a href="https://depcsuite.com"class="link-info">DePc Suite</a></div>
            <div class="col-3" class="lit"> <a href="mailto:nahuel5831@gmail.com">nahuel5831@gmail.com</a></div>
            

        </div>

    </footer>
    <div class="whatsapp pt-3 pb-3 px-3">
        <a href="http://api.whatsapp.com/send?phone=542215023514">
        <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>