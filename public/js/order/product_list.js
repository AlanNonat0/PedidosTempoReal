
//===========================================
// Botões de Controle de preço
//===========================================

/**@var total Variavel de controle para o total apresentado */
var total = 0;

/**
 * Incrementa o preço de uma unidade à coluna valor 
 *
 * @param prodId - id do produto
 *
 * Incrementa uma unidade à coluna de valores e no acumulado total
 */
function inc(prodId) {
    field = getField(prodId);

    // Incrementa unidades para multiplicação do valor unitario
    field.inptUnity++;
    field.cost = field.inptUnity * field.colPrice;

    // exibe na tela o valor mutiplicado e o soma ao total
    document.getElementById("unity"+prodId).value = field.inptUnity;
    field.colCost.innerHTML = field.cost.toFixed(2);
    calcTotal(parseFloat(field.colPrice))

    // atualiza a variavel de controle lista
    productsList.forEach(product => {

        if (product.id == prodId) {
            product.qtt = field.inptUnity;

        }

    });
}

/**
 * subtrai o preço de uma unidade na coluna valor
 *
 * @param prodId - id do produto
 *
 * Subitrai uma unidade na coluna de valores e no acumulado total
 */
function dec(prodId) {

    field = getField(prodId);

    // decrementa a unidade em um passo e calcula o valor final subtraindo do total
   if(field.inptUnity > 1){
       field.inptUnity--;

       field.cost = field.inptUnity * field.colPrice;

       total = total - parseFloat(field.colPrice);
       document.querySelector('#total').innerHTML = total.toFixed(2);
       inptTotalModal = document.querySelector('#totalmodal').innerHTML = total.toFixed(2);
    };

    // exibe na tela o valor e a unidade atual
    document.getElementById("unity"+prodId).value = field.inptUnity;
    field.colCost.innerHTML = parseFloat(field.cost).toFixed(2);

    // atualiza a variavel de controle lista
    productsList.forEach(product => {

        if (product.id == prodId) {
            product.qtt = field.inptUnity;

        }

    });

}

/**
 * Soma a coluna de valores
 * @param cost - Valor acumulado do item
 *
 * Soma a coluna valor e atribui aos campos de total
 */
function calcTotal(cost) {

    var inptTotal = document.querySelector('#total');
    var inptTotalModal = document.querySelector('#totalmodal')
    var sum = 0;

    total += cost;
    sum +=  parseFloat(total);
    inptTotal.innerHTML = sum.toFixed(2);
    inptTotalModal.innerHTML = sum.toFixed(2);

}

/**
 * Deleta um produto da lista 
 * @param prodId 
 * @return void
 */
function delProduct(prodId){
    
    var inptTotal = document.querySelector('#total');
    var inptTotalModal = document.querySelector('#totalmodal')
    var field = getField(prodId);

    for(var i = 0; i < productsList.length; i++){

        if(productsList[i]['id'] == prodId){
        
            document.getElementById("tr"+prodId).remove();
            productsList.splice(i, 1)

        }
    }

    total -= parseFloat(field.colCost.textContent)

    inptTotal.innerHTML = (
        parseFloat(inptTotal.textContent) 
        - parseFloat(field.colCost.textContent)
        ).toFixed(2);

    inptTotalModal.innerHTML = (
        parseFloat(inptTotalModal.textContent) 
        - parseFloat(field.colCost.textContent)
        ).toFixed(2);
    
}
