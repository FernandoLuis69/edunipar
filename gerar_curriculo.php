<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $experiencia = $_POST['experiencia'];
    $formacao = $_POST['formacao'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?php echo htmlspecialchars($nome); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Currículo de <?php echo htmlspecialchars($nome); ?></h1>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
        <p><strong>Endereço:</strong> <?php echo htmlspecialchars($endereco); ?></p>
        <h3>Experiência Profissional</h3>
        <ul>
            <?php foreach ($experiencia as $exp) { ?>
                <li><?php echo htmlspecialchars($exp); ?></li>
            <?php } ?>
        </ul>
        <h3>Formação Acadêmica</h3>
        <ul>
            <?php foreach ($formacao as $form) { ?>
                <li><?php echo htmlspecialchars($form); ?></li>
            <?php } ?>
        </ul>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>

<?php
} else {
    header('Location: index.php');
    exit();
}
?>
