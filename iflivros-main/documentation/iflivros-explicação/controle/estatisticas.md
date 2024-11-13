```markdown
# Explicação do Código: Função `getEstatisticas()`

Esta função, `getEstatisticas()`, tem como objetivo obter e retornar estatísticas relacionadas ao banco de dados, como o número de livros, clientes, empréstimos e funcionários. Ela realiza quatro consultas ao banco de dados para contar o total de registros em suas respectivas tabelas e retorna esses dados em forma de array.

### Explicação do Código:

```php
function getEstatisticas() {
```
- **Linha 1**: A função `getEstatisticas()` é definida. Ela não recebe parâmetros e será responsável por coletar informações estatísticas do banco de dados.

```php
    require_once "conexao.php";
```
- **Linha 2**: Inclui o arquivo `conexao.php`, que contém a lógica de conexão com o banco de dados. O arquivo é requerido para que a função possa se conectar ao banco e executar as consultas.

```php
    // Consultas SQL para contar os registros
    $sql_livros = "SELECT COUNT(*) AS total_livros FROM livro";
    $sql_clientes = "SELECT COUNT(*) AS total_clientes FROM cliente";
    $sql_emprestimos = "SELECT COUNT(*) AS emprestimos_abertos FROM emprestimo";
    $sql_funcionarios = "SELECT COUNT(*) AS total_funcionarios FROM funcionario";
```
- **Linhas 4 a 7**: São definidas quatro consultas SQL:
  - **$sql_livros**: Conta o número total de registros na tabela `livro`.
  - **$sql_clientes**: Conta o número total de registros na tabela `cliente`.
  - **$sql_emprestimos**: Conta o número de empréstimos abertos na tabela `emprestimo`.
  - **$sql_funcionarios**: Conta o número total de registros na tabela `funcionario`.

```php
    // Executar as consultas
    $result_livros = mysqli_query($conexao, $sql_livros);
    $result_clientes = mysqli_query($conexao, $sql_clientes);
    $result_emprestimos = mysqli_query($conexao, $sql_emprestimos);
    $result_funcionarios = mysqli_query($conexao, $sql_funcionarios);
```
- **Linhas 9 a 12**: As consultas SQL são executadas utilizando a função `mysqli_query()`. Ela retorna um objeto de resultado que será usado para acessar os dados retornados pelas consultas.

```php
    // Obter os resultados
    $total_livros = mysqli_fetch_assoc($result_livros)['total_livros'];
    $total_clientes = mysqli_fetch_assoc($result_clientes)['total_clientes'];
    $emprestimos_abertos = mysqli_fetch_assoc($result_emprestimos)['emprestimos_abertos'];
    $total_funcionarios = mysqli_fetch_assoc($result_funcionarios)['total_funcionarios'];
```
- **Linhas 14 a 17**: A função `mysqli_fetch_assoc()` é usada para obter o resultado das consultas como um array associativo, onde cada chave do array é o nome do campo retornado pela consulta.
  - **$total_livros**: Obtém o total de livros.
  - **$total_clientes**: Obtém o total de clientes.
  - **$emprestimos_abertos**: Obtém o total de empréstimos abertos.
  - **$total_funcionarios**: Obtém o total de funcionários.

```php
    // Fechar a conexão
    mysqli_close($conexao);
```
- **Linha 18**: A função `mysqli_close()` é chamada para fechar a conexão com o banco de dados após a execução das consultas.

```php
    // Retornar os resultados
    return [
        'total_livros' => $total_livros,
        'total_clientes' => $total_clientes,
        'emprestimos_abertos' => $emprestimos_abertos,
        'total_funcionarios' => $total_funcionarios
    ];
```
- **Linhas 20 a 23**: A função retorna um array associativo com as estatísticas coletadas:
  - `'total_livros'`: Total de livros no banco.
  - `'total_clientes'`: Total de clientes no banco.
  - `'emprestimos_abertos'`: Total de empréstimos abertos no banco.
  - `'total_funcionarios'`: Total de funcionários no banco.

---

### Resumo

A função `getEstatisticas()` se conecta ao banco de dados, executa consultas para contar registros nas tabelas `livro`, `cliente`, `emprestimo` e `funcionario`, e retorna esses dados como um array. Esses dados podem ser usados para exibir estatísticas no sistema.

Este código é útil para sistemas que precisam de informações resumidas, como um painel de administração, onde o administrador pode ver a quantidade de livros, clientes, empréstimos e funcionários.