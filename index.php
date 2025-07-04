<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');

$id = (isset($_GET['id'])) ? $_GET['id'] : '';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atención Psicológica - UTFV</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="icon" href="favicon.ico?v=2" type="image/x-icon">
</head>

<body>
    <div class="containe-fluid">
        <div id="app">
            <div class="row m-0 p-0">
                <div class="col-md-12 m-0 p-0">
                    <!-- MENÚ -->
                    <?php include 'assets/inc/menu.inc'; ?>
                    <!-- MENÚ -->

                    <!-- CONTENIDO -->
                    <div class="containe animate__animated animate__fadeIn">
                        <?php
                        switch ($id) {
                            case 'inicio':
                                include 'assets/inc/inicio.inc';
                                break;

                            case 'conocenos':
                                include 'assets/inc/conocenos.inc';
                                break;

                            case 'sesion':
                                include 'assets/inc/sesion.inc';
                                break;

                            case 'resitro':
                                include 'assets/inc/resitro.inc';
                                break;
                            
                            default:
                                include 'assets/inc/inicio.inc';
                                break;
                        }
                        ?>
                    </div>
                    <!-- CONTENIDO -->
                    <?php include 'assets/inc/footer.inc'; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v19.0"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>