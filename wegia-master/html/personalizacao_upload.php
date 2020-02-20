<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    session_start();
    if (!isset($_SESSION["usuario"])){
        header("Location: ../index.php");
    }

    require_once "../dao/Conexao.php";

    echo($_FILES['img_file']['type']);

    if ( isset( $_FILES[ 'img_file' ][ 'name' ] ) && $_FILES[ 'img_file' ][ 'error' ] == 0 ) {
        echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'img_file' ][ 'name' ] . '</strong><br />';
        echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'img_file' ][ 'type' ] . ' </strong ><br />';
        echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'img_file' ][ 'tmp_name' ] . '</strong><br />';
        echo 'Seu tamanho é: <strong>' . $_FILES[ 'img_file' ][ 'size' ] . '</strong> Bytes<br /><br />';
        
        $arquivo_tmp = $_FILES[ 'img_file' ][ 'tmp_name' ];
        $nome = $_FILES[ 'img_file' ][ 'name' ];
        
        // Pega a extensão
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
        
        // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao );
        
        // Somente imagens, .jpg;.jpeg;.gif;.png
        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
            // Cria um nome único para esta imagem
            // Evita que duplique as imagens no servidor.
            // Evita nomes com acentos, espaços e caracteres não alfanuméricos
            $novoNome = uniqid ( time () ) . '.' . $extensao;
            
            // Concatena a pasta com o nome
            $destino = '../img/' . $novoNome;
            
            // tenta mover o arquivo para o destino
            if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                echo ' < img src = "' . $destino . '" />';
            }
            else
            echo 'Erro ao salvar o arquivo. Você não tem permissão de escrita.<br />';
        }
        else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
    }elseif (isset($_POST["txt"])){
        $txt = $_POST["txt"];
    }
    ?>
    </div>
</body>
</html>