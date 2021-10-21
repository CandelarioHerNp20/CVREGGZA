$(document).ready(function() {
    $.ajax({
        type: "post",
        url: "./scripts/Ver_usuarios.php", //consulta
        data: {}
    }).done(function(tabla_usuarios) {
        $(".tabla_usuarios").html(tabla_usuarios);
    });

    //editar usuarios
    $(document).on('click', '#form_modificar_user', function() {
        var datos_m = new FormData(document.getElementById('inicio_ses'));
        $.ajax({
            type: 'post',
            url: './User/script/login.php',
            contentType: false,
            processData: false,
            data: datos_m
        }).done(function(tipo_u) {
            alert(tipo_u);
            $(location).attr('href', './Index.php');
        })
    });
    //eliminar usuarios

    //cierre de sesion
    $(document).on('click', '#logout', function() {
        $.ajax({
            type: 'post',
            url: './scripts/cerrar_sesion.php',
            contentType: false,
            processData: false,
            data: {}
        }).done(function() {
            $(location).attr('href', '../Index.php');

        });
    });

});