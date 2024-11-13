```markdown
# Explicação do Código: Deletar Empréstimo Específico

Este código PHP realiza a exclusão de um empréstimo específico no banco de dados, identificado pelo `id` passado via URL. Aqui está a explicação de cada trecho:

```php
<?php
require_once "../conexao.php";
```

- **Linha 1**: Importa o arquivo `conexao.php`, que contém a função de conexão com o banco de dados, permitindo que o código interaja com o banco diretamente.

```php
$id = $_GET['id'];
```

- **Linha 3**: Captura o `id` do empréstimo que foi enviado via URL usando o método `GET`. Esse `id` será utilizado para identificar qual empréstimo deverá ser excluído.

```php
$sql_funcionario = "DELETE FROM emprestimo WHERE emprestimo = $id;";
mysqli_query($conexao, $sql_funcionario);
```

- **Linhas 5-6**: Cria e executa uma consulta SQL para excluir o empréstimo específico da tabela `emprestimo`. A instrução `DELETE FROM emprestimo WHERE emprestimo = $id;` remove a linha da tabela `emprestimo` que corresponde ao `id` passado.

```php
header("Location: ../../public/listaemprestimo.php");
?>
```

- **Linha 8**: Redireciona o usuário para a página `listaemprestimo.php` após a exclusão do empréstimo, mostrando a lista atualizada dos empréstimos.

---
