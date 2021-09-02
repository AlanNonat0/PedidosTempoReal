
var total = 0;

// helper para buscar elementos
function getField(prodId){
    var inptUnity = document.getElementById("unity"+prodId).value;
    var colPrice = document.getElementById("price"+prodId).textContent;
    var colCost = document.getElementById("cost"+prodId);
    var fields = {
        inptUnity: inptUnity,
        colPrice: colPrice,
        colCost: colCost,
        cost: cost,
        };
    return fields;
}

// Btn controle de quantidade


/**
 * Incrementa a coluna valor valor
 * 
 * @param prodId - id do produto
 * 
 * Incrementa uma unidade a mais na coluna de valores e no acumulado total
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
 * subtrai da coluna valor
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
 * Soma a coluna de valor
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
