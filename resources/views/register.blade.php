<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <form action="/cadastro" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required minlength="3"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="celular">Celular:</label>
        <input type="tel" id="celular" name="celular" pattern="[0-9]{10}" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required minlength="6"><br>

        <label for="confirmacao_senha">Confirmar Senha:</label>
        <input type="password" id="confirmacao_senha" name="confirmacao_senha" required minlength="6"><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>