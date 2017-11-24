<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Gasto</title>
</head>
<body  bgcolor="#696969">
    <form method="POST" action="inserirGasto.php">
      <table bgcolor="#00FF00" width="800" border="2" align="center">
       <tr>
           <td colspan="10">
               <div align="center"><h1>Cadastro de Gasto</h1></div>
           </td>
       </tr>
          <tr>
           <td>
               <div align="center">Codigo: <input type="number" name="codigo"></div>
           </td>
           <td>
               <div align="center">Data de Atendimento: <input type="date" name="dataAtendimento"></div>
           </td>
           <td>
               <div align="center">Data de Agendamento: <input type="date" name="dataAgentamento"></div>
           </td>
           <td>
               <div align="center">Cliente: <input type="number" name="cliente"></div>
           </td>
           <td>
               <div align="center">Descrição: <input type="text" name="descricao"></div>
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
               <center><a href="menu.php"><h4>Voltar ao menu</h4></a></center>
           </td>
        </tr>
    </table>
</body>
</html>
