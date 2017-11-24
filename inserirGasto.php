.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inserir Gasto</title>
</head>
<body  bgcolor="#696969">
    <table bgcolor="#00FF00" width="800" border="1" align="center">
        <tr>
           <td>
    <?php
    
    $codigo = $_POST["codigo"];
    $dataAtendimento = $_POST["dataAtendimento"];
    $dataAgendamento = $_POST["dataAgentamento"];
    $cliente = $_POST["cliente"];
    $descricao = $_POST["descricao"];
    
    $erro =0;
    if(empty($codigo)){
        echo "O Código deve ser preenchido.";
        $erro=1;
    }
    if(empty($dataAtendimento)){
        echo "A Data deve ser preenchido.";
        $erro=1;
    }
    if(empty($dataAgendamento)){
        echo "A Data deve ser preenchido.";
        $erro=1;
    } 
    if(empty($cliente)){
        echo "O valor do cliente deve ser preenchido.";
        $erro=1;
    } 
    if(empty($descricao)){
        echo "A Descrição deve ser preenchido.";
        $erro=1;
    }
    
       
    if($erro == 0){
        $conexao = mysqli_connect("localhost", "root", "", "trabalho4bim");
        if(mysqli_connect_errno($conexao)){
            echo "Problemas de conexão.Erro:";
            echo mysqli_connect_error();
            die();
        }
        $query = "insert into agendamentoservico values('".$codigo."','".$dataAgendamento."','".$dataAtendimento."','".$cliente."','".$descricao."')";
        $resultado = mysqli_query($conexao, $query);
        if($resultado){
            echo "<center>Cadastro Completo!</center>";
        }else{
            echo "<center>Erro ao inserir.</center>";
        }
        mysqli_close($conexao);
    }
    ?>
               <center><a href="menu.php"><h3>Voltar ao menu</h3></a></center>
           </td>
        </tr>
    </table>
    <table bgcolor="#00FF00" width="800" border="1" align="center">
        <tr>
           <td>
               <center><a href="visualizaGasto.php"><h3>Visualizar Gastos</h3></a></center>
           </td>
        </tr>
    </table>
</body>
</html>