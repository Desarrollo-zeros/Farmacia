<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url("");?>plugin/css/registrar.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url("");?>plugin/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url("");?>plugin/js/registrar.js"></script>
        <title>Drogueria San Jorge #1</title>
        <link href="maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script>
            $(document).ready(function(){
                $('form.jsform').on('submit', function(form){
                    form.preventDefault();
                    $.post('<?php echo base_url("");?>account/registrarajax', $('form.jsform').serialize(), function(data){
                        $('div.jsError').html(data);
                    });
                });
            });
        </script>
    </head>
<body>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="jsError alert alert-danger"><img src="<?php echo base_url("");?>plugin/img/default.svg" class="center-block" style=" width: 30px; height: 30px"></div>
            <form action="" method="post" id="fileForm" class="jsform" role="form">
                <fieldset><legend class="text-center">Se requiere información válida para registrarse. <span class="req"><small>se requiere*</small></span></legend>
                    <div class="form-group">
                        <label for="firstname"><span class="req">* </span>Nombre Completo: </label>
                        <input class="form-control" type="text" name="nombre" id = "txt" onkeyup = "Validate(this)"  required="" value="<?php echo !empty($account['nombre'])?$account['nombre']:''; ?>">
                        <?php echo form_error('nombre','<span class="help-block">','</span>'); ?>
                        <div id="errFirst"></div>
                    </div>
                    <div class="form-group">
                        <label for="phonenumber"><span class="req">* </span> Telefono o Celular: </label>
                        <input required type="text" name="telefono" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="Celular o Telefono" value="<?php echo !empty($account['telefono'])?$account['telefono']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email"><span class="req">* </span>Correo Electronico: </label>
                        <input placeholder="correo@correo.com" class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);"value="<?php echo !empty($account['email'])?$account['email']:''; ?>">
                        <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                        <div class="status" id="status"></div>
                    </div>
                    <div class="form-group">
                        <label for="username"><span class="req">* </span>Usuario: <small>Este será tu nombre de usuario</small> </label>
                        <input class="form-control" type="text" name="usuario" id = "txt" onkeyup = "Validate(this)" placeholder="Mínimo 6 letras" required="" value="<?php echo !empty($account['usuario'])?$account['usuario']:''; ?>">
                        <?php echo form_error('usuario','<span class="help-block">','</span>'); ?>
                        <div id="errLast"></div>
                    </div>
                    <div class="form-group">
                        <label for="password"><span class="req">* </span>Contraseña: </label>
                        <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  placeholder="Contraseña" id="pass1" required="">
                        <?php echo form_error('password','<span class="help-block">','</span>'); ?>

                        <label for="password"><span class="req">* </span>Confirmar Contraseña: </label>
                        <input  required="" name="conf_password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Ingresar su contraseña de nuevo para validar"  id="pass2" onkeyup="checkPass(); return false;" />
                        <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
                        <span id="confirmMessage" class="confirmMessage"></span>
                    </div>

                    <div class="form-group">
                        <?php //$date_entered = date('m/d/Y H:i:s'); ?>
                        <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                        <input type="hidden" value="0" name="activate" />
                        <hr>
                        <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Por favor, indique que acepta los Términos y condiciones' : '');" id="field_terms">   <label for="terms">Estoy Deacuerdo con los <a href="terms.php" title="Puede leer nuestros términos y condiciones haciendo clic en este enlace">Terminos y condiciones</a> para registrar.</label><span class="req">* </span>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="regisSubmit" value="Register">
                    </div>
                    <h5>Recibirá un correo electrónico para completar el proceso de registro y validación. </h5>
                    <h5>Asegúrese de revisar sus carpetas de spam. </h5>
                </fieldset>
            </form><!-- ends register form -->
            <script type="text/javascript">
                document.getElementById("field_terms").setCustomValidity("Por favor, indique que acepta los Términos y condiciones");
            </script>
        </div><!-- ends col-6 -->

        <div class="col-md-5">
            <h1 class="page-header">INICIAR SESÍON</h1>
            <br>
            <a href="login" class="btn btn-lg btn-primary btn-block center-block" type="submit">Login</a>
            <br>
            <img src="<?php echo base_url("");?>plugin/img/domicilios.jgp" class="center-block img img-responsive">
            <br>
            </div>
    </div>
</div>
<br>
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