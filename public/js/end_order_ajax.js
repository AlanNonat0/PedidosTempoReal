/**
 *  Formulário para finalizar pedido
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
            console.log(resp);
            var data = resp.data;
            var message = resp.message;
            var success = resp.success;

            var title;
            var body;

            switch (message) {
                case "money returned":
                    title = "Troco";
                    body = "R$" + data.money_returned.toFixed(2);
                    $("#modalFinish").modal("hide");
                    break;

                case "Order open":
                    title = "Pedido realizado";
                    body = "Ja estamos preparando seu pedido";
                    $("#modalFinish").modal("hide");
                    break;

                case "Empty list":
                    title = "Lista Vazia";
                    body = "Adicione itens a Lista";
                    $("#modalFinish").modal("hide");
                    break;

                default:
                    title = "Erro ao registrar";
                    body = "Tente novamente em alguns minutos";
                    $("#modalFinish").modal("hide");
                    break;
            }

            $(".feedback")
                .removeClass("d-none")
                .html(title+ ": " + body);

        },
    });

    // window.location.reload(true);
});
