<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Rendimento</title>
</head>
<body bgcolor="#696969">
   <?php
        $conexao=mysqli_connect("localhost","root","","trabalho3bi");
        if(mysqli_connect_errno($conexao)){
            echo "Problemas de conexão.Erro:";
            echo mysqli_connect_error();
            die();
        }
        $codigo=$_GET['codigo'];
        $query= ("delete from rendimento where codigo=$codigo");
        $resultado=mysqli_query($conexao, $query);
        if ($resultado)
        {
            
        }
        else
        {
        
        }
    ?>
    <form method="POST" action="verificarRendimento.php">
      <table bgcolor="#00FF00" width="800" border="2" align="center">
       <tr>
           <td colspan="10">
               <div align="center"><h1>Editar Rendimento</h1></div>
           </td>
       </tr>
          <tr>
           <td>
               <div align="center">Codigo: <input type="number" name="codigo"></div>
           </td>
           <td>
               <div align="center">Data: <input type="date" name="data"></div>
           </td>
           <td>
               <div align="center">Descrição: <input type="text" name="descricao"></div>
           </td>
           <td>
               <div align="center">Valor de Rendimento: <input type="double" name="valor_Rendimento"></div>
           </td>
        </table>
        <table bgcolor="#00FF00" width="800" border="1" align="center">
        <tr>
           <td>
               <center><input type="submit" name="ENVIAR" value="ENVIAR"></center>
           </td>
        </tr>
        </table>
        
    </form>
    <table bgcolor="#00FF00" width="800" border="1" align="center">
        <tr>
           <td>
               <center><a href="menu.php"><h3>Voltar ao menu</h3></a></center>
           </td>
        </tr>
    </table>
    </body>
</html>