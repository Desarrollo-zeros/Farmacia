<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://localhost/San_Jorge/plugin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/San_Jorge/plugin/css/profile.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/San_Jorge/plugin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://localhost/San_Jorge/plugin/dist/css/skins/_all-skins.min.css">
    <!-- SweetAlert  style -->
    <link rel="stylesheet" href="http://localhost/San_Jorge/plugin/plugins/sweetalert/sweetalert.css">
    <!-- responsive datatables -->
    <link rel="stylesheet" href="http://localhost/San_Jorge/plugin/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script  src="http://localhost/San_Jorge/js/profile.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Drogueria San Jorge N°1</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="http://localhost/San_Jorge/plugin/account/profile" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>D</b>Rogueria</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>D San</b>Jorge N°1</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="http://localhost/San_Jorge/plugin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li><!-- end message -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?=$img?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?=$nombre?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?=$img?>" class="img-circle" alt="User Image">
                                <p>
                                    <?=$nombre?>
                                    <small> <?=$_SESSION['email']?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php base_url("")?>" class="btn btn-default btn-flat">Inicio</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php ?>" class="btn btn-default btn-flat">Salir</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=$img?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p style="font-size: 12px"> <?=$nombre?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">Menu Principal</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Sistema</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php base_url("")?>"><i class="fa fa-circle-o"></i>Inicio</a></li>
                        <li><a href="<?php base_url("account/logout")?>"><i class="fa fa-circle-o"></i>Salir</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-archive"></i> <span>Informacion</span> <i class="glyphicon glyphicon-shopping-cart pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i>Ventas</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Domicilios</a></li>
                        <li><a href=""><i class="fa fa-envelope-o"></i>Mensajes</a></li>
                    </ul>
                </li>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Importante</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Sugerencia</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Informacon</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Drogueria San Jorge N°1
                <small>Productos</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Sistema</a></li>
            </ol>
        </section>

        <div class="box box-primary">
            <h3>Productos Data</h3>
            <br />
            <button class="btn btn-success" id="agregar" name="agregar" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Agregar Producto</button>
            <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Recargar</button>
            <div class="box-body">
                <div class="col-sm-10">
                    <!-- <div class="box box-primary"> -->
                    <table id="table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10%;background-color: #006699; color: white;">id</th>
                            <th style="width: 10%;background-color: #006699; color: white;">Nombre</th>
                            <th style="width: 10%;background-color: #006699; color: white;">Imagen</th>
                            <th style="width: 10%;background-color: #006699; color: white;">Precio</th>
                            <th style="width: 10%;background-color: #006699; color: white;">Categoria</th>
                            <th style="width: 10%;background-color: #006699; color: white;">Detalle</th>
                            <th style="width: 10%;background-color: #006699; color: white;">editar</th>
                            <th style="width: 10%;background-color: #006699; color: white;">Eliminar</th>
                        </tr>
                        </thead>

                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-2"><span class='label label-warning' id="spSuma"></span></div>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 <a href="https://www.facebook.com/carlos.castilla.79">Dev-Zeros</a>.</strong> Todos Los Derechos Reservados.
    </footer>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Informacion Personal</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cumpleaño</h4>
                                <p>24 de abril</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post" class="jsform">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>


    <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Agregar Productos</h4>
            </div>
            <!--modal header-->
            <div class="modal-body">
                <form id="form" class="jsform" method="post">
                <div class="pad" id="infopanel"></div>
                <div class="form-horizontal">
                    <div class="form-group">
                        <input type="hidden" id="id"  name="id"/>
                        <label class="col-sm-3  control-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del producto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3  control-label">Precio</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control numero" name="precio" id="precio" placeholder="Precio del producto" onkeyup="validarnumero(this);">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3  control-label">Imagen</label>
                        <div class="col-sm-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <input type="file" class="form-control" name="file" id="file">
                                <br>
                                <div class="col-sm-9">
                                <img class="img-responsive" id="imgSalida" width="120px" height="120px">Visulizador de imagen....
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3  control-label">Detalle</label>
                        <div class="col-sm-9">
                            <textarea style="box-sizing: border-box; resize: none;" data-autoresize rows="3" class="form-control" name="detalle" id="detalle" placeholder="Detalle del producto"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3  control-label">Categoria</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="categoria" id="categoria" >
                                <option value="leche_bebe"> leche bebe </option>
                                <option value="pañales_adulto"> pañales adulto </option>
                                <option value="pañales_bebe"> pañales bebe </option>
                                <option value="botiquin"> botiquin </option>
                                <option value="repelentes"> repelentes </option>
                                <option value="sexual"> sexual </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3  control-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button></div>
                    </div>
                </div>
                <!--modal footer-->
                    </form>
            </div>
            <!--modal-content-->
        </div>
        <!--modal-dialog modal-lg-->
    </div>
    <!--form-kantor-modal-->
</div>



</div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
<script src="http://localhost/San_Jorge/plugin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="http://localhost/San_Jorge/plugin/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="http://localhost/San_Jorge/plugin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/San_Jorge/plugin/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/San_Jorge/plugin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/San_Jorge/plugin/dist/js/demo.js"></script>

<!-- SweetAlert -->
<script src="http://localhost/San_Jorge/plugin/plugins/sweetalert/sweetalert.min.js"></script>
<!-- Bootstrap-notify -->
<script src="http://localhost/San_Jorge/plugin/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="http://localhost/San_Jorge/plugin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/San_Jorge/plugin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="http://localhost/San_Jorge/plugin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/San_Jorge/plugin/js/customer.js"></script>
</body>
</html>