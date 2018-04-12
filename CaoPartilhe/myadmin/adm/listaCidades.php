<?php
    include ("banco.php");
  //
  $con = RetornaConexaoMysql('magocomercial', 'magocomercial_com_br');
  header('Content-Type: text/html; charset=ISO-8859-1');      

$id_categoria = $_GET['categoria'];
$rs = mysql_query("SELECT * FROM tbl_sub_categoria WHERE id_categoria = '$id_categoria' ORDER BY desc_subcategoria");
 
echo "<label>Sub Categoria: </label><select name='subcategoria'>n";
while($reg = mysql_fetch_object($rs)){
    echo "<option value='$reg->id_sub_categoria'>$reg->desc_subcategoria</option>n";
}
echo "</select>n";
 
?> 
