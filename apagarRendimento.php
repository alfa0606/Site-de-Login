<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apagar Rendimento</title>
</head>
<body bgcolor="#696969">
   <center>
    <table bgcolor="#00FF00" width="800" border="1" align="center">
        <tr>
           <td>
       <?php
        $codigo = $_GET["codigo"];
        $conexao=mysqli_connect("localhost","root","","trabalho3bi");
        if(mysqli_connect_errno($conexao)){
            echo "Problemas de conexão.Erro:";
            echo mysqli_connect_error();
            die();
        }
        $query = "DELETE FROM rendimento WHERE codigo = $codigo";
        $resultado = mysqli_query($conexao,$query);

        if($resultado){
            echo "<center>Cadastro Apagado!</center>";
        }else{
            echo "<center>Erro ao apagar.</center>";
        }
      ?>
      <br>
      <center><a href="menu.php"><h3>Voltar ao menu</h3></a></center>
           </td>
        </tr>
    </table>
    </center>
</body>
</html>