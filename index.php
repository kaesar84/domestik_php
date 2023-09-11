<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Índice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar" id="header">
        <div class="container-fluid" id="logoCenter">
            <a class="navbar-brand " href="https://www.php.net/manual/es/intro-whatis.php">
                <img src="media/img/logo.png" alt="Logo">
            </a>
        </div>
    </nav>


    <section class="codeSection">
        <nav class="navbar codeHeader">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="" fill="currentColor" class="bi bi-list-columns" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 0 .5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 2h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 4h10a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 6h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 8h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z" />
                    </svg>
                    Índice
                </a>
            </div>
        </nav>

        <!-- TERMINAL   -->
        <div class="container">
            <div class="container codeWindow">
                <div class="codeNav">🔴🟡🟢 </div>
                <div class="codeContent">

                    <div class="accordion accordion-flush" id="acordeonIndice">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Introducción PHP
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#acordeonIndice">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="content/1-holaMundo.php">Hola Mundo</a></li>
                                        <li><a href="content/2-variables.php">Variables</a></li>
                                        <li><a href="content/3-constantes.php">Constantes</a></li>
                                        <li><a href="content/4-funciones.php">Funciones</a></li>
                                        <li><a href="content/5-funcionesParam.php">Funciones con parámetros</a></li>
                                        <li><a href="content/6-depuradoErrores.php">Depurado de erroes</a></li>
                                        <li><a href="content/7-tiposDatos.php">Tipos de datos</a></li>
                                        <li><a href="content/8-loops.php">Loops</a></li>
                                        <li><a href="content/9-fechas.php">Fechas</a></li>
                                        <li><a href="content/10-variablesSuperglobales.php">Variable superglobales</a></li>
                                        <li><a href="content/11-operadores.php">Operadores</a></li>
                                        <li><a href="content/12-estructurasControl.php">Estructuras de control</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Fundamentos 2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#acordeonIndice">
                                <div class="accordion-body">
                                    <li><a href="">Lorem ipsum dolor sit amet consectet</a></li>
                                    <li><a href="">Lorem ipsum dolor sit amet consectet</a></li>
                                </div>
                            </div>
                        </div>


                        
                    </div>



                </div>
            </div>
        </div>


    </section>



    <nav class="navbar" id="footer">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.php.net/manual/es/intro-whatis.php">
                PHP Version 8.2.4
            </a>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>

<!-- echo '&lt;br&gt;'; <br> -->