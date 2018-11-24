<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas</title>
    <base target="_self">
    <meta name="description" content="Example of a sidebar menu for Bootstrap 4. It responsively changes height on smaller screens and submenus overlay the collapse version of the navbar that shows icons only. FontAwesome icons are used to toggle the open close state of menu items that contain a submenu.">
    <meta name="google" value="notranslate">
    <link rel="shortcut icon" href="/images/cp_ico.png">

    <!--stylesheets / link tags loaded here-->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/calendario.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">





    <style type="text/css">
        body{
            background-color: #f7f6f3;
        }
        #sidebar .list-group-item {
            background-color: #333333;
            color: #ccc;
            border-left: 0;
            border-right: 0;
            border-top:0;
            border-bottom:0;
            margin-bottom: .25rem;
        }
        #subtitulo{
            font-size: 1.2rem;
        }

        #titulo{
            font-weight: bold;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            text-align: center;
            padding: 1.5rem 0;
        }
        #subtitulo:hover{
            width: 100%;
            margin-left: 10px;
            font-size: 1.4rem;
        }
        #subtitulo:active{
            width: 100%;
            margin-left: 10px;

        }


    </style>

</head>
<body style="height: 100vh; overflow-x: hidden" >
<div class="container-fluid" style="height: 100%">
    <div class="row" style="height: 100%">
        <!---Menu Lateral--->
        <div class="col-md-2 col-xs-1 p-l-0 p-r-0 collapse in navmenu navmenu navmenu-default navmenu-fixed-left offcanvas" id="sidebar" aria-expanded="true" style="height: 100%;box-shadow: 5px 1px 20px #888888;position: fixed; z-index: 3">
            <div class="list-group panel" style="height: 100%;background-color: #222;">

                <h1 class="list-group-item collapsed" data-parent="#sidebar" id="titulo" style="background-color: #222"><span class="hidden-sm-down"><a href="home.php" style="text-decoration: none;color: #cccccc">CASAS</a></span></h1>

                <div class="row menuoption"><a href="?theme=compras" class="list-group-item collapsed" data-parent="#sidebar" id="subtitulo" style="padding: 1rem 2rem;box-shadow: 10px -1px 12px -7px #888888;"><div style="width: 35px;float: left;text-align: center"><i class="fa fa-building"></i></div> <span class="hidden-sm-down">Compras</span></a></div>

                <div class="row menuoption"><a href="?theme=vendas" class="list-group-item collapsed" data-parent="#sidebar" id="subtitulo" style="padding: 1rem 2rem;box-shadow: 10px -1px 12px -7px #888888;"><div style="width: 35px;float: left;text-align: center"><i class="fa fa-euro"></i></div> <span class="hidden-sm-down"> Vendas</span></a></div>

                <div class="row menuoption"><a href="?theme=aluguer" class="list-group-item collapsed" data-parent="#sidebar" id="subtitulo" style="padding: 1rem 2rem;box-shadow: 10px -1px 12px -7px #888888;"><div style="width: 35px;float: left;text-align: center"><i class="fa fa-key"></i></div> <span class="hidden-sm-down"> Aluguer </span></a></div>

                <div class="row menuoption"><a href="?theme=turismo" class="list-group-item collapsed" data-parent="#sidebar" id="subtitulo" style="padding: 1rem 2rem;box-shadow: 10px -1px 12px -7px #888888;"><div style="width: 35px;float: left;text-align: center"><svg  style="width: 25px" aria-hidden="true" data-prefix="fas" data-icon="luggage-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-luggage-cart fa-w-20 fa-3x"><path fill="currentColor" d="M224 320h32V96h-32c-17.67 0-32 14.33-32 32v160c0 17.67 14.33 32 32 32zm352-32V128c0-17.67-14.33-32-32-32h-32v224h32c17.67 0 32-14.33 32-32zm48 96H128V16c0-8.84-7.16-16-16-16H16C7.16 0 0 7.16 0 16v32c0 8.84 7.16 16 16 16h48v368c0 8.84 7.16 16 16 16h82.94c-1.79 5.03-2.94 10.36-2.94 16 0 26.51 21.49 48 48 48s48-21.49 48-48c0-5.64-1.15-10.97-2.94-16h197.88c-1.79 5.03-2.94 10.36-2.94 16 0 26.51 21.49 48 48 48s48-21.49 48-48c0-5.64-1.15-10.97-2.94-16H624c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM480 96V48c0-26.51-21.49-48-48-48h-96c-26.51 0-48 21.49-48 48v272h192V96zm-48 0h-96V48h96v48z" class=""></path></svg></div> <span class="hidden-sm-down"> Turismo </span></a></div>

                <div class="row menuoption"><a href="?theme=contas" class="list-group-item collapsed" data-parent="#sidebar" id="subtitulo" style="padding: 1rem 2rem;box-shadow: 10px -1px 12px -7px #888888;"><div style="width: 35px;float: left;text-align: center"><i class="fa fa-balance-scale"></i></div> <span class="hidden-sm-down"> Contas </span></a></div>

            </div>
        </div>

        <!---/Menu Lateral--->

        <main class="col-md-10 col-xs-11 p-l-3 p-r-3 p-t-3" style="position: absolute; left: 18%; margin-right: 3rem;">
            <?php
            if (isset($_GET["theme"])) {
                if ($_GET["theme"] == "compras") {
                    require_once "pages/compras.php";
                } elseif ($_GET["theme"] == "vendas") {
                    require_once "pages/vendas.php";
                } elseif ($_GET["theme"] == "aluguer") {
                    require_once "pages/aluguer.php";
                } elseif ($_GET["theme"] == "turismo") {
                    require_once "pages/turismo.php";
                } elseif ($_GET["theme"] == "contas") {
                    require_once "pages/contas.php";
                } else {
                    require_once "pages/error.php";
                }
            }
            else{
                require_once "pages/index.php";
            }
            ?>
        </main>


    </div>
</div>

<!--scripts loaded here-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>



<script>

</script>



</body>
</html>
