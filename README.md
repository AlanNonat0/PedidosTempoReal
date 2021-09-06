# Devio
## Sistema para gestão de pedidos

O sistema conta com uma area para inclusão de produtos, pesquisa e finalização onde é possivel selecionar a forma de pagamento e enviar o pedido a cozinha.
A cozinha por sua vez tem os pedidos exibidos em cards que possuem nome do cliente codigo do produto e uma observação caso necessite. Na cozinha tambem é possivel dar baixa no pedido lançando um aviso a tela de saida para o cliente.
A tela de saida exibe o pedido e o nome do cliente para retirada, proximos clientes e clientes ja chamados.

## Tecnologias

O Sistema esta sendo desenvolvido com framework Laravel 8.5 em seu backend, base de dados em MySql, frontend com html, css, javascript e framework css Bootstrap.

## Funcionamento

Para iniciar é preciso configurar o arquivo '.env' com suas informações de banco de dados.
Logo após efetue as migrações com 'php artisan migrate', e em seguida popular as tabelas com 'php artisan db:seed' com isso sera possivel visualizar a configuração inicial do sistema.

## v1.0.3 - Tempo Real

Na versão 1.0.3 foram adicionadas algumas melhorias, entre elas o suporte a interações em tempo real, para tal foi utilizado o WebSocket beyondcode para o laravel que utiliza o conector do Pusher, laravel-echo e pusher-js no frontend tornando a aplicação muito mais dinamica.

## Situação

Atualmente o projeto encontra-se em desenvolvimento, suas rotinas estão em pleno funcionamento.

# Telas do Sistema

## Checkout
![checkout](https://user-images.githubusercontent.com/69776302/132109447-60856f3d-e0c6-4243-ad8e-895b4d6da11a.png)
## Pagamento
![checkout-pagamento](https://user-images.githubusercontent.com/69776302/132109453-ac33f1e5-1962-46f5-8400-bac980ab6637.png)
## Cozinha
![cozinha](https://user-images.githubusercontent.com/69776302/132109461-ea0db9b9-b1f1-4512-a9cc-9fffed8cfaad.png)
## Saida
![Saida](https://user-images.githubusercontent.com/69776302/132109466-090405ca-622e-46b0-9eee-e650e3ce1e6a.png)
