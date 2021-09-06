
/**
 * Atualiza os dados de novos pedidos em tempo real
 */
Echo.channel('kitchen').listen('.SendPreparation', (data) => {
 
    if(data){
        window.location.reload(true)
    }
});
