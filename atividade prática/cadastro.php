<?php
$erros = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $user = $_POST['user'] ?? '';
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL); [cite: 42]
    $senha = $_POST['senha'] ?? '';
    $confirma = $_POST['confirma'] ?? '';

    // Validação: Todos os campos preenchidos [cite: 41]
    if (empty($nome) || empty($user) || empty($email) || empty($senha)) {
        $erros[] = "Todos os campos são obrigatórios.";
    }

    // Validação de Senha: 6 caracteres, 1 Maiúscula, 1 Número [cite: 43]
    if (!preg_match('/^(?=.*[A-Z])(?=.*\d).{6,}$/', $senha)) {
        $erros[] = "A senha deve ter no mínimo 6 caracteres, incluindo uma letra maiúscula e um número.";
    }

    // Senhas coincidem [cite: 44]
    if ($senha !== $confirma) {
        $erros[] = "As senhas não coincidem.";
    }

    if (empty($erros)) {
        header("Location: index.php"); [cite: 51]
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro - ConectaDev</title>
</head>
<body class="bg-light">
    <div class="container py-5" style="max-width: 500px;">
        <div class="card p-4">
            <h2 class="mb-4">Criar Conta</h2>
            <?php foreach($erros as $e): ?>
                <div class="alert alert-danger py-1"><?php echo $e; [cite_start]?></div> [cite: 50]
            <?php endforeach; ?>
            <form method="POST">
                [cite_start]<input type="text" name="nome" placeholder="Nome Completo" class="form-control mb-2" value="<?php echo $_POST['nome'] ?? ''; ?>"> [cite: 52]
                <input type="text" name="user" placeholder="@username" class="form-control mb-2" value="<?php echo $_POST['user'] ?? ''; ?>">
                <input type="email" name="email" placeholder="Email" class="form-control mb-2" value="<?php echo $_POST['email'] ?? ''; ?>">
                <input type="password" name="senha" placeholder="Senha" class="form-control mb-2">
                <input type="password" name="confirma" placeholder="Confirmar Senha" class="form-control mb-2">
                [cite_start]<input type="date" name="nascimento" class="form-control mb-2"> [cite: 38]
                [cite_start]<select name="genero" class="form-select mb-3"> [cite: 39]
                    <option value="">Gênero</option>
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    <option value="O">Outro</option>
                </select>
                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>