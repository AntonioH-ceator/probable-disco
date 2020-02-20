<?php

// Coexão

try {
    $pdo = new PDO("mysql:dbname=cadastrob;host=localhost;charset=utf8","root","");
} catch (PDOException $e) {
    echo "Erro ao conectar-se com o banco de dados: ".$e->getMessage();
} catch (Exception $e){
    echo "Erro genérico: ".$e->getMessage();
}

function clean($s){
    return str_replace('"','',str_replace("'","",$s));
}

?>