$(document).ready(function() {
    $(document).on('click', '#Registrar_ufrm', function() {
        var datos_u = new FormData(document.getElementById('Form_reg_usu'));

        $.ajax({
            type: 'post',
            url: './script/Registro_u.php',
            contentType: false,
            processData: false,
            data: datos_u
        }).done(function() {

        });
    });
    $(document).on('click', '#log', function() {
        var datos = new FormData(document.getElementById('inicio_ses'));
        $.ajax({
            type: 'post',
            url: '../User/script/login.php',
            contentType: false,
            processData: false,
            data: datos
        }).done(function(tipo_u) {
            alert(tipo_u);

        });
    });

});