<?php
$nome =$_GET["n"] ;
$email= $_GET["e"];
$ocupacao=$_GET["o"];
$comentarios= $_GET["c"] ;
$interesse=$_GET["in"];
$indicacao=$_GET["ind"] ;
$json = array("Nome:"=>$nome,"E-mail:"=>$email,"Ocupacao:"=>$ocupacao,"Comentarios:"=>$comentarios,"Interesses:"=>$interesse,"Indicacao:"=>$indicacao);
$encoda = json_encode($json);
echo "$encoda";
?>