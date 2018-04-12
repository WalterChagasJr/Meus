<?
include "conexao.php";

$codEstado = $_GET['codEstado'];

$sql = "SELECT id, nome FROM cad_cidades WHERE estado=$codEstado";
$res = mysql_query($sql,$conexao);
$num_cidades = mysql_num_rows($res);

?>
<select name="cidade" id="cidade">
<? for($j=0;$j<$num_cidades;$j++){
	$dados = mysql_fetch_array($res);
?>
	<option value="<? echo $dados['id']?>"><? echo $dados['nome']?></option>
<? }?>
</select>