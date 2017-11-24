<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verificar Rendimento</title>
</head>
<body bgcolor="#696969">
   <table bgcolor="#00FF00" width="800" border="1" align="center">
        <tr>
           <td>
    <?php
    $codigo = $_POST["codigo"];
    $data =  $_POST["data"];
    $descricao = $_POST["descricao"];
    $valorRendimento = $_POST["valor_Rendimento"];
    
    $erro =0;
    if(empty($codigo)){
        echo "O codigo deve ser preenchido.";
        $erro=1;
    }
    if(empty($data)){
        echo "A data deve ser preenchido.";
        $erro=1;
    }
    if(empty($descricao)){
        echo "A drescricao deve ser preenchido.";
        $erro=1;
    }
    if(empty($valorRendimento)){
        echo "o valor do endimento deve ser preenchido.";
        $erro=1;
    }
    
    
    if($erro == 0){
        $conexao = mysqli_connect("localhost", "root", "", "trabalho3bi");
        if(mysqli_connect_errno($conexao)){
            echo "Problemas de conexão.Erro:";
            echo mysqli_connect_error();
            die();
        }
                    
            $query = "insert into rendimento values ('".$codigo."', '".$data."', '".$descricao."', '".$valorRendimento."')";
            $resultado = mysqli_query($conexao, $query);
            if($resultado)
            {
                echo "<center>Inserindo com sucesso</center>";
            }
            else
            {
                echo "<center>Erro ao inserir<center>";
            }
            
            mysqli_close($conexao);
    }
        ?>
               <p><center><a href="visualizaRendimento.php">Visualizar os cadastros dos rendimentos</a></center></p>   
            </td>
       </tr>
    </table>
</body>
</html>