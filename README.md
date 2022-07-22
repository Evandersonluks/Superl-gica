# Getting Started: Superlógica

## Tecnologias e versões

  Ferramenta                  |  Versão
----------------------------- | --------
PHP                           | 8.1.*
Laravel                       | 9
PostgreSql                    | 14

## Padrões de projeto

### MVC
Arquitetura MVC e tem como principal característica ajudar a desenvolver aplicações seguras e performáticas de forma rápida, com código limpo e simples, já que ele incentiva o uso de boas práticas de programação e utiliza o padrão PSR-2 como guia para estilo de escrita do código.

### Service-Repository
O conceito de repositórios e serviços garante que você escreva código reutilizável e ajuda a manter seu controlador o mais simples possível, tornando-os mais legíveis.

### PostgreSql

Container de bancos de dados da aplicação local, criada com base no ``` postgree:14 ```.

## Como executar

### Antes de executar

1 - Clone o repositório ```git clone git@github.com:Evandersonluks/Superl-gica.git```.

2 - Acesse a pasta do projeto ```cd project-folder``` .

3 - Criar o .env ``` cp .env.example .env ```.

### Instale o Sail e suas dependências

    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

### Alias para Sail

1 - Abra .bashrc no vi ou vim ``` vi ~/.bashrc ```

2 - Na área de aliases adicione ``` alias sail='./vendor/bin/sail' ```

3 - Salve o arquivo
### Próximos passos

1 - Execute ``` sail up -d ``` para subir os containers.

2 - Execute ``` sail exec web bash ``` para entrar dentro do container do laravel.

3 - Dentro do container execute ``` composer install ``` ou ``` composer install --ignore-platform-reqs ``` para instalar as dependências.

4 - Gerar a APP_KEY ``` php artisan key:generate ```.

5 - Gerar as tabelas com migrations ``` php artisan migrate --seed ```.

6 - Para abrir o app acesse o link [http://localhost](http://localhost).
