<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Galeria de Imagens:</h1>
    <a href="upload.php">Enviar nova Imagem</a>
    <hr>

    <h2>Imagens Enviadas:</h2>
    <div style="display: flex; flex-wrap:wrap; gap: 10px;">
        <?php
        $pasta = "upload/";
        if(is_dir($pasta)){
            $arquivos=scandir($pasta);
            foreach($arquivos as $arquivo) {
                if($arquivo != "." && $arquivo !="."){
                    echo "<div>
                    <img src='$pasta$arquivo' width='150' style='border: 1px solid #ccc;'>
                    </div>";
                }
            }
        }else{
            echo "<p>Nenhuma imagem encontrada</p>";
        }
        ?>
    </div>
</body>
</html>