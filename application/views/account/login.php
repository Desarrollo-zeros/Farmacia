<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url("");?>plugin/css/nav.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url("");?>plugin/css/bootstrap-social.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url("");?>plugin/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url("");?>plugin/js/login.js"></script>
    <title>Drogueria San Jorge #1</title>
    <link href="maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script>
     $(document).ready(function(){
         $('form.jsform').on('submit', function(form){
             form.preventDefault();
             $.post('<?php echo base_url("")."account/loginajax"?>', $('form.jsform').serialize(), function(data){
                 $('div.jsError').html(data);
             });
         });
     });
    </script>
</head>
<body>
<div id="login-overlay" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel" style="color:#0322bf;">Drogueria San Jorge</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-6">
                    <div class="well">
                        <div class="jsError alert alert-danger"><img src="<?php echo base_url("")."/plugin/img/default.svg";?>" class="center-block" style=" width: 30px; height: 30px"></div>
                        <form  method="POST" action="" class="jsform">
                            <div class="form-group">
                                <label for="username" class="control-label">Correo electronico</label>
                                <input type="text" class="form-control" id="email" name="email" value=""  title="Por favor ingrese su usuario" placeholder="example@gmail.com" required>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" value="" title="Por favor ingrese su contraseña" required>
                                <span class="help-block"></span>
                            </div>
                            <div id="loginErrorMsg" class="alert alert-error hide">Contraseña erronea</div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" id="remember"> Recordar usuario?
                                </label>
                                <p class="help-block">(Esta es tu computadora personal?)</p>
                            </div>
                            <input type="submit"  id="loginSubmit" value="Iniciar Sesion" name="loginSubmit" class="btn btn-success btn-block">
                            <a href="/forgot/" class="btn btn-default btn-block">No puedo entrar</a>
                        </form>
                        <br>
                        <?php
                        if(empty($authUrl)){}
                        else{
                        ?>
                        <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook" onclick="window.location.assign('<?=$authUrl;?>')">
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xs-6">
                    <p class="lead">Necesitaras estar registrado para hacer una compra<span class="text-success"> Registro total Mente gratis</span></p>
                    <ul class="list-unstyled" style="line-height: 2">
                        <li><span class="fa fa-check text-success"></span>Podrar Ordenar Productos</li>
                        <li><span class="fa fa-check text-success"></span>Hacer Pedidos en linea</li>
                        <li><span class="fa fa-check text-success"></span>Conocer tu factura online</li>
                        <li><span class="fa fa-check text-success"></span>Atencion al cliente</li>
                        <li><span class="fa fa-check text-success"></span>Registrate y difruta de todo esto..</li>
                        <li><a href="/read-more/"><u>Leer Mas Sobre esto</u></a></li>
                    </ul>
                    <p><a href="registration" class="btn btn-info btn-block">Registrarme ahora!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-w3layouts">
    <div class="container">
        <div class="agile-copy">
            <p>© 2017 Carlos Andres Castilla Garcia | Design by <a href="https://www.facebook.com/carlos.castilla.79">Dev-Zeros</a></p>
            <img src="<?php echo base_url("");?>plugin/img/0001.jpg" class="center-block img-responsive" style="width: 50%">
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
</body>
</html>