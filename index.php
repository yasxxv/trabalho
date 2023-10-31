<?php
 # index.php
 $SERVIDOR = "localhost";
 $USUARIO = "root";
 $SENHA = "";
 $BASE = "filmes";
 $TABELA = "filme";
 $URL = "localhost";
 $PASTA = "lala";
 if (isset($_GET["ordem"])) {
   $ORDEM = $_GET["ordem"];
 } else {
  $ORDEM = "ano, nome";
 }
 $conexao = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BASE);
 if (!$conexao) {
  header("Location: http://$URL/$PASTA/criar.php");
 } else {
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Filmes</title>
  <style>
   * {font-family: Verdana, Arial, Helvetica, sans-serif;}
   a.limpo {text-decoration: none; color: #f0f0f0;}
   table {border-collapse: collapse;}
   td, th {border: 1px solid #000; padding: 8px;}
   th {background-color: #333333; color: #f0f0f0;}
  </style>
 </head>
 <body>
<?php
  $sql = "Select * FROM $TABELA ORDER BY $ORDEM";
  $dados = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($dados) > 0) {
   mysqli_close($conexao);
?>
   <table>
    <tr><th><a class="limpo" href="<?php echo "http://$URL/$PASTA/index.php?ordem=nome,ano" ?>">Filme</a></th><th><a class="limpo" href="<?php echo "http://$URL/$PASTA/index.php?ordem=protagonista,ano" ?>">Protagonista</a></th><th><a class="limpo" href="<?php echo "http://$URL/$PASTA/index.php?ordem=diretor,ano" ?>">Diretor</a></th><th><a class="limpo" href="<?php echo "http://$URL/$PASTA/index.php?ordem=ano,nome" ?>">Ano</a></th><th>Ações</th></tr>
 <?php
    while($linha = mysqli_fetch_assoc($dados)) {
    $nome = $linha["nome"];
    $protagonista = $linha["protagonista"];
    $diretor = $linha["diretor"];
    $ano = $linha["ano"];
    $codigo = $linha["codigo"];
    echo " <tr><td>$nome</td><td>$protagonista</td><td>$diretor</td><td>$ano</td><td><a
href='operacoes.php?op=exc&codigo=$codigo'>Excluir</a>&nbsp;<a href='operacoes.php?
op=alt&codigo=$codigo&nome=$nome&protagonista=$protagonista&diretor=$diretor&ano=$ano'>Alterar</a>
</td></tr>\n";
   }
?>
  </table>
<?php
  } else {
?>
  <h1>Sem dados disponíveis</h1>
<?php
  }
?>
  <p><a href="operacoes.php?op=incluir">Incluir</a></p>
 </body>
</html>
<?php 
 }
?>