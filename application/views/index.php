<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/San_Jorge/plugin/css/nav.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://localhost/San_Jorge/plugin/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://localhost/San_Jorge/plugin/css/Colores.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/San_Jorge/plugin/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://localhost/San_Jorge/plugin/js/registrar.js"></script>
    <script src="http://jquerymodal.com/jquery.modal.js"></script>
    <script src="http://localhost/San_Jorge/plugin/js/jquery.openCarousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://localhost/San_Jorge/plugin/js/easing.js"></script>
    <script type="text/javascript" src="http://localhost/San_Jorge/plugin/js/move-top.js"></script>
    <title>Drogueria San Jorge #1</title>
    <link href="http://localhost/San_Jorge/plugin/css/style1.css" rel="stylesheet" type="text/css" media="all"/>
    <script>
        $(document).ready(function(){
            $("#search").keyup(function(){
                var str=  $("#search").val();
                if(str == "") {
                    $( "#txtHint" ).html("<b></b>");
                }else {
                    $.get( "<?php echo base_url();?>Drogueria/search?id="+str, function( data ){
                         $( "#txtHint" ).html( data )
                    });
                }
            });
        });
    </script>
</head>
<body onload="document.getElementById('id01').style.display='block'">
<h6 class=" text-center info">Línea de Atencion Valledupar-Cesar Tele: <strong>| Centro: (035)-5725115 - 3233705391 | San Jorge: (035)-5802431 - 3226008317 | Villa el Rosario: (035)-5842090 - 3226017032 | <strong>Correo: Drogueriasanjorgen1@gmail.com</strong></strong></h6>
<div class="container text-center page-header">
    <MARQUEE WIDTH=50% HEIGHT=100% ALIGN=BOTTOM> <h1 class="text-center do t">Drogueria San Jorge N°1</h1></MARQUEE>
</div>
<nav class="navbar navbar-default1">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Drogueria San Jorge #1</a>
        </div>
        <ul class="nav navbar-nav menu_gral">
            <li><a href="#">Inicio</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dermocosmética<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">cuidado capilar</a></li>
                    <li><a href="#">dermolimpiadores</a></li>
                    <li><a href="#">protección solar</a></li>
                    <li><a href="#">cicatrizante</a></li>
                    <li><a href="#">hidratantes</a></li>
                    <li><a href="#">antiestrias</a></li>
                    <li><a href="#">antiedad</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Para el Bebe<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Accesorios</a></li>
                    <li><a href="#">Alimentos</a></li>
                    <li><a href="#">Higiene Para el Bebe</a></li>
                    <li><a href="#">leche para el Bebe</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Promociones<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Abril</a></li>
                    <li><a href="#">Mayo</a></li>
                </ul>
            </li>
        </ul>

        <form class="navbar-form navbar-left" method="get">
            <div class="input-group">
                <!-- <input type="text" class="form-control" placeholder="Busca el Producto que deseas"> -->
                <input type="text" id="search" name="buscar"  placeholder="Buscar Producto">
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <?php
            if(!empty($_SESSION['email'])){
               $link = base_url().'account/profile';
                echo '<li><a href="'.$link.'"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                <li><a href="account/logout"><span class="glyphicon glyphicon-user"></span>Salir</a></li>';
            }else{
                if(!empty($authUrl))
                {
                    echo '<li><a href="account/registration"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
                <li><a href="account/login"><span class="glyphicon glyphicon-user"></span> Iniciar Seccíon</a></li>';
                }
                else
                {
                    echo '<li><a href=""><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                <li><a href="account/logout"><span class="glyphicon glyphicon-user"></span>Salir</a></li>';
                }
            }
            ?>
    </div>
</nav>
<p id="txtHint" style="padding-top:50px; text-align:center;"></p>
<img src="http://localhost/San_Jorge/plugin/img/domicilios.jgp" class="center-block" style="width: 400px; height: 300px;">

<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="wrap">
                <h3 class="text-center">últimos productos</h3>
            </div>
            <div class="line"> </div>
            <div class="wrap">
                <div class="ocarousel_slider">
                    <div class="ocarousel example_photos" data-ocarousel-perscroll="3">
                        <div class="ocarousel_window">
                            <?php

                            foreach ($ViewProductos as $row){
                                echo '<a href="#" title="img1"><p class="center-text">'.substr($row['nombre'],0,20).'</p><img src="http://localhost/San_Jorge/uploads/'.$row['img'].'" alt="" /><br><p>'.$row['precio'].'</p></a>';
                            }
                            ?>
                        </div>
                        <span>
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap">
    <h3 class="text-center">Productos</h3>
