/**
 *  Formulário para registrar pedido
 */
$('form[name="finishOrder"]').submit(function (event) {
    var payment = document.finishOrder.payment;
    for (let i = 0; i < payment.length; i++) {
        if (payment[i].checked) payment = payment.value;
    }

    var name = document.finishOrder.clientName.value;
    var note = document.finishOrder.note.value;
    var cash = document.finishOrder.cash ? document.finishOrder.cash.value : "";

    var order = {
        cash: cash,
        name: name,
        payment: payment,
        note: note,
        products: [productsList],
    };

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: "/checkout/finalizar",
        type: "post",
        data: order,
        dataType: "json",

        success: function (resp) {
            var data = resp.data;
            var message = resp.message;

            var title;
            var body;
            /**@var isAlert Define se vai ser um alerta momentaneo ou de finalização de pagina */
            var isAlert = false;

            switch (message) {
                case "money returned":
                    title = "Troco";
                    body = "R$" + data.money_returned.toFixed(2);
                    isAlert = false;
                    $("#modalFinish").modal("hide");
                    break;

                case "Order open":
                    title = "Pedido realizado";
                    body = "Ja estamos preparando seu pedido";
                    isAlert = false;
                    $("#modalFinish").modal("hide");
                    break;

                case "Empty list":
                    title = "Lista Vazia";
                    body = "Adicione itens a Lista";
                    isAlert = true;
                    $("#modalFinish").modal("hide");
                    break;
                
                case "invalid value":
                    title = "Valor insuficiente";
                    body = "Digite um valor acima do cobrado";
                    isAlert = true;
                    $("#modalFinish").modal("hide");
                    break;

                default:
                    title = "Erro ao registrar";
                    body = "Tente novamente em alguns minutos";
                    isAlert = false;
                    $("#modalFinish").modal("hide");
                    break;
            }

            if (!isAlert) {
                $(".feedback")
                    .removeClass("d-none")
                    .html(title + ": " + body);

                window.setTimeout(refresh, 2500);
            } else {
                $(".feedback")
                    .removeClass("d-none")
                    .html(title + ": " + body);

               window.setTimeout(feedbackClear, 2500);
            }
            
        },
    });
});
