<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Gerador de Currículo</h1>
        <form action="gerar_curriculo.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="experiencia">Experiência Profissional:</label>
                <div id="experiencia">
                    <input type="text" class="form-control mb-2" name="experiencia[]" required>
                </div>
                <button type="button" class="btn btn-secondary" id="add-experiencia">Adicionar Experiência</button>
            </div>
            <div class="form-group">
                <label for="formacao">Formação Acadêmica:</label>
                <div id="formacao">
                    <input type="text" class="form-control mb-2" name="formacao[]" required>
                </div>
                <button type="button" class="btn btn-secondary" id="add-formacao">Adicionar Formação</button>
            </div>
            <button type="submit" class="btn btn-primary">Gerar Currículo</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
