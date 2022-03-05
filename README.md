# backend-challenge

Executar no terminal dentro da pasta do projeto 'php storage:link'
Executar no terminal dentro da pasta do projeto 'php migrate:fresh'
Executar no terminal dentro da pasta do projeto 'php artisan db:seed'
Ao executar o DB:seed é gerado 2 clientes com 3 pedidos vazios em cada um e 8 produtos base.

Configure o .env na parte do Email colocando a sua configuração do provedor de email para fazer o envio dos email

endpoints:
api/clients (GET/POST/PUT)
api/orders (GET/POST/PUT)
api/order_products (GET/POST/PUT)
api/products (GET/POST/PUT)

Campos enviaveis das tabelas:
*Clientes*
'name', 'email', 'phone', 'birthdate', 'adress', 'complement', 'district', 'zipcode'

*Orders*
'clients_id'

*Products*
'name', 'price', 'photo'

*OrderProducts*
'orders_id', 'products_id', 'quantity'
