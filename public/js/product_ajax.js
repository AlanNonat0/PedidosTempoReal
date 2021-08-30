
var ProductsList = [];
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

            success: function(resp){
    
                if (resp.success) {
            
                    
                    
                    data = resp.data
                    
                    ProductsList.push(data)
                    
                        id = data.id;
                        name = data.name;
                        price = parseFloat(data.price);
                        cost = price;

                        var html =  `<tr class="block-with-text text-center obs">
                        <th scope="row" class="idProduct">`+id+`</th>
                        <td>`+name+`</td>
                        <td id="price`+id+`">`+price.toFixed(2)+`</td>
                        <td> <button class="btn oneless" id="dec" onClick="dec(`+id+`)">-</button> <input type="text" disabled name="unity`+id+`" id="unity`+id+`" onkeyup="updateCost(`+id+`)" class="input-width-sm unity" value="1">
                        <button class="btn onemore" id="inc" onClick="inc(`+id+`)">+</button></td>
                        <td id="cost`+id+`">`+cost.toFixed(2)+`</td></tr>`;
                        
                        $('.products-list-body').append(html);
                        
                        calcTotal(price);
                } else {
                    alert('Nenhum item encontrado')
                }
                 $("#form-chk-search input").val("")
            }
        })
        
}
