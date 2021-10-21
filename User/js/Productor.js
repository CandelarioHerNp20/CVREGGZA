$(document).ready(function() {
    $.ajax({
        type: "post",
        url: "./script/Prod/Ver_prods.php", //consulta
        data: {}
    }).done(function(tarjeta_prd_u) {
        $(".tarjet_prd_u").html(tarjeta_prd_u);
    });


    $(document).on('click', '#r2', function() {
        var datos = new FormData(document.getElementById('Reg_product'));
        $.ajax({
                type: 'post',
                url: './script/Registro_prod.php',
                contentType: false,
                processData: false,
                data: datos
            })
            .done(function() {

                alert(' Producto registrado');
                //revisar nulos
                $(location).attr('href', './Panel.php');
            })
    });

});
$(document).on('click', '#btn_reg_map', function() {
    var datos_mp = new FormData(document.getElementById('form_add_map'));
    $.ajax({
            type: 'post',
            url: './script/Registro_map.php',
            contentType: false,
            processData: false,
            data: datos_mp
        })
        .done(function() {
            alert(' Ubicación guardada');
            $(location).attr('href', 'Panel.php');
        });


});

$(document).on('click', '#mod_us', function() {
    var datos_mp = new FormData(document.getElementById('editar_u'));
    $.ajax({
            type: 'post',
            url: './script/Edit_user.php',
            contentType: false,
            processData: false,
            data: datos_mp
        })
        .done(function(tipo_u) {

            alert(' Actualización guardada');
            //revisar nulos
            if (precio_cb === null) {
                alert(' Revisar los datos');
            } else {
                if (tipo_u === '') {
                    $(location).attr('href', 'Index.php');
                } else {
                    $(location).attr('href', '/User/panel.php');
                }
            }
        });
});
$(document).on('click', '#logout', function() {
    $.ajax({
        type: 'post',
        url: './script/logout.php',
        contentType: false,
        processData: false,
        data: {}
    }).done(function() {
        $(location).attr('href', '../Index.php');

    });
});