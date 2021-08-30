
// Busca via get pelo termo no formulário utilizando ajax
$(function () {
 $('form[name="form-chk-search"]').submit(function(event){
    event.preventDefault();
    $.ajax({
        url: window.location.href+"/search",
        type: "get",
        data: $(this).serialize(),
        dataType: "json",

            success: function(resp){

                if (resp.success) {
                    $('#panel').html("");
                    html = "";

                    data = resp.data
                    sizedata = data.length
                    for(let i = 0; i < data.length; i++){
                        let id = data[i].id;
                        let name = data[i].name;
                        let price = data[i].price;
                        let image = data[i].image;

                        html +=  `<div class="col-6">
                                <div class="card mx-2 mt-2 h-100">
                    
                                <form name="form-Add-Itens" class="form-Add-Itens">
                    
                                    <div class="row">
                    
                                        <div class="col-lg-5 d-none d-lg-block">
                    
                                            <img <img src="/../storage/product_img/`+image+`" alt="`+name+`"
                                                class="card-img img-fill mt-1 ml-1">
                                        </div>
                                        <div class="col-lg-5 col-md-10">
                                        <button type="button" onclick="addList(idProductsCard.value)" class="btn btn-group-lg text-left">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card-title">
                                                            <h6 class="font-weight-bold">`+name+`</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card-text">
                                                            <h6>R$ `+price+`</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <input type="hidden" disabled name="idProductsCard" class="idProductsCard"
                                                value="`+id+`">
                                             </button>   
                                        </div>
                    
                                        <div class="col-2">
                                            <span class="d-none d-lg-block font-weight-bold">`+id+`</span>
                                        </div>
                    
                                        </div>
                                    </form>
                                </div>
                            </div>`;                            
                    }

                    $('#panel').html(html);
                } else {
                    alert('Nenhum item encontrado')
                }
                 $("#form-chk-search input").val("")
            }
        })
    })
})