</div>
<hr>
<div class="container">
    <div class="row text-center">
        <?php
        foreach ($ViewMenuProductos as $row){
            $link = base_url().'producto_Control'.'?productos='.$row['categoria'];
            echo ' <div class="col-sm-4">
            <div class="panel panel-primary">
                <div  class="panel-heading" onclick="location.href=\''.$link.'\'">'.$row['nombre'].'</button></div>
                <div class="panel-body"><img src="'.$row['img'].'" onclick="location.href=\''.$link.'\'" class="img-responsive center-block" style="width:70%" alt="Image"></div>
            </div>
        </div>';
        }
        ?>
    </div><br>
</div>

<div class="contact-w3layouts body">
    <div class="container">
        <div class="col-md-6 contact-agileits-w3layouts-left">
            <h3 class="title-w3-agile-sub"><span>Drogueria san Jorge Valledupar</span></h3>
            <p class="sub">Direccion: Centro Cra 9 # 14 -29 Local 1<span class="glyphicon glyphicon-map-marker icon" aria-hidden="true"></span></p>
            <p class="sub">Direccion: San Jorge Calle 21 # 6A - 11<span class="glyphicon glyphicon-map-marker icon" aria-hidden="true"></span></p>
            <p class="sub"></span>Direccion: Villa Del Rosario Calle 28 # 4H - 35<span class="glyphicon glyphicon-map-marker icon" aria-hidden="true"></p>
            <p class="sub">Valledupar - Cesar<span class="glyphicon glyphicon-map-marker icon" aria-hidden="true"></span></p>
            <p class="sub">Abierto de Lunes a Sabado de 7:00 AM a 9:00 PM y Domingo 8:00 AM a 6:00 Pm<span class="glyphicon glyphicon-time icon" aria-hidden="true"></span></p>
            <p class="add">Centro: (035)-5725115 - 3233705391 | San Jorge: (035)-5802431 - 3226008317 | Villa el Rosario: (035)-5842090 - 3226017032<span class="glyphicon glyphicon glyphicon-earphone icon" aria-hidden="true"></span></p>
            <p class="add"><a class="mail" href="mailto:Drogueriasanjorgen1@gmail.com">Drogueriasanjorgen1@gmail.com</a><span class="glyphicon glyphicon-envelope icon" aria-hidden="true"></span></p>

        </div>
        <div class="col-md-6 mail-grid1-form ">
            <h3 class="title-w3-agile-sub"><span>Enviar Sugerencias</span></h3>
            <form action="#" method="post">
                <input type="text" name="Name" placeholder="Nombre" required="" />
                <input type="text" name="Telefono" placeholder="Telefono" required="" />
                <input type="email" name="Email" placeholder="Email" required="" />
                <textarea name="Message" placeholder="Texto a Enviar" required=""></textarea>
                <input type="submit" value="Enviar" />
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="footer-w3layouts">
    <div class="container">
        <div class="agile-copy">
            <p>© 2017 Carlos Andres Castilla Garcia | Design by <a href="https://www.facebook.com/carlos.castilla.79">Dev-Zeros</a></p>
            <img src="http://localhost/San_Jorge/plugin/img/0001.jpg" class="center-block img-responsive" style="width: 50%">
        </div>
        <div class="agileits-social">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div id="id01" class="modal">
    <form class="modal-content animate" action="promocion.php"  method="post">
        <div class="imgcontainer" >
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <h1 class="do text-center">Bienvenido a Drogueria San Jorge #1</h1>
        </div>
        <div class="container">
            <h3 class="col-xs-4 ">Este Mes de Abril Drogueria Sanjorge #1 tiene una promocion para ti</h3>
            <br>
            <button type="submit" class="btn acpetarbtn">IR a Promocion</button>
            <span onclick="document.getElementById('id01').style.display='none'" class="button btn cancelbtn" title="Close">Cancelar</span>
        </div>
    </form>
</div>

</body>
</html>