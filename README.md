Desafio de API da Ramada

## DESAFIO PROGRAMAÇÃO

A Marvel vem conquistando muitos fãs ao redor do mundo através de quadrinhos com personagens marcantes e superpoderosos. Você também faz parte desta legião de fãs? 

De quadrinhos até livros coloridos que retratam as histórias de cada personagem. De desenhos a filmes em alta resolução. Todo fã da Marvel provavelmente espera ver coisas que representem suas paixões, seus personagens favoritos e amados.

Às vezes um fã pode até ser meio exigente, mas quem pode culpá-los, não é? 

Preparamos um desafio de programação para os fãs da Marvel. Este desafio deve ser feito por você em sua casa. Gaste o tempo que você quiser, porém normalmente você não deve precisar de mais do que algumas horas.

Utilizamos como referência a API (https://developer.marvel.com/) para facilitar a criação dos campos de quadrinhos (comics)

1. Desenvolver uma aplicação web em Laravel (https://laravel.com/docs/8.x) que contenha:

a) Criação de CRUD de quadrinhos (comics);

b) Autenticação simples com email e senha;

c) Filtro para buscar os quadrinho (comics) por title ou id

d) Página com o resultado da busca

e) Sua aplicação deverá possuir um Command (https://laravel.com/docs/8.x/artisan#writing-commands) que ao ser executado, alimenta a tabela de quadrinhos com os quadrinhos da ultima semana, utilizando a API da marvel via HTTP;

Comportamentos:

* Ao clicar no resultado da busca, exibir página com detalhes dos quadrinhos (comics) como: (id,title,description,ean,prices,images)

OBS: Views podem ser criadas em Blade
