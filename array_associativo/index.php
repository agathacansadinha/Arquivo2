<?php

//Como se lê? "Há um array chamado alunos com 3 posições. Em cada uma das posições há um 
//array associativo com três par-valor. As chaves do array associativo são: nome,dt_nascimento
//e cidade. Cada par-valor é separado por virgula e para definir o valor de uma chave usa-se 
// o operador de associação: ->$GLOBALS

$alunos= array (array("nome" => "Gabriela", "dt_nasc" => "03/05/2003", "cidade" => "Mococa"), // i 0
               array("nome" => "Agatha", "dt_nasc" => "05/03/2003", "cidade" => "Mococa"),   // i 1
               array("nome" => "Alison", "dt_nasc" => "22/09/2000" , "cidade" => "Mococa"),  // i 2
               array("nome" => "Ana Xavier", "dt_nasc" => "09/08/2002", "cidade" => "Marte") // i 3
);

//Como se lê? 'Acessando o indice I do array alunos. No indice 1 há outrto array, um associativo
//onde há uma chave chamada nome e deverá mostrar Agatha".

$indice =$_GET['I'];

echo $alunos[$indice]['nome'] . "<br />";
echo $alunos[$indice]['dt_nasc'] . "<br />";
echo $alunos[$indice]['cidade'] . "<br />";

//olhe com var_dump para ver como a estrutura do array se comporta:
//var_dump($alunos);

?>