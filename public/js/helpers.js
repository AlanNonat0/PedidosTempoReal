/**
 *  Atualiza a página para um novo pedido
 */
function refresh(){
    window.location.reload(true)
}

/**
 *  helper para buscar elementos
 * @param prodId Id do produto a ser capturado
 * @return List
 */
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

/**
 * Limpa o campo de feedback
 */
function feedbackClear(){
    $(".feedback").html("")
}