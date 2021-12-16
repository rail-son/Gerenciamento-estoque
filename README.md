Backend:

Criar uma api para realizar o gerenciamento de um produto.

Campos:
Cod Produto
Nome produto
Valor Produto
Estoque
Cidade (Chave estrangeira)

A partir desse cadastro um recurso REST para gerenciamento desse modelo com os seguintes métodos devem estar disponíveis:

GET /products - Lista todos os produtos
GET /products/{id} - Busca um produto por id
POST /products - Cria um novo produto
PUT /products/{id} - Edita um produto
DELETE /products/{id} - Deleta um produto
GET /cidades - Lista todas as cidades

Front-end:

Agora que nossa api já está feita, precisamos fazer um front-end para conversar com essa api.
O projeto do frontend, deverá ser feito com o framework Vuejs.

O projeto Backend devera ser feito em Laravel(PHP) com o banco de dados mysql.

Após o fim do projeto disponibilizar no github.

A data limite de entrega do projeto será de 7 dias a partir do recebimento do teste.
