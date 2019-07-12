<?php
$connection = mysql_connect("localhost","root","");  
mysql_select_db("adv",$connection);

if(isset($_GET['getClientId'])){  
  $res = mysql_query("select * from cliente where clienteId='".$_GET['getClientId']."'") or die(mysql_error());
  if($inf = mysql_fetch_array($res)){
    echo utf8_encode("formObj.clienteNome.value = '".$inf["clienteNome"]."';\n");    
    

  }else{
    echo "formObj.clienteNome.value = '';\n";    
     
  }    
}
?>