<?php

$conn = mysql_connect("localhost", "root", "") or die ("Erro ao conectar com o banco de dados");
mysql_select_db("adv", $conn);

$q = mysql_real_escape_string($_GET['query']);

$sql = "SELECT clienteId, clienteNome FROM cliente WHERE clienteNome LIKE '$q%' LIMIT 10;";
$res = mysql_query($sql);
echo '[';
while($row = mysql_fetch_array($res)){
	echo '{nome: "'.$row['clienteNome'].'",id: '.$row['clienteId'].'},';
}
echo ']';

?>