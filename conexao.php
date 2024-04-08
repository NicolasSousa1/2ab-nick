<?php 

try {
    $pdo = new  PDO('mysql:localhost;dbname=etec_23077', 'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("conectado 2AB os melhores");
} catch (PDOException $e) {

echo 'Erro:' . $e->getMessage();
echo ("não conectado");

}

?>
