



$(document).ready(function() {
    $("#boton1").click(function() {
        $("#ver").load('<?php base_url("")?>account/v?id=1');
    });
});
$(document).ready(function() {
    $("#boton2").click(function() {
        $("#ver").hide();
        $("#editar").load('<?php base_url("")?>account/v?id=2');
    });
});

$(document).ready(function() {
    $("#boton3").click(function() {
        $("#ver").empty();
        $("#arti").load('<?php base_url("")?>account/v?id=3');
    });
});
$(document).ready(function() {
    $("#boton4").click(function() {
        $("#ver").empty();
        $("#editar").empty();
        $("#producto").load('<?php base_url("")?>account/v?id=4');
    });
});
