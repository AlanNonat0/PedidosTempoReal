
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

// incrementa ao valor total
function inc(prodId) {
    field = getField(prodId);

    field.inptUnity++;
    field.cost = field.inptUnity * field.colPrice;
    
    document.getElementById("unity"+prodId).value = field.inptUnity;
    field.colCost.innerHTML = field.cost.toFixed(2);
    calcTotal(parseFloat(field.colPrice))
}

// subtrai do valor total
function dec(prodId) {

    field = getField(prodId);

   if(field.inptUnity > 1){ 
       field.inptUnity--; 
       
       field.cost = field.inptUnity * field.colPrice;

       total = total - parseFloat(field.colPrice);
       document.getElementById('total').innerHTML = total.toFixed(2); 
    };

    
    document.getElementById("unity"+prodId).value = field.inptUnity;
    field.colCost.innerHTML = parseFloat(field.cost).toFixed(2);
    

}

// Soma a coluna de valor
function calcTotal(cost) {
    
    var inptTotal = document.getElementById('total');
    var sum = 0;

    total += cost;
    sum +=  parseFloat(total);
    inptTotal.innerHTML = sum.toFixed(2);
    
}
