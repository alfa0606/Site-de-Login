<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Gasto</title>
</head>
<body  bgcolor="#696969">
    
       <table bgcolor="#00FF00" width="800" border="2" align="center">
        <tr>
           <td colspan="10">
               <div align="center"><h1>Agendamentos de Serviços</h1></div>
           </td>
           </tr>
           <tr>
           <td>
               <div align="center">Código</div>
           </td>
           <td>
               <div align="center">Data Atendimento</div>
           </td>
           <td>
               <div align="center">Data Agendamento</div>
           </td>
           <td>
               <div align="center">Cliente</div>
           </td>
            <td>
               <div align="center">Descrição</div>
           </td>
           <td>
               <div align="center">Editar</div>
           </td>
           <td>
               <div align="center">Apagar</div>
           </td>
           
       </tr>
       <?php
            $conexao = mysqli_connect("localhost","root","","trabalho4bim");
            if(mysqli_connect_errno($conexao)){
                echo "Problemas de conexão.Erro:";
                echo mysqli_connect_error();
                die();
            }
            $query = "select * from agendamentoservico";
            $resultado = mysqli_query($conexao,$query);
            while($row = mysqli_fetch_array($resultado)){
                echo"<tr>";
                $codigo = $row["codigo"];
                $dataAgendamento =  $row["dataAgendamento"];
                $dataAtendimento =  $row["dataAtendimento"];
                $cliente = $row["cliente"];
                $descricao = $row["descricaoServico"];
                
                echo "<td><center>$codigo</td>";
                echo "<td><center>$dataAtendimento</td>";
                echo "<td><center>$dataAgendamento</td>";
                echo "<td><center>$cliente</td>";
                echo "<td><center>$descricao</td>";
                echo "<td><center><a href='editarGasto.php?codigo=$codigo'><img src='editar.png' width = '25' height = '30'></a></center></td>";
                echo "<td><center><a href='apagarGasto.php?codigo=$codigo'><img src='apagar.png' width = '25' height = '30'></a></center></td>";

                echo "</tr>";
            }
       ?>
       <table bgcolor="#00FF00" width="800" border="1" align="center">
        <tr>
           <td>
               <center><a href="menu.php"><h3>Voltar ao menu</h3></a></center>
           </td>
        </tr>
    </table>
    </table>
</body>
</html>