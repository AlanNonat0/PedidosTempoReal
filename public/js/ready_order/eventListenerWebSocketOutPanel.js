/**
 * Dispara um evento avisando que o pedido esta pronto
 */
Echo.channel("OutPanel").listen(".SendOrderReady", (data) => {
    
var checkoutSound = new Audio('/../../storage/checkout_sound/checkout.mp3');
    if (data.data) {
        $("#orderReady").load(document.URL + " #orderReady");
        checkoutSound.play();
    } else {
        $(".preparationOrders").load(document.URL + " .preparationOrders");
    }
});
