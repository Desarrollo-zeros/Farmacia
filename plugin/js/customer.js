var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "language": {
            "search": "Buscar:",
        },

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "http://localhost/San_Jorge/producto_Control/ajax_list",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            {
                "targets": [-1], //last column
                "orderable": false, //set not orderable
                "render": function ( data, type, row ) {
                    return '<img  class="center-block img-responsive img-circle" width="80px" src="http://localhost/San_Jorge/uploads/'+data+'"/>';
                },
                "targets": 2 // column index
            },
        ],
    });
    });



function add_person()
{
    $('#id').val("");
    $('#imgSalida').attr('src', '').empty();
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Agrega Producto'); // Set Title to Bootstrap modal title
}

function reload_table() {
    table.ajax.reload(null, false); //reload datatable ajax
}

$(document).ready(function(){
    $('#imgSalida').attr('src', '').empty();
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    $('form.jsform').on('submit', function(form){
        form.preventDefault();
        var url;
        if($('#id').val().length>0){
            url = "http://localhost/San_Jorge/producto_Control/ajax_update";
        }
        else{
            url = "http://localhost/San_Jorge/producto_Control/ajax_add";
        }
        var file2 = $('#imgSalida').val();
        var nombre = $("#nombre").val();
        var precio = $("#precio").val();
        var file = $("#file").val();
        var categoria = $("#categoria").val();
        var detalle = $("#detalle").val();
        if(nombre==""){
            swal("Error!", "Nombre No Puede Estar Vacio", "error");
            $( "#nombre" ).focus();
        }
        else if(precio==""){
            swal("Error!", "Precio No Puede Estar Vacio", "error");
            $( "#precio" ).focus();
        }
        else if(file=="" && $('#id').val().length<1){
            swal("Error!", "Su Imagen No Existe", "error");
            $( "#file" ).focus();
        }
         else if(detalle==""){
             swal("Error!", "Detalle No Puede Estar Vacio", "error");
            $( "#detalle" ).focus();
         }
        else{
            var formData = new FormData($(this)[0]);
            swal({
                    title: "Mensaje!",
                    text: "Desea usted Añadir este producto?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#08dd79",
                    confirmButtonText: "Si, Deseo añadir!",
                    cancelButtonText: "No,Deseo añadir!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: formData,
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                if(data != ""){
                                    swal("Repuesta!", data, "success");
                                    $('#modal_form').modal('hide');
                                    reload_table();
                                    $('#id').val("");
                                }else{
                                    swal({
                                        title: "Error!",
                                        text: "Error no se ha podido guardar los datos.",
                                        imageUrl: "http://localhost/San_Jorge/plugin/img/bad.jpg"
                                    });
                                }
                                $('#btnSave').text('save'); //change button text
                                $('#btnSave').attr('disabled',false); //set button enable
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                alert('Error adding / update data');
                                $('#btnSave').text('save'); //change button text
                                $('#btnSave').attr('disabled',false); //set button enable

                            }
                        });
                    } else {
                        swal("Cancelado", "Su producto no se ha guardado", "error");
                    }
                });
        }
});
});


function edit_person(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    $.ajax({
        url : "http://localhost/San_Jorge/producto_Control/ajax_edit/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('#imgSalida').attr('src', '').empty();
            $('[name="id"]').val(data.id);
            $('[name="nombre"]').val(data.nombre);
            $('[name="precio"]').val(data.precio);
           // $('[name="file"]').val(data.img);
            $('#imgSalida').attr("src","http://localhost/San_Jorge/uploads/"+data.img);
            $('[name="detalle"]').val(data.text);
            $('[name="categoria"]').val(data.categoria);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function delete_person(id)
{
    if(confirm('Desea eliminar esta persona?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "http://localhost/San_Jorge/producto_Control/ajax_delete/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

function validarnumero(phone)
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&*+_={};:'@#~Š\/<>?|`¬\]\[]/g, '');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}

$(window).load(function(){

    $(function() {
        $('#file').change(function(e) {
            addImage(e);
        });

        function addImage(e){
            var file = e.target.files[0],
                imageType = /image.*/;

            if (!file.type.match(imageType))
                return;

            var reader = new FileReader();
            reader.onload = fileOnload;
            reader.readAsDataURL(file);
        }

        function fileOnload(e) {
            var result=e.target.result;
            var file = $("#file").val();
                $('#imgSalida').attr("src",result);
        }
    });
});
