<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verificar </title>
</head>
<body bgcolor="#696969">
    <?php
        $codigo = $_POST["codigo"];
        $dataAtendimento =  $_POST["dataAtendimento"];
        $dataAgendamento =  $_POST["dataAgendamento"];
        $cliente = $_POST["cliente"];
        $descricao = $_POST["descricao"];

        $erro =0;
        if(empty($codigo)){
            echo "O codigo deve ser preenchido.";
            $erro=1;
        }
        if(empty($dataAtendimento)){
            echo "A data deve ser preenchido.";
            $erro=1;
        }
        if(empty($dataAgendamento)){
            echo "A data deve ser preenchido.";
            $erro=1;
        }
        if(empty($descricao)){
            echo "A descricao deve ser preenchido.";
            $erro=1;
        }
        

        if($erro == 0){
            $conexao = mysqli_connect("localhost", "root", "", "trabalho4bim");
            if(mysqli_connect_errno($conexao)){
                echo "Problemas de conexão.Erro:";
                echo mysqli_connect_error();
                die();
       
                
            }
            else{
                $query= ("update agendamentoservico set dataAtendimento='$dataAtendimento', dataAgendamento='$dataAgendamento', cliente='$cliente', descricaoServico='$descricao' where codigo=$codigo");
                $resultado=mysqli_query($conexao,$query);
                if($resultado)
                {
                    echo "Atualizado com sucesso";
                    
                }
                else
                {
                    echo "Erro ao inserir";
                }
                echo "<p><a href='visualizaGasto.php'>Visualizar os cadastros</a></p>";

                mysqli_close($conexao);
            }
        }
        ?> 
        
       
</body>
</html>