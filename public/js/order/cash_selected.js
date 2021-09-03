
function cashSelected(){
    
    var payment = document.finishOrder.payment;    
    var cashDivShow = document.getElementById('cashSelected');
    var contentDiv = `<div class="col-2"><span class="font-weight-bold">R$</span></div>
    <div class="col-10"><input type="text" name="cash" id="cash" class="form-control" placeholder="Valor pago"></div>`;
    
    if(payment.value == 1){
        cashDivShow.innerHTML = contentDiv; 
    } else {
        cashDivShow.innerText = '';
    }
    
}