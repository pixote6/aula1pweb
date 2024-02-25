<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Empresa - Contato</title>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="content">
        <h1>Entre em Contato</h1>
        <form action="processa_formulario.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="mensagem">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>
            
            <button type="submit">Enviar</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>