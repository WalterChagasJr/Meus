<?php
    include ("banco.php");
  //
  $con = RetornaConexaoMysql('magocomercial', 'magocomercial_com_br');
  header('Content-Type: text/html; charset=ISO-8859-1');      
 
  $rs = mysql_query("SELECT * FROM tbl_categoria ORDER BY desc_categoria");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Atualizando combos com jquery</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="jquery-1.6.4.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#categoria').change(function(){
            $('#subcategoria').load('listaCidades.php?categoria='+$('#categoria').val());
        });
    });
    </script>
  </head>
  <body>
  <h1>Atualizando combos com jquery</h1>
    <label>Categoria:</label>
    <select name="categoria" id="categoria">
    <?php while($reg = mysql_fetch_object($rs)): ?>
        <option value="<?php echo $reg->id_categoria ?>"><?php echo $reg->desc_categoria ?></option>
    <?php endwhile; ?>
    </select>
    <br /><br />
    <div id="subcategoria"></div>
  </body>
</html> 
