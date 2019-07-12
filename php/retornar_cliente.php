<?php
$hostname = "";
$user = "";
$pass = "";
$basedados = "";
$pdo = new PDO("mysql:host=localhost; dbname=adv; charset=utf8;",'root','');
$dados = $pdo->prepare("SELECT clienteNome, clienteId FROM cliente ORDER BY clienteNome");
$dados->execute();
echo json_encode($dados->fetchAll(PDO::FETCH_ASSOC));
?>