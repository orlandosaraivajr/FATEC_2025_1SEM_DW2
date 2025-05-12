<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Lojinha</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2.textlogin {
            margin-bottom: 24px;
            color: #333;
        }

        form label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
        }

        .botaoentrar {
            background-color: #6c63ff;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .botaoentrar:hover {
            background-color: #5149d4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="textlogin">Login</h2>
        <form action="login.php" method="POST">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" placeholder="Insira seu login" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Insira sua senha" required>

            <input class="botaoentrar" type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
