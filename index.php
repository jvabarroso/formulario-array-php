<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(135deg, #87ceeb, #003366);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            max-width: 500px;
            padding: 2rem;
            background: linear-gradient(135deg, #ffffff, #f0f4f8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .login-container h2 {
            margin-bottom: 1.5rem;
        }
        .login-container .btn {
            width: 100%;
        }
        .alert {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center text-primary">Login</h2>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Usuário</label>
                <input id="username" name="input_usuario" class="form-control" type="text" placeholder="Digite o nome de usuário" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input id="password" name="input_senha" class="form-control" type="password" placeholder="Digite aqui sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Fazer Login</button>
            <?php
                $usuarioCerto = "admin";
                $senhaCerta = "admin";

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $input_usuario = $_POST["input_usuario"] ?? '';
                    $input_senha = $_POST["input_senha"] ?? '';

                    if (empty($input_usuario) || empty($input_senha)) {
                        echo '<div class="alert alert-warning" role="alert">Preencha as informações acima.</div>';
                    } else {
                        if ($input_usuario === $usuarioCerto && $input_senha === $senhaCerta) {
                            header("Location: destino.php");
                            exit;
                        } else {
                            echo '<div class="alert alert-danger" role="alert">Usuário ou senha incorretos</div>';
                        }
                    }
                }
            ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
