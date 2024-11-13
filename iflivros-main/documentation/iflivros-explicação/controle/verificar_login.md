# Explicação do Código: Verificação de Sessão de Login

Este código tem como objetivo verificar se o usuário está autenticado (logado) antes de permitir o acesso a uma página protegida. Caso o usuário não esteja logado, ele será redirecionado para a página de login.

### Explicação do Código:

```php
session_start();
```
- **Linha 1**: Inicia a sessão. A função `session_start()` é necessária para acessar ou criar variáveis de sessão. Ela permite que o código acesse as informações armazenadas na sessão do usuário, como a variável `$_SESSION['logado']`, que foi definida no código de login.

```php
if (!isset($_SESSION['logado'])) {
```
- **Linha 2**: Verifica se a variável de sessão `$_SESSION['logado']` está definida. 
  - **`!isset()`** significa "se não estiver definida". A função `isset()` verifica se a variável existe e contém um valor. Se `$_SESSION['logado']` não estiver definida (ou seja, o usuário não está logado), a condição será verdadeira.

```php
    // echo "nao posso acessar";
    header("Location: ../public/index.php");
}
```
- **Linhas 3 a 5**:
  - **Comentário**: O código comentado (`// echo "nao posso acessar";`) indica que, antes de ser redirecionado, o sistema poderia exibir uma mensagem dizendo que o acesso não é permitido. No entanto, a mensagem está comentada e não será exibida.
  - **`header("Location: ../public/index.php")`**: Se o usuário não estiver logado (se a variável `$_SESSION['logado']` não estiver definida), ele será redirecionado para a página de login (`index.php`). O comando `header()` envia um cabeçalho HTTP que instrui o navegador a redirecionar o usuário para a URL especificada.

---

### Resumo

Este código garante que apenas usuários autenticados (com uma sessão ativa) possam acessar a página onde ele está inserido. Se a variável `$_SESSION['logado']` não estiver definida, indicando que o usuário não está logado, ele será redirecionado para a página de login (`index.php`). Isso impede que pessoas não autenticadas acessem partes protegidas do sistema.