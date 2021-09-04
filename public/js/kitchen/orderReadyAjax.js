/**
 *  Formulário para finalizar pedido
 */
 $('form.orderReady').submit(function (event) {
     event.preventDefault();
     
    var orderId = $(this).find("input.orderId").val();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: "/cozinha/pronto",
        type: "post",
        data: $(this).serialize(),
        dataType: "json",

        success: function (resp) {

            var message = resp.message;
            var success = resp.success;

            var title;
            var body;

            if(success && (message == 'Order Complete')){
                title = 'Situação';
                body = 'Pedido '+orderId+' Concluido';
            } else {
                title = 'Situação';
                body = 'Erro ao conclior o pedido '+orderId;
            }

            $(".feedback")
                .removeClass("d-none")
                .html(title+ ": " + body);

               window.setTimeout( refresh, 2500 );


        },
    });

});