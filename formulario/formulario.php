<?php
/*
 $db = new SQLite3('dados.php');

$db->exec("CREATE TABLE dados (id INTEGER PRIMARY KEY, nome text,email TEXT, ocupacao TEXT,comentarios TEXT,interesse TEXT,indicacao TEXT)");
$db->exec("INSERT INTO dados(nome,email,ocupacao,comentarios,interesse,indicacao) VALUES ($nome,$email,$ocupacao,$comentarios,$interesse,$indicacao)");
*/




echo "<h1>Dados Enviados</h1>";
echo "<p>Nome: " .strip_tags($_POST["nome"] ). "</p>";
echo "<p>Email: " .strip_tags( $_POST["email"] ). "</p>";
echo "<p>Você é: " .strip_tags( $_POST["ocupacao"]) . "</p>";

echo "<p>Seus comentários: " .strip_tags( $_POST["comentarios"] ). "</p>";
echo "<p>Seu interesse é: <br>";
foreach ($_POST["interesses"] as $interesse) {
    echo "- " . $interesse . "<BR>";
}
echo "<p>Indicaria a alguém? " .strip_tags( $_POST["indicacao"] ). "</p>"; 

$nome =$_POST["nome"] ;
$email= $_POST["email"];
$ocupacao=$_POST["ocupacao"];
$comentarios= $_POST["comentarios"] ;
$interesse=$_POST["interesses"];
$indicacao=$_POST["indicacao"] ;


?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
<form action="Json.php?n=<?=$nome;?>&e=<?=$email;?>&o=<?=$ocupacao;?>&c=<?=$comentarios;?>&in=<?=$interesse;?>&ind=<?=$indicacao;?>" method="post">
<input type="submit" value="Exportar JSON" />
</form>
</body>
</html>
