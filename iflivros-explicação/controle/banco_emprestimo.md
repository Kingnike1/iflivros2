```markdown
# Explicação do Código: Inserir ou Atualizar Empréstimo

Este código PHP é responsável por inserir ou atualizar um empréstimo na tabela de empréstimos no banco de dados, dependendo de um `id` fornecido via `POST`. Se o `id` for 0, um novo empréstimo é inserido; se for diferente de 0, um empréstimo existente é atualizado.

### Explicação do Código:

```php
<?php
$id = isset($_POST['id']) ? $_POST['id'] : 0;  // Verifica se id está definido
```
- **Linha 1**: Verifica se a variável `id` foi enviada via `POST`. Se estiver definida, seu valor é atribuído a `$id`; caso contrário, atribui-se o valor `0`. Esse valor ajuda a determinar se o empréstimo é novo (se `id` for 0) ou se já existe um empréstimo para atualizar.

```php
$livro_id = $_POST["livro_id"];
$cliente_id = $_POST["cliente_id"];
$funcionario_id = $_POST["funcionario_id"];
$data_emprestimo = $_POST["data_de_emprestimo"];
$data_devolucao = $_POST["data_de_devolucao"];
```
- **Linhas 3-7**: Captura os dados do formulário enviados via `POST`. Esses dados são usados para preencher os campos do empréstimo:
  - `$livro_id`: ID do livro emprestado.
  - `$cliente_id`: ID do cliente que está pegando o empréstimo.
  - `$funcionario_id`: ID do funcionário que está registrando o empréstimo.
  - `$data_emprestimo`: Data do empréstimo.
  - `$data_devolucao`: Data prevista para devolução.

```php
require_once "conexao.php";
```
- **Linha 9**: Inclui o arquivo `conexao.php`, onde a conexão com o banco de dados é configurada. Isso é essencial para executar consultas SQL no banco de dados.

```php
if ($id == 0) {
    // Inserção de novo empréstimo
    $sql = "INSERT INTO emprestimo (data_de_devolucao, data_de_emprestimo, funcionario_idfuncionario, livro_idlivros, cliente_idcliente)
            VALUES ('$data_devolucao', '$data_emprestimo', '$funcionario_id', '$livro_id', '$cliente_id')";
} else {
    // Atualização de empréstimo existente
    $sql = "UPDATE emprestimo 
            SET livro_idlivros = '$livro_id', cliente_idcliente = '$cliente_id', funcionario_idfuncionario = '$funcionario_id', 
                data_de_emprestimo = '$data_emprestimo', data_de_devolucao = '$data_devolucao' 
            WHERE emprestimo = $id";  // A chave primária da tabela é 'emprestimo', não 'idfuncionario'
}
```
- **Linhas 11-20**:
  - **Se o `$id` for 0** (significa que é um novo empréstimo):
    - A consulta `INSERT INTO emprestimo` é executada para inserir um novo registro de empréstimo na tabela `emprestimo` com os dados fornecidos.
  - **Se o `$id` for diferente de 0** (significa que o empréstimo já existe):
    - A consulta `UPDATE emprestimo` é executada para atualizar o registro de empréstimo com o `id` fornecido. Isso altera os dados do empréstimo com base no ID correspondente.

```php
mysqli_query($conexao, $sql);
```
- **Linha 22**: Executa a consulta SQL no banco de dados. A função `mysqli_query()` executa a consulta armazenada na variável `$sql`, que pode ser um `INSERT` ou um `UPDATE`.

```php
header("location: ../public/listaemprestimo.php");
```
- **Linha 24**: Após a execução da consulta, o código redireciona o usuário para a página `listaemprestimo.php`, onde a lista de empréstimos é exibida. O redirecionamento é feito com a função `header()`, que envia um cabeçalho HTTP de redirecionamento.

---

### Resumo

Este script permite adicionar ou editar um empréstimo no banco de dados. Se o `id` fornecido for 0, ele insere um novo empréstimo; caso contrário, ele atualiza o empréstimo existente. Após a operação, o script redireciona para a lista de empréstimos.

**Nota**: Assim como no exemplo anterior, este código está vulnerável a injeção de SQL, pois insere dados diretamente nas consultas. Recomenda-se o uso de *prepared statements* para melhorar a segurança do código.


---