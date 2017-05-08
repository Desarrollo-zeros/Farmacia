<style>
    body
    {
        margin:0;
        padding:0;
        background-color:#f1f1f1;
    }
    .box
    {
        width:1270px;
        padding:20px;
        background-color:#fff;
        border:1px solid #ccc;
        border-radius:5px;
        margin-top:25px;
    }
</style>


<script>
    $(document).ready(function(){
        $('form.jsform').on('submit', function(form){
            form.preventDefault();
            $.post('http://localhost/San_Jorge/account/a', $('form.jsform').serialize(), function(data){
                $('div.jsError').html(data);
            });
        });
    });
</script>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!empty($_GET['id'])){
if($_GET['id']=="1"){
echo " First name: <input type=\"text\" name=\"fname\"><br>";
}
else if($_GET['id']=='2'){

}
else if($_GET['id']=='4') {
    echo '
		<div class="container box">
			<h1 align="center">Productos</h1>
			<div class="table-responsive">
				<br>
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Agregar productos</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="5%">ID</th>
							<th width="10%">Nombre</th>
							<th width="10%">Detalle</th>
		             		<th width="10%">Precio</th>
							<th width="25%">Img</th>
							<th width="10%">Categoria</th>
		
						</tr>
					</thead>
				</table>	
			</div>
		</div>
    
    <div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" class="jsform" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Agregar Producto</h4>
				</div>
				<div class="modal-body">
					<label>Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control" />
					<br />
					<label>Detalle</label>
					<input type="text" name="detalle" id="detalle" class="form-control" />
					<br/>
					<label>Precio</label>
					<input type="text" name="precio" id="precio" class="form-control" />
					<br />
					<label>Categoria del producto</label>
					<select name="categoria" id="categoria" class="form-control">
					<option selected="selected" value="Leche Bebe">Leche Bebe</option>
					<option selected="selected" value="Pañales Para Adulto">Pañales Para Adulto</option>
					<option selected="selected" value="pañales Para Bebe">pañales Para Bebe</option>
					<option selected="selected" value="Botiquin">Botiquin</option>
					<option selected="selected" value="Repelentes">Repelentes</option>
				    <option selected="selected" value="Salud Sexual">Repelentes</option>
					</select>
					<br>
					<input type="file" name="img" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>        
';
}
}
?>

