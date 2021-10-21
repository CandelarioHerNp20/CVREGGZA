$(document).ready(function() {
    $(document).on('click', '#log', function() {
        var datos = new FormData(document.getElementById('inicio_ses'));
        $.ajax({
            type: 'post',
            url: './User/script/login.php',
            contentType: false,
            processData: false,
            data: datos
        }).done(function(tipo_u) {
            alert(tipo_u);
            $(location).attr('href', './Index.php');
        });
    });
    $(document).on('click', '#logout', function() {
        $.ajax({
            type: 'post',
            url: './User/script/logout.php',
            contentType: false,
            processData: false,
            data: {}
        }).done(function() {
            $(location).attr('href', './Index.php');

        });
    });

})