# Explicação do Código: Login de Usuário

Este código tem como objetivo autenticar um usuário em um sistema. Ele verifica se o email e a senha fornecidos pelo usuário correspondem aos registros armazenados no banco de dados e, caso positivo, cria uma sessão de login para o usuário. Caso contrário, redireciona para a página de login.

### Explicação do Código:

```php
require_once 'conexao.php';
```
- **Linha 1**: O arquivo `conexao.php` é incluído. Esse arquivo contém a lógica para conectar ao banco de dados. Assim, a conexão com o banco de dados será estabelecida quando o código precisar consultar informações.

```php
$login = $_POST['login'];
$senha = $_POST['senha'];
```
- **Linhas 2 e 3**: Recebe os dados enviados via POST. O valor de `login` (email do usuário) e `senha` (senha do usuário) são capturados e armazenados nas variáveis `$login` e `$senha`.

```php
$sql = "SELECT * FROM usuario WHERE email = '$login' and senha ='$senha'";
```
- **Linha 5**: É definida a consulta SQL para buscar o usuário no banco de dados. A consulta verifica se existe um registro na tabela `usuario` com o email e a senha fornecidos pelo usuário. A consulta retorna todos os campos (`*`) do usuário correspondente.

```php
$resultados = mysqli_query($conexao, $sql);
```
- **Linha 7**: A consulta SQL é executada utilizando a função `mysqli_query()`. Ela retorna um objeto de resultado, armazenado na variável `$resultados`, que será usado para verificar se o usuário existe ou não.

```php
if(mysqli_num_rows($resultados) == 0) {
    header("location: ../public/index.php");
} else {
    session_start();
    $_SESSION['logado'] = 1;

    header("location: ../public/home.php");
}
```
- **Linhas 9 a 14**:
  - **`if(mysqli_num_rows($resultados) == 0)`**: Verifica se o número de registros retornados pela consulta é igual a 0, ou seja, se não foi encontrado nenhum usuário com o email e a senha fornecidos. Se for o caso, o código redireciona para a página inicial de login (`../public/index.php`).
  - **`else`**: Caso o usuário seja encontrado no banco de dados, a sessão é iniciada com `session_start()`. 
  - **`$_SESSION['logado'] = 1`**: A variável de sessão `logado` é configurada para 1, o que indica que o usuário está autenticado.
  - **`header("location: ../public/home.php")`**: Após a autenticação bem-sucedida, o usuário é redirecionado para a página principal do sistema (`home.php`).

---

### Resumo

O código realiza o processo de login no sistema:
1. Ele recebe o email e a senha do usuário.
2. Verifica se esses dados correspondem a um usuário registrado no banco de dados.
3. Se o usuário for encontrado, cria uma sessão de login e redireciona para a página principal.
4. Se o usuário não for encontrado, redireciona de volta para a página de login.

Esse processo garante que apenas usuários registrados possam acessar as páginas protegidas do sistema.