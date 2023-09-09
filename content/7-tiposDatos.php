<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tipos de datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="../styles/css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar" id="header">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.php.net/manual/es/intro-whatis.php">
                <!-- <img src="../media/img/logo.png" alt="Logo"> -->
                Tipos de datos
            </a>
            <button type="button" class="btn btn-light" id="btnReturn"><a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                    </svg>
                    </svg></i></a></button>
        </div>
    </nav>

    <section class="codeSection">
        <nav class="navbar codeHeader">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" fill="currentColor" class="bi bi-filetype-php d-inline-block align-text-top" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.295.185.522Zm4.48 2.666V11.85h-.79v1.626H4.153V11.85h-.79v3.999h.79v-1.714h1.682v1.714h.79Zm.703-3.999h1.6c.288 0 .533.06.732.179.2.117.354.276.46.477.105.201.158.427.158.677 0 .25-.054.476-.161.677-.106.199-.26.357-.463.474a1.452 1.452 0 0 1-.733.173H8.12v1.342h-.791V11.85Zm2.06 1.714a.795.795 0 0 0 .084-.381c0-.227-.061-.4-.184-.521-.123-.122-.294-.182-.513-.182h-.66v1.406h.66a.794.794 0 0 0 .375-.082.574.574 0 0 0 .237-.24Z" />
                    </svg>
                    Código PHP
                </a>
            </div>
        </nav>

        <!-- TERMINAL   -->
        <div class="container">
            <div class="container codeWindow">
                <div class="codeNav">🔴🟡🟢 </div>
                <div class="codeContent">

                    <h5>// Enteros: Integers</h5>
                    <p>
                        <span class="spanPhp">&lt;?php</span> <br>
                        <span class="spanVariable">$positivo</span>= 10;<br>
                        <span class="spanVariable">$cero</span>= 0;<br>
                        <span class="spanVariable">$negativo</span>= -50;<br>
                        <br>
                        echo <span class="spanVariable">$positivo</span> . ' >> ' . <span class="spanVariable">$cero</span> . ' >> ' . <span class="spanVariable">$negativo</span>;
                        <br>
                        <span class="spanPhp"> ?&gt;</span>
                    </p>
                    <br>

                    <h5>// Punto flotante (reales): Floats, doubles</h5>
                    <p>
                        <span class="spanPhp">&lt;?php</span> <br>
                        <span class="spanVariable">$numero</span>= 5.68;<br>
                        <span class="spanVariable">$exponente_1</span>= 0.01234e2;<span class="spanComentario"> // 0.01234 + 10^2</span><br>
                        <span class="spanVariable">$exponente_2</span>= 1234E-3;<span class="spanComentario"> // 1234 * 10^-3</span><br>
                        <br>
                        echo <span class="spanVariable">$numero</span> . ' >> ' . <span class="spanVariable">$exponente_1</span> . ' >> ' . <span class="spanVariable">$exponente_2</span>;
                        <br>
                        <span class="spanPhp"> ?&gt;</span>
                    </p>
                    <br>

                    <h5>// Cadenas: Strings</h5>
                    <p>
                        <span class="spanPhp">&lt;?php</span> <br>
                        <span class="spanVariable">$nombre</span>= "Bruce";<br>
                        <span class="spanVariable">$apellido</span>= 'Wayne';<br>
                        <br>
                        <span class="spanComentario"> // Opciones de concatenación </span><br>

                        echo "Mi nombre es <span class="spanVariable">$nombre</span> y mi apellido es <span class="spanVariable">$apellido</span>";<br>

                        echo 'Yo soy ' . <span class="spanVariable">$nombre</span> .' ' . <span class="spanVariable">$apellido</span>;
                        <br>
                        <span class="spanPhp"> ?&gt;</span>
                    </p>
                    <br>

                    <h5>// Booleanos</h5>
                    <p>
                        <span class="spanPhp">&lt;?php</span> <br>
                        <span class="spanVariable">$verdadero</span>= true;<br>
                        <span class="spanVariable">$falso</span>= false;<br>
                        <br>
                        <span class="spanComentario"> //false (0 - No se muestra) </span><br>

                        echo "Valor verdadero: <span class="spanVariable">$verdadero</span>";
                        <br>
                        echo "Valor falso: <span class="spanVariable">$falso</span>";

                        <br>
                        <span class="spanPhp"> ?&gt;</span>
                    </p>
                    <br>

                    <h5>// Arrays</h5>
                    <p>
                        <span class="spanPhp">&lt;?php</span> <br>

                        <span class="spanVariable">$alimentosSaludables</span> = array('pera', 'piña', 'manzana');<br>
                        <span class="spanVariable"> $alimentosEvitar</span> = ['pizza', 'bollos', 'azúcar'];<br>
                        <br>

                        <span class="spanComentario">// Formato visualización</span>
                        <br>
                        <span class="spanComentario">// print_r</span><br>
                        print_r(<span class="spanVariable">$alimentosSaludables</span>);<br>
                        <span class="spanComentario">// print_r -> incluyendo &lt;pre&gt;</span><br>
                        echo '&lt;pre&gt;';
                        <br>
                        print_r(<span class="spanVariable">$alimentosEvitar</span>);<br>
                        echo '&lt;/pre&gt;';<br>
                        <br>

                        <span class="spanComentario">// Acceso según su índice</span><br>
                        echo "<span class="spanVariable">$alimentosSaludables</span>[0] - <span class="spanVariable">$alimentosSaludables</span>[1] - <span class="spanVariable">$alimentosSaludables</span>[2] ";<br>
                        echo '&lt;br&gt;'; <br>
                        echo "<span class="spanVariable"> $alimentosEvitar</span>[0] - <span class="spanVariable"> $alimentosEvitar</span>[1] - <span class="spanVariable"> $alimentosEvitar</span>[2] ";

                        <br>
                        <span class="spanPhp"> ?&gt;</span>
                    </p>
                    <br>

                    <h5>// Arrays asociativos</h5>
                    <p>
                        <span class="spanPhp">&lt;?php</span> <br>
                        <span class="spanVariable"> $edades</span>= ['Peter'=> 29, 'Bruce' => 50, 'Clark' => 43]; <br>
                        <br>
                        echo '&lt;pre&gt;';
                        <br>
                        print_r(<span class="spanVariable">$edades</span>);<br>

                        echo '&lt;/pre&gt;';<br>
                        <br>
                        <span class="spanComentario">// Acceso</span><br>
                        echo $edades['Peter'];
                        <br>
                        <span class="spanPhp"> ?&gt;</span>
                    </p>
                    <br>

                    <h5>// Valores que son 'false'</h5>
                    <p>
                        <span class="spanPhp">&lt;?php</span> <br>

                        <span class="spanVariable">$zero</span>=0;<br>
                        <span class="spanVariable">$cadenaVacia</span>='';<br>
                        <span class="spanVariable">$nulo</span>=null;<br>
                        <span class="spanVariable">$arrayVacio</span>=[];<br>
                        <br>
                        echo 'Valor de $zero: '. <span class="spanVariable">$zero</span> . '&lt;br&gt;';<br>
                        echo 'Valor de $cadenaVacia: '. <span class="spanVariable">$cadenaVacia</span> . '&lt;br&gt;';<br>
                        echo 'Valor de $nulo: '. <span class="spanVariable">$nulo</span> . '&lt;br&gt;';<br>
                        print_r(<span class="spanVariable">$arrayVacio</span>);<br>

                        <span class="spanPhp"> ?&gt;</span>
                    </p>


                </div>
            </div>
        </div>


    </section>


    <section class="resultSection">

        <nav class="navbar resultHeader">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" fill="currentColor" class="bi bi-browser-safari d-inline-block align-text-top" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm.25-14.75v1.5a.25.25 0 0 1-.5 0v-1.5a.25.25 0 0 1 .5 0Zm0 12v1.5a.25.25 0 1 1-.5 0v-1.5a.25.25 0 1 1 .5 0ZM4.5 1.938a.25.25 0 0 1 .342.091l.75 1.3a.25.25 0 0 1-.434.25l-.75-1.3a.25.25 0 0 1 .092-.341Zm6 10.392a.25.25 0 0 1 .341.092l.75 1.299a.25.25 0 1 1-.432.25l-.75-1.3a.25.25 0 0 1 .091-.34ZM2.28 4.408l1.298.75a.25.25 0 0 1-.25.434l-1.299-.75a.25.25 0 0 1 .25-.434Zm10.392 6 1.299.75a.25.25 0 1 1-.25.434l-1.3-.75a.25.25 0 0 1 .25-.434ZM1 8a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 0 .5h-1.5A.25.25 0 0 1 1 8Zm12 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 1 1 0 .5h-1.5A.25.25 0 0 1 13 8ZM2.03 11.159l1.298-.75a.25.25 0 0 1 .25.432l-1.299.75a.25.25 0 0 1-.25-.432Zm10.392-6 1.299-.75a.25.25 0 1 1 .25.433l-1.3.75a.25.25 0 0 1-.25-.434ZM4.5 14.061a.25.25 0 0 1-.092-.341l.75-1.3a.25.25 0 0 1 .434.25l-.75 1.3a.25.25 0 0 1-.342.091Zm6-10.392a.25.25 0 0 1-.091-.342l.75-1.299a.25.25 0 1 1 .432.25l-.75 1.3a.25.25 0 0 1-.341.09ZM6.494 1.415l.13.483a.25.25 0 1 1-.483.13l-.13-.483a.25.25 0 0 1 .483-.13ZM9.86 13.972l.13.483a.25.25 0 1 1-.483.13l-.13-.483a.25.25 0 0 1 .483-.13ZM3.05 3.05a.25.25 0 0 1 .354 0l.353.354a.25.25 0 0 1-.353.353l-.354-.353a.25.25 0 0 1 0-.354Zm9.193 9.193a.25.25 0 0 1 .353 0l.354.353a.25.25 0 1 1-.354.354l-.353-.354a.25.25 0 0 1 0-.353ZM1.545 6.01l.483.13a.25.25 0 1 1-.13.483l-.483-.13a.25.25 0 1 1 .13-.482Zm12.557 3.365.483.13a.25.25 0 1 1-.13.483l-.483-.13a.25.25 0 1 1 .13-.483Zm-12.863.436a.25.25 0 0 1 .176-.306l.483-.13a.25.25 0 1 1 .13.483l-.483.13a.25.25 0 0 1-.306-.177Zm12.557-3.365a.25.25 0 0 1 .176-.306l.483-.13a.25.25 0 1 1 .13.483l-.483.13a.25.25 0 0 1-.306-.177ZM3.045 12.944a.299.299 0 0 1-.029-.376l3.898-5.592a.25.25 0 0 1 .062-.062l5.602-3.884a.278.278 0 0 1 .392.392L9.086 9.024a.25.25 0 0 1-.062.062l-5.592 3.898a.299.299 0 0 1-.382-.034l-.005-.006Zm3.143 1.817a.25.25 0 0 1-.176-.306l.129-.483a.25.25 0 0 1 .483.13l-.13.483a.25.25 0 0 1-.306.176ZM9.553 2.204a.25.25 0 0 1-.177-.306l.13-.483a.25.25 0 1 1 .483.13l-.13.483a.25.25 0 0 1-.306.176Z" />
                    </svg>
                    NAVEGADOR
                </a>
            </div>
        </nav>

        <!-- NAVEGADOR   -->
        <div class="container">
            <div class="container resutlWindow">
                <div class="resultNav">🔴🟡🟢 </div>
                <div class="resultContent">

                    <h5>// Enteros: Integers</h5>
                    <p>
                        <?php
                        $positivo = 10;
                        $cero = 0;
                        $negativo = -50;
                        echo $positivo . ' >> ' . $cero . ' >> ' . $negativo;
                        ?>
                    </p>
                    <br>
                    <h5>// Punto flotante (reales): Floats, doubles</h5>
                    <p>
                        <?php
                        $numero = 5.68;
                        $exponente_1 = 0.01234e2; // 0.01234 + 10^2
                        $exponente_2 = 1234E-3; // 1234 * 10^-3
                        echo $numero . ' >> ' . $exponente_1 . ' >> ' . $exponente_2;
                        ?>
                    </p>

                    <br>
                    <h5>// Cadenas: Strings</h5>
                    <p>
                        <?php
                        $nombre = "Bruce";
                        $apellido = 'Wayne';

                        echo "Mi nombre es $nombre y mi apellido es $apellido<br>";
                        echo 'Yo soy ' . $nombre . ' ' . $apellido;
                        ?>
                    </p>
                    <br>
                    <h5>// Booleanos</h5>
                    <p>
                        <?php
                        $verdadero = true;
                        $falso = false;

                        echo "Valor verdadero: $verdadero<br>";
                        echo "Valor falso: $falso";

                        ?>
                    </p>
                    <br>
                    <h5>// Arrays</h5>
                    <p>
                        <?php
                        $alimentosSaludables = array('pera', 'piña', 'manzana');
                        $alimentosEvitar = ['pizza', 'bollos', 'azúcar'];

                        print_r($alimentosSaludables);

                        echo '<pre>';
                        print_r($alimentosEvitar);
                        echo '</pre>';

                        // acceso
                        echo "$alimentosSaludables[0] - $alimentosSaludables[1] -  $alimentosSaludables[2] ";
                        echo '<br>';
                        echo "$alimentosEvitar[0] - $alimentosEvitar[1] -  $alimentosEvitar[2] ";
                        ?>
                    </p>
                    <br>

                    <h5>// Arrays asociativos</h5>
                    <p>
                        <?php
                        $edades = ['Peter' => 29, 'Bruce' => 50, 'Clark' => 43];

                        echo '<pre>';
                        print_r($edades);
                        echo '</pre>';
                        echo $edades['Peter'];
                        ?>
                    </p>
                    <br>

                    <h5>// Valores que son 'false'</h5>
                    <p>
                        <?php
                        $zero = 0;
                        $cadenaVacia = '';
                        $nulo = null;
                        $arrayVacio = [];

                        echo 'Valor de $zero: ' . $zero . '<br>';
                        echo 'Valor de $cadenaVacia: ' . $cadenaVacia . '<br>';
                        echo 'Valor de $nulo: ' . $nulo . '<br>';
                        print_r($arrayVacio);
                        ?>
                    </p>





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