<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!Doctype html>
<html>
<head>
    <?= $head;?>
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

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Iniciar Seccíon</b> <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="center-block">Login Via</label>
                                <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                </div>
                                <label class="center-block">Login Usuario Registrado</label>
                                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="correo" id="email" placeholder="correo electronico o Usuario" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="contraseña" id="password" placeholder="Contraseña" required>
                                        <div class="help-block text-right"><a href="">Olvidaste Tu Contraseña</a></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Iniciar Seccíon</button>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Mantenme conectado
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="bottom text-center">
                                Eres Nuevo <a href="#"><b>Registrate!</b></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-left">
            <div class="input-group">
                <!-- <input type="text" class="form-control" placeholder="Busca el Producto que deseas"> -->
                <input type="text" name="buscar"  placeholder="Buscar Producto">
            </div>
    </div>
</nav>
<br>
<img src="http://localhost/San_Jorge/plugin/img/domicilios.jgp" class="center-block img">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div align="center" class="titulo">Productos</div>
<hr>
<div class="container">
    <div class="row text-center">
    <?php
    if(!empty($_GET['x'])){
        if($_GET["x"]=="leche_bebe"){
            echo $leche_bebe;
        }
        if($_GET["x"]=="leche_bebe"){
            echo $leche_bebe;
        }
    }
    ?>
    </div>
    <br>
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