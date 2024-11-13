```markdown
# Explicação do Código: Deletar Cliente e Empréstimos Associados

Este código em PHP realiza a exclusão de um cliente e de todos os empréstimos associados a ele no banco de dados. Abaixo está uma explicação detalhada de cada parte.

```php
<?php
    require_once "../conexao.php";
```

- **Linha 1**: Importa o arquivo `conexao.php`, que contém a função de conexão com o banco de dados. Isso é essencial para que possamos interagir com o banco de dados diretamente nesta página.

```php
    $id = $_GET['id'];
```

- **Linha 3**: Obtém o valor de `id` enviado através da URL usando o método `GET`. Este `id` representa o identificador do cliente que será excluído.

```php
    $sql_emprestimos = "DELETE FROM emprestimo WHERE cliente_idcliente = $id;";
    mysqli_query($conexao, $sql_emprestimos);
```

- **Linhas 5-6**: Monta e executa uma consulta SQL para excluir todos os registros de empréstimos relacionados ao cliente. A instrução `DELETE FROM emprestimo WHERE cliente_idcliente = $id;` remove qualquer linha da tabela `emprestimo` onde `cliente_idcliente` corresponde ao `id` do cliente.

```php
    $sql_funcionario = "DELETE FROM cliente WHERE idcliente = $id;";
    mysqli_query($conexao, $sql_funcionario);
```

- **Linhas 8-9**: Monta e executa uma consulta SQL para excluir o cliente da tabela `cliente` com o `id` especificado. Essa operação garante que o cliente será removido após todos os seus empréstimos terem sido excluídos.

```php
    header("Location: ../../public/listacliente.php");
?>
```

- **Linha 11**: Redireciona o usuário para a página `listacliente.php` após a exclusão do cliente e de seus empréstimos. Esse redirecionamento fornece uma experiência mais fluida, mostrando a lista atualizada de clientes logo após a operação.

---