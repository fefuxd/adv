<?php require_once("conexao/conexao.php"); ?>
<?php
$term = trim(strip_tags($_GET['term']));//retrieve the search term that autocomplete sends

$qstring = "SELECT clienteNome as value,clienteId as id FROM cliente WHERE clienteNome LIKE '%".$term."%' LIMIT 10";

 $consulta_tr = mysqli_query($conecta, $qstring);
    if(!$consulta_tr) {
        die("erro no banco1");
    }

while ($row = mysqli_fetch_array($consulta_tr,MYSQL_ASSOC))//loop through the retrieved values
{
		$row['value']=htmlentities(stripslashes($row['value']));
		$row['id']=(int)$row['id'];
		$row_set[] = $row;//build an array
}
echo json_encode($row_set);//format the array into json data
?>