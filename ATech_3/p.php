<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

    require_once("conexao.php");

    function clean($s){
        return str_replace('"','',str_replace("'","",$s));
    }

    $cmd = $pdo->query("select * from cursos where descricao like '%html%';");
    $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
    echo(count($result));
    ?>
<ul class="block-list">
    <li class="search-result-block">
        <h3 class="link"><a href="">Lorem Ipsum</a></h3>
        <hr>
        <div class="description">Autor <span>&#8226;</span> 01/01/2020</div>
        <p>
        Lorem ipsum iaculis dictum quis feugiat volutpat porta laoreet faucibus nisi, ut euismod quam arcu eleifend ut lobortis eleifend erat integer, consectetur tempor justo venenatis vulputate litora habitant fermentum lacus. 
        </p>
    </li>
</ul>
</body>
</html>

