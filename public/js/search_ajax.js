$(document).ready(function (){
    $(function () {

 $('form[name="form-chk-search"]').submit(function(event){
    event.preventDefault();
    $.ajax({
        url: window.location+"/search",
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

                        console.log(data[i])

                            html += "<div class=\"col-6\">"
                            html +=    "<div class=\"card mx-2 mt-2\">"
                            html +=     "<a href=\"#"+id+"\" class=\"text-decoration-none  text-dark\">"
                            html +=        "<div class=\"card-columns\">"
                            html +=           "<img src='/../storage/product_img/"+image+"' width=\"100\" height=\"100\" alt="+name+" class=\"card-img card-img-top \" />"
                            html +=            "<div class=\"card-title pt-2\">"
                            html +=                "<h6 class=\"font-weight-bold\">"+name+"</h6></div>"
                            html +=        "<div class='card-text'>"
                            html +=            "<h6>R$ "+price+"</h6></div></div></a></div></div>"
                        
                            $('#panel').append(html);
                            html = "";
                        
                    }
                    
                    
                } else {
                    alert('Nenhum item encontrado')
                }
                 $("#form-chk-search input").val("")
            }
        })
    })
})
})