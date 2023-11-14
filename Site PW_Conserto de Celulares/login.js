$(function () {
    $(document).on('submit', 'form[name="formularioLogin"]', function () {
    var forma = $(this);
    var dados = forma.serialize();
    $.ajax({
    url: 'validar.php',
    data: dados,
    dataType: 'json',
    type: 'POST',
    beforeSend: function () {
        $('.msg').text('');
        forma.find('.load').fadeIn("fast");
    },
    success: function (resposta) {
    if (resposta.error ==='success') {
        $('.msg').text(resposta.msg);
        setTimeout(function () {
            $(location).attr('href', 'admin/home.php');
    }, 2000);
    } else {
    $('.msg').text(resposta.msg);
    }
    },
    complete: function () {
    forma.find('.load').fadeOut("fast");
    }
    });
    return false;
    }); 
    });