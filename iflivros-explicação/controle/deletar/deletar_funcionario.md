```markdown
# Explicação do Código: Deletar Funcionário e Seus Empréstimos Relacionados

Este código PHP é usado para excluir um funcionário específico do banco de dados, além de remover todos os registros de empréstimos associados a ele. Vamos entender o que cada trecho faz:

```php
<?php
require_once "../conexao.php";
```

- **Linha 1**: Importa o arquivo `conexao.php`, onde está definida a conexão com o banco de dados, permitindo que o código interaja com ele diretamente.

```php
$id = $_GET['id'];
```

- **Linha 3**: Captura o `id` do funcionário enviado via URL através do método `GET`. Este `id` será usado para identificar o funcionário a ser excluído e os empréstimos relacionados.

```php
$sql_emprestimos = "DELETE FROM emprestimo WHERE funcionario_idfuncionario = $id;";
mysqli_query($conexao, $sql_emprestimos);
```

- **Linhas 5-6**: Define e executa uma consulta SQL para excluir todos os registros da tabela `emprestimo` onde o `funcionario_idfuncionario` é igual ao `id` capturado. Este comando remove todos os empréstimos associados ao funcionário.

```php
$sql_funcionario = "DELETE FROM funcionario WHERE idfuncionario = $id;";
mysqli_query($conexao, $sql_funcionario);
```

- **Linhas 8-9**: Define e executa uma consulta SQL para excluir o funcionário específico da tabela `funcionario`. A linha `DELETE FROM funcionario WHERE idfuncionario = $id;` remove a linha da tabela `funcionario` que corresponde ao `id` capturado.

```php
header("Location: ../../public/listafuncionario.php");
?>
```

- **Linha 11**: Redireciona o usuário para a página `listafuncionario.php` após a exclusão, para mostrar a lista de funcionários atualizada.

---
