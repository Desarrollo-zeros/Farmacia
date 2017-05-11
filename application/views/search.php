<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!Doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url("");?>plugin/css/nav.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url("");?>plugin/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url("");?>plugin/css/Colores.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url("");?>plugin/js/registrarUser.js"></script>
        <title>Drogueria San Jorge #1</title>

<?php
if(!empty($booktable ))
{

    $output = '';
    $outputdata = '';
    $outputtail ='';

    $output .= '<div class="container">
                   <div class="table-responsive">
                   <table class="table table-bordered">
	                <thead>
                          <tr>
                              <th>imagen</th>
                              <th>Nombre</th>
                              <th>Precio</th>
                              <th>Categoria</th>
                              </tr>
				   
                   </thead>
                   <tbody>
                   ';

    foreach ($booktable as $objects)
    {
        $outputdata .= ' 
                
                    <tr> 
                    <td >'.$objects['img'].'</td>
		            <td >'.$objects['nombre'].'</td>
		            <td >'.$objects['precio'].'</td>
		            <td >'.$objects['categoria'].'</td>
		            
                    </tr> 
                
           ';
    }

    $outputtail .= ' 
                         </tbody>
                         </table>
                         </div>
                         </div> ';

    echo $output;
    echo $outputdata;
    echo $outputtail;
}
else
{
    echo 'Data Not Found';
}