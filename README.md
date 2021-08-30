# Devio
## Sistema para gestão de pedidos

O sistema conta com uma area para inclusão de produtos, pesquisa e finalização onde é possivel selecionar a forma de pagamento e enviar o pedido a cozinha.
A cozinha por sua vez tem os pedidos exibidos em cards que possuem nome do cliente codigo do produto e uma observação caso necessite. Na cozinha tambem é possivel dar baixa no pedido lançando um aviso a tela de saida para o cliente.
A tela de saida exibe o pedido e o nome do cliente para retirada, proximos clientes e clientes ja chamados.

## Tecnologias

O Sistema esta sendo desenvolvido com framework Laravel em seu backend, base de dados em MySql, e seu frontend conta com html, css e framework Bootstrap.

## Funcionamento

Para iniciar é preciso configurar o arquivo '.env' com suas informações de banco de dados.
Logo após efetue as migrações com 'php artisan migrate', e em seguida popular as tabelas com 'php artisan db:seed' com isso sera possivel visualizar a configuração inicial do sistema.

## Situação

Atualmente o projeto encontra-se em desenvolvimento, com o escopo pronto porem algumas funcionalidades encontram-se indisponiveis.