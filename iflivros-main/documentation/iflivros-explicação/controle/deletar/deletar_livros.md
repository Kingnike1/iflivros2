```markdown
# Explicação do Código: Deletar Livro e Seus Empréstimos Relacionados

Este código PHP é utilizado para excluir um livro específico do banco de dados, bem como remover todos os registros de empréstimos associados a ele. Vamos detalhar o funcionamento de cada parte:

```php
<?php
require_once "../conexao.php";
```

- **Linha 1**: A função `require_once` importa o arquivo `conexao.php`, onde está a definição da conexão com o banco de dados. Isso permite que o código se comunique diretamente com o banco de dados para realizar operações.

```php
$id = $_GET['id'];
```

- **Linha 3**: Captura o valor do parâmetro `id` enviado via URL através do método `GET`. Esse `id` é o identificador do livro a ser excluído, e será usado para buscar e excluir tanto os registros de empréstimos quanto o próprio livro.

```php
$sql_emprestimos = "DELETE FROM emprestimo WHERE livro_idlivros = $id;";
mysqli_query($conexao, $sql_emprestimos);
```

- **Linhas 5-6**: Define a consulta SQL que vai excluir todos os registros da tabela `emprestimo` onde o campo `livro_idlivros` corresponde ao `id` do livro capturado. O comando `DELETE FROM emprestimo` remove todos os empréstimos em que esse livro está relacionado.

```php
$sql_funcionario = "DELETE FROM livro WHERE idlivros = $id;";
mysqli_query($conexao, $sql_funcionario);
```

- **Linhas 8-9**: Define a consulta SQL que exclui o livro da tabela `livro` com o `idlivros` correspondente ao `id` capturado. Esse comando remove o livro da tabela, garantindo que não haja mais registros desse livro.

```php
header("Location: ../../public/listalivros.php");
?>
```

- **Linha 11**: Após a exclusão, o script redireciona o usuário para a página `listalivros.php`, onde será exibida a lista atualizada de livros, agora sem o livro excluído.

---