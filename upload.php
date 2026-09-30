<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h1>Enviar uma mensagem</h1>
        <form action="processo_upload.php" method="post" enctype="multipart/form-data">
            <label>Selecione a imagem:</label><br><br>
            <input type="file" name="arquivo" require><br><br>
            <button type="submit">Enviar</button>
        </form>
    <br>
    <a href="index.php">Voltar para a galeria</a>
</body>
</html>