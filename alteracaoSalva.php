<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alteração Salva</title>
</head>
<body>
    <?php
    $codigo = $_POST["codigo"];
    $data =  $_POST["data"];
    $descricao = $_POST["descricao"];
    $valorRendimento = $_POST["valor_Rendimento"];
    
    $conexao = mysqli_connect("localhost","root","","trabalho3bi");
            if(mysqli_connect_errno($conexao)){
                echo "Problemas de conexão.Erro:";
                echo mysqli_connect_error();
                die();
            }
    
   $query =("UPDATE rendimento SET codigo='$codigo', data='$data', descricao='$descricao', valor_Rendimento='$valorRendimento'  codigo=$codigo")or die(mysql_error());
        $resultado = mysqli_query($conexao, $query);
        if($resultado){
            echo "Alterado!";
        }else{
            echo "Erro ao aterar.";
        }
        mysqli_close($conexao);
    ?>
    <br> 
    <a href="visualizaRendimento.php">Voltar</a>
</body>
</html>