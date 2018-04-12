<?
include "conexao.php";

$sql = "SELECT * FROM cad_estados ORDER BY UF";
$res = mysql_query($sql,$conexao);
$num = mysql_num_rows($res);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="prototype.js"></script>
<script language="javascript">
function CarregaCidades(codEstado)
{
	if(codEstado){
		var myAjax = new Ajax.Updater('cidadeAjax','carrega_cidades.php?codEstado='+codEstado,
		{
			method : 'get',
		}) ;
	}
	
}
</script>

</head>

<body>
<table width="300" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr>
    <td width="88">Estado:</td>
    <td width="212">
      <select name="estado" id="estado" onchange="CarregaCidades(this.value)">
      <? for($i=0;$i<$num;$i++)
	  {
	  	$dados = mysql_fetch_array($res);
	  ?>
      	<option value="<? echo $dados['id']?>"><? echo $dados['UF']?></option>
       <? }?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Cidade:</td>
    <td><div id="cidadeAjax">
      	<select name="cidade" id="cidade">
      		<option value="">Selecione o estado</option>
    	</select>
    </div></td>
  </tr>
</table>
</body>
</html>
