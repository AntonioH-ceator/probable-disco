<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ATech</title>
        <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php 
    
        include_once("Conexao.php");
        include_once("searchBlock.php");
        $cmd = $pdo->query("Select * from cursos order by nome;");
        $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
        $qtd_result = count($result);
    ?>
    <header class="header">
        <div class="main_container">
            <div class="flex-space-between">
                <div class="logo">
                    <img src="img/logo_small3.png" height="40" alt="">
                </div>
                <div class="redes_sociais">
                    <img class="header_icon" src="img/facebook.svg">
                    <img class="header_icon" src="img/twitter.svg">
                    <img class="header_icon" src="img/linkedin.svg">
                </div>
            </div>
        </div>
    </header>
    <menu class="menu">
        <div class="main_container flex-space-between">
            <div class="menu_container">
                    <a class="menu_item button txt_center" href="index.php">Home</a>
                    <a class="menu_item button txt_center" href="">Sobre Nós</a>
                    <a class="menu_item button txt_center bold" href="services.php">Cursos</a>
                    <a class="menu_item button txt_center" href="">Páginas</a>
                    <a class="menu_item button txt_center" href="">Blog</a>
                    <a class="menu_item button txt_center" href="">Contacte-nos</a>
            </div>
            <div class="center-content search-bar-comp">
                <form action="search.php" method="get">
                    <input type="text" name="search" class="search-bar" placeholder="Procurar..."> 
                </form>
            </div>
        </div>
    </menu>
    <div class="main_container left-align">
        <ul class="block-list">
        <?php
            foreach ($result as $key => $value){
                $block[$key] = new searchBlock(
                    $result[$key]['nome'],
                    $result[$key]['descricao'],
                    $result[$key]['carga'],
                    $result[$key]['totaulas'],
                    $result[$key]['ano']
                );
                $block[$key]->display();
            }
        ?>
        </ul>
    </div>
    <footer class="footer">
        <div class="main_container">
            <div class="credits">
            <p class="txt_light">Ícones feitos por <a href="https://www.flaticon.com/br/autores/freepik" title="Freepik">Freepik</a> em <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></p><br><hr><br>
            <div class="redes_sociais">
                <img class="header_icon" src="img/facebook.svg">
                <img class="header_icon" src="img/twitter.svg">
                <img class="header_icon" src="img/linkedin.svg">
            </div>
            <p class="txt_light">hgfantonio@gmail.com</p>
            </div>
        </div>
    </footer>
</body>
</html>