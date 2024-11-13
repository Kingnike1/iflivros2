# Documento do Projeto: Sistema de Biblioteca

## 1. Introdução
Este projeto é um sistema de gerenciamento de biblioteca que visa otimizar a administração de livros, clientes, empréstimos e funcionários. Ele foi desenvolvido utilizando PHP, MySQL, HTML, CSS e JavaScript, com o objetivo de facilitar o controle dos itens e interações dentro da biblioteca, oferecendo funcionalidades para cadastro, empréstimos, estatísticas, entre outros.

## 2. Objetivo
O sistema tem como objetivo principal permitir:

- O cadastro de livros, clientes e funcionários.
- O gerenciamento dos empréstimos de livros, com a possibilidade de editar, listar e excluir registros.
- Exibição de estatísticas sobre os livros, clientes, funcionários e empréstimos.

Além disso, o sistema deve fornecer relatórios e gráficos para visualização fácil das informações e permitir que o administrador da biblioteca acompanhe os dados mais relevantes de forma intuitiva.

## 3. Tecnologias Utilizadas
O sistema foi desenvolvido com as seguintes tecnologias:

- **Backend**: PHP
- **Frontend**: HTML, CSS, JavaScript
- **Banco de Dados**: MySQL
- **Outros**: Docker, Font Awesome (para ícones), Bootstrap (para estilização adicional)

## 4. Funcionalidades

### 4.1 Cadastro e Edição de Dados
- **Livros**: Cadastro de livros com informações como título, autor, ISBN, etc.
- **Clientes**: Cadastro de clientes que podem fazer empréstimos de livros.
- **Funcionários**: Cadastro de funcionários que administram os empréstimos.
- **Empréstimos**: Registro dos empréstimos de livros aos clientes, com informações sobre a data de empréstimo e data de devolução. A funcionalidade de editar e excluir registros de empréstimos também foi implementada.

### 4.2 Visualização e Estatísticas
- **Página de Estatísticas**: O sistema gera estatísticas sobre o total de livros, clientes, empréstimos abertos e funcionários. As informações são apresentadas de forma clara e visual, com gráficos para facilitar a análise.
- **Gráficos**: O sistema exibe gráficos de barras que mostram o número de livros, clientes, empréstimos e funcionários, permitindo a comparação entre as diferentes categorias.

### 4.3 Login e Controle de Acesso
O sistema requer que os usuários realizem login para acessar funcionalidades restritas, como a administração de livros, empréstimos e visualização de relatórios.

### 4.4 Sistema de Mensagens de Erro e Sucesso
O sistema fornece mensagens de erro e sucesso para o usuário, informando sobre a conclusão de operações como cadastros e alterações, além de alertar sobre erros ao tentar executar ações não permitidas.

## 5. Estrutura do Banco de Dados
O banco de dados MySQL possui as seguintes tabelas principais:

- **livro**: Armazena informações sobre os livros.
- **cliente**: Armazena dados dos clientes da biblioteca.
- **funcionario**: Contém dados sobre os funcionários responsáveis pelos empréstimos.
- **emprestimo**: Registra os empréstimos realizados, com campos para data de empréstimo e devolução.
- **ranking**: Tabela que armazena o desempenho dos usuários em quizzes ou outras atividades educativas que podem ser implementadas no sistema.

### 5.1 Relacionamentos entre as Tabelas
A tabela **emprestimo** possui chaves estrangeiras para **livro**, **cliente**, e **funcionario**, relacionando as informações entre essas entidades.

## 6. Interfaces e Design
A interface foi desenvolvida com um design simples e intuitivo, visando facilitar o uso do sistema por parte dos administradores da biblioteca. O layout foi otimizado para ser responsivo, garantindo que o sistema seja acessível em diferentes dispositivos (desktop, tablets, smartphones).

- **Cabeçalho**: Contém o nome do sistema e um menu com links para as principais funcionalidades (como cadastrar livros, visualizar estatísticas, etc.).
- **Formulários**: Para cadastro e edição de livros, clientes, e empréstimos, foram utilizados formulários HTML com validação de dados para garantir a integridade das informações.
- **Gráficos**: Utilizando barras coloridas para representar as estatísticas de forma visualmente atraente.

## 7. Funcionalidades Adicionais
- **Personalização**: Os usuários podem escolher o layout do sistema (cores, fontes, etc.) de acordo com suas preferências, proporcionando uma experiência mais personalizada.
- **Gestão de Empréstimos**: O sistema permite que o administrador da biblioteca acompanhe os livros emprestados, visualize os clientes que fizeram os empréstimos e saiba se os livros foram devolvidos no prazo.

## 8. Fluxo do Sistema

### 8.1 Cadastro de Livros
O administrador entra na página de cadastro de livros e preenche as informações sobre o livro (título, autor, ISBN, etc.).  
Após o cadastro, o livro é inserido na tabela **livro** do banco de dados.

### 8.2 Cadastro de Clientes e Funcionários
O administrador cadastra clientes e funcionários, fornecendo informações como nome, email, telefone, etc.  
Os dados dos clientes e funcionários são armazenados nas tabelas **cliente** e **funcionario**, respectivamente.

### 8.3 Empréstimos de Livros
Quando um cliente deseja pegar um livro emprestado, o administrador registra o empréstimo, selecionando o livro, o cliente e o funcionário responsável.  
A data de empréstimo e a data de devolução são salvas no banco de dados na tabela **emprestimo**.

### 8.4 Visualização de Estatísticas
O sistema coleta informações de todas as tabelas e gera estatísticas sobre o total de livros, clientes, empréstimos e funcionários.  
Essas estatísticas são apresentadas com gráficos de barras, facilitando a visualização e comparação dos dados.

## 9. Conclusão
Este sistema de gerenciamento de biblioteca foi desenvolvido com o intuito de facilitar a administração de livros, clientes, funcionários e empréstimos. Com funcionalidades como cadastro, edição, exclusão e visualização de dados em tempo real, o sistema torna a gestão da biblioteca mais eficiente e organizada. A implementação das estatísticas e gráficos visualmente atraentes também contribui para uma gestão mais inteligente e tomada de decisões.

## 10. Futuras Implementações
- **Notificações de Atraso**: O sistema pode ser expandido para enviar notificações de atraso para clientes que não devolveram os livros dentro do prazo.
- **Controle de Reservas**: Implementar a funcionalidade de reserva de livros para clientes, com a possibilidade de notificação quando o livro estiver disponível.
- **Sistema de Multas**: Integrar um sistema de multas por atraso na devolução de livros.
