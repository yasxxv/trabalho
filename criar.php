<?php
 # criar.php
 $SERVIDOR = "localhost";
 $USUARIO = "root";
 $SENHA = "";
 $BASE = "filmes";
 $TABELA = "filme";
 $URL = "localhost";
 $PASTA = "lala";
 $conexao = mysqli_connect($SERVIDOR,$USUARIO, $SENHA);
 if (!$conexao) {
  die("Não foi possível conectar ao servidor de banco de dados");
 } else {
  $sql = "Create Database $BASE";
  if (mysqli_query($conexao, $sql)) {
   mysqli_close($conexao);
   $conexao = mysqli_connect($SERVIDOR,$USUARIO, $SENHA, $BASE);
   if (!$conexao) {
    die("Não foi possível conectar na base de dados");
   } else {
    $sql = "Create Table $TABELA (codigo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY
KEY, nome VARCHAR(70) not null, diretor VARCHAR(30) not null, protagonista
VARCHAR(20) null, ano SMALLINT not null)";
    if (mysqli_query($conexao, $sql)) {
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values ('2001:
Uma Odisseia no Espaço', 'Stanley Kubrick', 'Keir Dullea', 1968)";
    if (mysqli_query($conexao, $sql)) {
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Guerra nas Estrelas: Uma Nova Esperança', 'George Lucas', 'Mark Hamill', 1977)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values ('O Iluminado', 'Stanley Kubrick', 'Jack Nicholson', 1980)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values ('A
Chegada', 'Denis Villeneuve', 'Amy Adams', 2016)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values ('Fome
de Viver', 'Tony Scott', 'Catherine Deneuve', 1983)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values ('Jogos
Vorazes', 'Gary Ross', 'Jennifer Lawrence', 2012)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Batman: O Cavaleiro das Trevas', 'Christopher Nolan', 'Christian Bale', 2008)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Garota Exemplar', 'David Fincher', 'Rosamund Pike', 2014)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Ran', 'Akira Kurosawa', 'Tatsuya Nakadai', 1986)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Avatar', 'James Cameron', 'Sam Worthington', 2009)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Drácula de Bram Stoker', 'Francis Ford Coppola', 'Gary Oldman', 1992)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Os Fantasmas se Divertem', 'Tim Burton', 'Winona Ryder', 1988)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Janela Indiscreta', 'Alfred Hitchcock', 'Grace Kelly', 1954)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Pulp Fiction', 'Quentin Tarantino', 'John Travolta', 1994)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Contatos Imediatos do Terceiro Grau', 'Steven Spielberg', 'Richard Dreyfuss', 1977)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('O Diabo Veste Prada', 'David Frankel', 'Meryl Streep', 2006)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Amor e Outras Drogas', 'Edward Zwick', 'Anne Hathaway', 2010)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Spencer', 'Pablo Larraín', 'Kristen Stewart', 2021)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Bird Box', 'Susanne Bier', 'Sandra Bullock', 2018)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Sob a Pele', 'Jonathan Glazer', 'Scarlett Johansson', 2013)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Cisne Negro', 'Darren Aronofsky', 'Natalie Portman', 2010)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values
('Alien, o Oitavo Passageiro', 'Ridley Scott', 'Sigourney Weaver', 1979)";
     mysqli_query($conexao, $sql);
     $sql = "insert into $TABELA (nome, diretor, protagonista, ano) Values ('Taxi
Driver', 'Martin Scorsese', 'Jodie Foster', 1976)";
     mysqli_query($conexao, $sql);
     mysqli_close($conexao);
     header("Location: http://$URL/$PASTA/");
    } else {
     die("Falha na inserção de dados");
    }
   } else {
    die("Não foi possível criar a tabela de filmes");
   }
  }
 } else {
  die("Não foi possível criar a base de dados");
 }
}
?>