/**
 *  Formulário para finalizar pedido
 */
$('form[name="finishOrder"]').submit(function (event) {
    var payment = document.finishOrder.payment;
    for (let i = 0; i < payment.length; i++) {
        if (payment[i].checked)
            payment = payment.value;
    }

    var name = document.finishOrder.clientName.value;
    var note = document.finishOrder.note.value;
    var cash = document.finishOrder.cash.value;

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
        },
    });

    $('#modalFinish').modal('hide');
    
    // window.location.reload(true);
});
