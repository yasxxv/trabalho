<?php
 # operacoes.php
 $SERVIDOR = "localhost";
 $USUARIO = "root";
 $SENHA = "";
 $BASE = "filmes";
 $TABELA = "filme";
 $URL = "localhost";
 $PASTA = "lala";
 $oper = $_GET["op"];
 $oper = ($oper)?:"X";
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Filmes</title>
  <style>
   * {font-family: Verdana, Arial, Helvetica, sans-serif;}
  </style>
 </head>
 <body>
<?php
 switch ($oper) {
  case 'incluir':
?>
  <form action="operacoes.php" method="GET">
   <input type="hidden" name="op" value="add">
   <p><label for="filme">Nome do Filme:</label>
    <input type="text" id="filme" name="filme" size="80"></p>
   <p><label for="diretor">Nome do Diretor:</label>
    <input type="text" id="diretor" name="diretor"></p>
   <p><label for="protagonista">Nome do Protagonista:</label>
    <input type="text" id="protagonista" name="protagonista"></p>
   <p><label for="ano">Ano de Lançamento:</label>
    <input type="number" id="ano" name="ano" min="1895"></p>
   <p><input type="submit" value="Enviar"></p>
  </form>
<?php
   break;
  case 'add':
   $nome = $_GET["filme"];
   $diretor = $_GET["diretor"];
   $protagonista = $_GET["protagonista"];
   $ano = $_GET["ano"];
   $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('$nome', '$diretor', '$protagonista', $ano)";
   $conexao = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BASE);
   mysqli_query($conexao, $sql);
   mysqli_close($conexao);
   header("Location: http://$URL/$PASTA/");
   break;
  case 'exc':
   $codigo = $_GET["codigo"];
   $sql = "Delete From $TABELA Where codigo = $codigo";
   $conexao = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BASE);
   mysqli_query($conexao, $sql);
   mysqli_close($conexao);
   header("Location: http://$URL/$PASTA/");
   break;
  case 'alt':
   $codigo = $_GET["codigo"];
   $nome = $_GET["nome"];
   $protagonista = $_GET["protagonista"];
   $diretor = $_GET["diretor"];
   $ano = $_GET["ano"];
?>
  <form action="operacoes.php" method="GET">
   <input type="hidden" name="op" value="upd">
   <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
   <p><label for="filme">Nome do Filme:</label>
    <input type="text" id="filme" name="filme" value="<?php echo $nome ?>" size="80"></p>
   <p><label for="diretor">Nome do Diretor:</label>
    <input type="text" id="diretor" name="diretor" value="<?php echo $diretor ?>"></p>
   <p><label for="protagonista">Nome do Protagonista:</label>
    <input type="text" id="protagonista" name="protagonista" value="<?php echo
$protagonista ?>"></p>
   <p><label for="ano">Ano de Lançamento:</label>
    <input type="number" id="ano" name="ano" min="1895" value="<?php echo $ano ?>"></p>
   <p><input type="submit" value="Alterar"></p>
  </form>
<?php
   break;
  case 'upd':
   $nome = $_GET["filme"];
   $diretor = $_GET["diretor"];
   $protagonista = $_GET["protagonista"];
   $ano = $_GET["ano"];
   $codigo = $_GET["codigo"];
   $sql = "update $TABELA set nome = '$nome', diretor = '$diretor',
protagonista = '$protagonista', ano = '$ano' where codigo = $codigo";
   $conexao = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BASE);
   mysqli_query($conexao, $sql);
   mysqli_close($conexao);
   header("Location: http://$URL/$PASTA/");
   break;
  default:
   echo " <h1>$oper é uma operação não conhecida</h1>";
   echo " <p><a href='http://$URL/$PASTA/'>Voltar</a></p>";
  }
?>
 </body>
</html>