<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alterar Rendimento</title>
</head>
<body>
    
    <form action="alteracaoSalva.php" method="post">
       <p>
           <center>Código: <input type="number" name="codigo" > </center>
        </p>
        <p>
            <center>Data: <input type="date" name="data" ></center>
        </p>
        <p>
            <center>Descrição: <input type="text" name="descricao"></center>
        </p>
        <p>
            <center>Valor de Rendimento: <input type="double" name="valor_Rendimento"></center>
        </p>
        <center><input type="submit" name="ENVIAR" value="ENVIAR"></center>
    </form>
    
    <?php
    $conexao = mysqli_connect("localhost","root","","trabalho3bi");
            if(mysqli_connect_errno($conexao)){
                echo "Problemas de conexão.Erro:";
                echo mysqli_connect_error();
                die();
            }
    $codigo=$_GET['codigo'];
    
    $query = "select * from rendimento where codigo=$codigo";
    $resultado = mysqli_query($conexao,$query);
    while ($query = mysqli_fetch_array($resultado))
    {
        $codigo = $query["codigo"];
        $data = $query["data"];
        $descricao = $query["descricao"];
        $valorRendimento = $query["valorRendimento"];
    }
    ?>
</body>
</html>