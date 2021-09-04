
var productsList = [];
var data;
var id;
var name;
var price ;
var cost;

// adiciona produtos a lista utilizando ajax
function addList(idProductsCard){

    $.ajax({

        url: window.location.href+"/adicionar/"+idProductsCard,
        type: "get",
        data: $(this).serialize(),
        dataType: "json",

        // Response da requisição
            success: function(resp){

                if (resp.success) {

                    data = resp.data

                    id = data.id;
                    name = data.name;
                    price = parseFloat(data.price);
                    cost = price;

                    // html a ser renderizado
                    var html =  `<tr class="block-with-text text-center" id="tr`+id+`">
                            <td class="idProduct font-weight-bold">`+id+`</td>
                            <td>`+name+`</td>
                            <td id="price`+id+`">`+price.toFixed(2)+`</td>
                            <td> 
                                <button class="btn oneless mt-n2" id="dec" onClick="dec(`+id+`)">-</button>
                                    <input type="text" disabled name="unity`+id+`" id="unity`+id+`" onkeyup="updateCost(`+id+`)" class="input-width-sm unity" value="1">
                                <button class="btn onemore mt-n2" id="inc" onClick="inc(`+id+`)">+</button>
                            </td>
                            <td id="cost`+id+`">`+cost.toFixed(2)+`</td>
                            <td id="del`+id+`">
                            <button tipe="button" id="delProduct" class="btn close btn-block" onclick="delProduct(`+id+`)"><small>X</small></button>
                            </td>
                            </tr>`;


                        // validação para não incluir itens identicos para evitar problemas com duplicidades
                        var control = 0;
                        productsList.forEach(product => {

                            if (product.id == id) {
                                control++
                            }
                        });

                        if (!control) {
                            $('.products-list-body').append(html);

                            calcTotal(price);
                            productsList.push({id: data.id, qtt: 1})
                        }

                } else {
                    $(".feedback")
                .removeClass("d-none")
                .html("Erro ao Adicionar item");

                window.setTimeout( feedbackClear, 2000 );
            
                }
                 $("#form-chk-search input").val("")
            }
        })

}
