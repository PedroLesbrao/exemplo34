<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <?php
       echo "ESTRUTURA DE REPETIÇÃO WHILE NO PHP<br><br>";
       //estrutura de repetição com teste lógico no início
       $x = 0;
       while($x <= 15){//A condição pode ser de qualquer tipo 
                       //desde que retorne lógico (true ou false)
           echo "Variável X = $x<br>";
           $x++;
       }
       $sPalavra = "Continua";
       $i=0;
       while($sPalavra == "Continua"){
           if($i==5){
               $sPalavra ="Termina";
               echo "Terminou!!!";
           }
           $i++;
       }
    ?>
    </div>
</body>
</html>