# MVC - Model-View-Controller
É um padrão de arquitetura de software. Separa/Organiza o projeto em 3 partes: Modelo-Visão-Controlador.  

`MVC` = Regras de Negócio, Camada de acessos à dados, entidades.  
`View` = Responsável por redenrizar a resposta/página à requesição, no view trabalhasse com: javascript, css, html, engine de template. Tudo respeito a visualizar a aplicação, telas.  
`Controller` = Coordena o fluxo de dados do model por view; pegando informações da página, mandando request e levando para a base de dados; Faz o controle desse fluxo, faz o intermédio; Como, pedir pro model informações da base de dados, pega essas informações trabalha e manda pro view.  

### Exemplo prático de MVC:  

- View = Página de Formulário preenchida pelo usuário, e envia uma `request` para o `Controller`.  
- Controller = Recebe a request com os dados sobre ela, e os dados do formulário.  
- Model = Manipula e salva os dados num banco de dados e retorna pro `controller`.  
- Controller = Renderiza uma outra página para o `View`.
