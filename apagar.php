<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apagar</title>
</head>
<body bgcolor="#696969">
    <?php
        $codigo = $_GET["codigo"];
        $conexao=mysqli_connect("localhost","root","","trabalho3bi");
        if(mysqli_connect_errno($conexao)){
            echo "Problemas de conexão.Erro:";
            echo mysqli_connect_error();
            die();
        }
        $query = "DELETE FROM clientes WHERE codigo = $codigo";
        $resultado = mysqli_query($conexao,$query);

        if($resultado){
            echo "Cadastro Apagado!";
        }else{
            echo "Erro ao apagar.";
        }
      ?>
      <br>
      <a href="visualizar.php">Visualizar os cadastros</a>
</body>
</html>