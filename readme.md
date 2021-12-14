<p align="center"><img src="http://site.federalst.com.br/fsmail.jpg"></p>


# Teste prático - Federal Soluções Técnicas

## Instalação 
* Execute composer install
* Renomeie o arquivo .env.example para .env
* Configure o acesso do seu banco de dados postgree no arquivo .env
* Execute php artisan key:generate
* Execute php artisan migrate
* Execute php artisan db:seed

# Aplicação
- Área do Cliente: 

Área destinada ao propriétario onde somente serão disponibilizos as informações de sua frota de veículos, o mesmo não tem permissão de editar, excluir ou cadastrar novos veículos.

- Área de Administração:

Área destinada para manutenção e adimnistração de informações dos veículos dos clientes, o administrador tem a permissão de cadastrar, editar e excluir novos veiculos. 

### Requisitos
- Usar Laravel
- Usar banco de dados Postgres
- Utilizar Soft Deleting ao excluir veículos.
- Não ter regra de negócio nos Controllers.
- Usar Event e Notifications para enviar os e-mail.
- Deixar informações no README.MD sobre como podemos executar sua aplicação.
- Usar o github.

### Validações
Os campos abaixo só podem ser aceitos no formato:
- Placa: Formato com três letras e quatro números (AAA1111).
- Ano: Formato apenas com números com, no máximo, 4 dígitos.



#### Informações do projeto:
- Rode as migrations.
- Rode as seeders.
- Esteja atento aos usuários padrões contidos na Seeder.
- A senha dos usuários é 'secret'.


## SUBMETA SEU PROJETO, MESMO QUE VOCÊ NÃO O TERMINE. NESTE CASO, NOS EXPLIQUE QUAIS FORAM AS SUAS DIFICULDADES. 

Implantação do "Event e Notifications" por tem muito tempo que mexi com o Laravel estou lendo algumas documentações para poder implantar, vou ultilizar o teste fornecido como exemplo.

