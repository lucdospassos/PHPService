<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente - SENAC</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: grid;
            gap: 20px;
        }

        label {
            color: #555;
            margin-bottom: 5px;
        }

        input, button {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"], button[type="button"] {
            background-color: #008CBA;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover, button[type="button"]:hover {
            background-color: #005f73;
        }
    </style>
</head>
<body>

<?php
// Inicializa a variável de controle
$clienteCadastrado = false;

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processamento do formulário
    // ...

    $clienteCadastrado = true;
}
?>

<div class="container">
    <h2>Cadastro de Cliente</h2>

    <?php if ($clienteCadastrado): ?>
        <p style="color: green; text-align: center;">Cliente cadastrado com sucesso!</p>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Digite o nome do cliente">

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" placeholder="Digite o sobrenome do cliente">

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" placeholder="Digite o CPF do cliente" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">

        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" placeholder="Digite o telefone do cliente">

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Digite o email do cliente">

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" placeholder="Digite o endereço do cliente">

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" placeholder="Digite a cidade do cliente">

        <label for="estado">Estado:</label>
        <input type="text" name="estado" placeholder="Digite o estado do cliente">

        <label for="cep">CEP:</label>
        <input type="text" name="cep" placeholder="Digite o CEP do cliente" pattern="\d{5}-\d{3}">

        <input type="submit" value="Cadastrar">
        <button type="button" onclick="redirecionarParaNovaPagina()">Novo Cadastro</button>
    </form>
</div>

<script>
    function redirecionarParaNovaPagina() {
        window.location.href = 'http://34.72.56.1/';
    }
</script>

</body>
</html>
