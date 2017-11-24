<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Gasto</title>
</head>
<body bgcolor="#696969">
   <?php
        $conexao=mysqli_connect("localhost","root","","trabalho4bim");
        if(mysqli_connect_errno($conexao)){
            echo "Problemas de conexão.Erro:";
            echo mysqli_connect_error();
            die();
        }
        $codigo=$_GET['codigo'];
        $query= ("select * from agendamentoservico where codigo=$codigo");
        $resultado= mysqli_query($conexao, $query);
        while($row=mysqli_fetch_array($resultado))
        {
            $codigo=$row["codigo"];
            $dataAgendamento=$row["dataAgendamento"];
            $dataAtendimento=$row["dataAtendimento"];
            $cliente=$row["cliente"];
            $descricaoServico=$row["descricaoServico"];
            
        }
    ?>
    <form method="post" action="verificarGasto.php">
           <p>
           <center>Código: <input name="codigo" value="<?php echo $codigo; ?>" readonly=true>  </center>
        </p>
        <p>
            <center>Data atendimento: <input type="date" name="dataAtendimento" value="<?php echo $dataAtendimento; ?>"></center>
        </p>
        <p>
            <center>Data agendamento: <input type="date" name="dataAgendamento" value="<?php echo $dataAgendamento; ?>" ></center>
        </p>
        <p>
            <center>Cliente: <input type="double" name="cliente" value="<?php echo $cliente; ?>"></center>
        </p>
        <p>
            <center>Descrição: <input type="text" name="descricao" value="<?php echo $descricaoServico; ?>"></center>
        </p>
        
        <center><input type="submit" name="ENVIAR" value="ENVIAR"></center>
    </form>
</body>
</html>