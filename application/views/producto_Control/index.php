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
    <link rel="stylesheet" href="http://localhost/San_Jorge/plugin/css/profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="http://localhost/San_Jorge/plugin/js/registrar.js"></script>
    <script src="http://jquerymodal.com/jquery.modal.js"></script>
    <script src="http://localhost/San_Jorge/plugin/js/jquery.openCarousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://localhost/San_Jorge/plugin/js/easing.js"></script>
    <script type="text/javascript" src="http://localhost/San_Jorge/plugin/js/move-top.js"></script>
    <title>Drogueria San Jorge #1</title>
    <link href="http://localhost/San_Jorge/plugin/css/style1.css" rel="stylesheet" type="text/css" media="all"/>
    <title>Drogueria San Jorge #1</title>
</head>
<body>
<br>
<p class="text-center info">Línea de Atencion Valledupar-Cesar Tele: <strong>| Centro: (035)-5725115 - 3233705391 | San Jorge: (035)-5802431 - 3226008317 | Villa el Rosario: (035)-5842090 - 3226017032 | <strong>Correo: Drogueriasanjorgen1@gmail.com</strong></strong></p>
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

        <form class="navbar-form navbar-left">
            <div class="input-group">
                <!-- <input type="text" class="form-control" placeholder="Busca el Producto que deseas"> -->
                <input type="text" name="buscar"  placeholder="Buscar Producto">
            </div>
        </form>

        <ul class="nav navbar-nav navbar-right">
            <?php
            if(!empty($_SESSION['email'])){
                echo '<li><a href=""><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
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
                <li><a href="account/loung"><span class="glyphicon glyphicon-user"></span>Salir</a></li>';
                }
            }
            ?>

    </div>
</nav>
<hr>
<!------------End Header ------------>
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
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev" values="<-"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next" values="->"> </a>
			               </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_bottom">
            <div class="wrap">
                <div class="content-bottom-left">
                    <div class="categories">
                        <ul>
                            <?php
                            foreach ($ViewMenu as $row){
                                $link = base_url('').'/producto_Control?productos='.$row['categoria'];
                                echo ' <li><a href="'.$link.'">'.$row['menu'].'</a></li>';
                            }

                            ?>
                        </ul>
                    </div>
                    <div class="buters-guide">
                        <h3>Guía de compradores</h3>
                        <p><span>Queremos que usted esté satisfecho con su compra.</span></p>
                        <p>Así que estamos comprometidos a darle todas las herramientas para tomar la decisión correcta con un mínimo de alboroto. </p>
                    </div>
                </div>

                <div class="content-bottom-right">
                    <h3>Productos</h3>
                    <div class="section group">
                        <?php
                        foreach ($ViewProductos as $row){
                            if(!empty($_GET['productos'])){
                                if($row['categoria']==$_GET['productos']){
                                    $link = base_url().'account/login?id='.$row['id'];
                                    echo '<div class="grid_1_of_4 images_1_of_4">
                            <a href="'.$link.'"><img src="http://localhost/San_Jorge/uploads/'.$row['img'].'" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                 <h4><a href="'.$link.'">'.substr($row['nombre'],0,53).'</a></h4>
                                    <span class="rupees"><h6> $'.$row['precio'].'</h6></span>
                                </div>
                                <div class="add-cart">
                                    <h4><a href="'.$link.'">Comprar</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>';
                                }
                            }
                        }
                        ?>
                    </div>
                    <div class="product-articles">
                        <h3>Productos</h3>
                        <ul>
                            <li>
                                <div class="article">
                                    <p>Si Tienes Duda No Olvides Comunicarte con los administradores</p>
                                    <br>
                                    <br>
                                    <img src="http://localhost/San_Jorge/plugin/img/0001.jpg" class="center-block img-responsive" style="width: 50%">

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="footer text-center">
    <div class="wrap">
        <div class="copy_right">
            <p class="text-center">© 2017 Carlos Andres Castilla Garcia | Design by <a href="https://www.facebook.com/carlos.castilla.79">Dev-Zeros</a></p> </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"> </a>
<script type="text/javascript" src="http://localhost/themes/web/js/navigation.js"></script>
</body>
</html>