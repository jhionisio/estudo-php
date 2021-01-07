# estudo-php
Arquivo Readme.md sobre fundamentos de php 
/* Aqui irei começar a explicar sobre estruturas de controle, como, if, switch, for, while e foreach. Em seguida darei exemplos sobre os usos de cada estrutura /*
Essas estruturas são divididas de duas formas, as condicionais e as de repetição. As condicionais tendem a continuarem sendo executadas enquanto a condição necessária for cumprida, já a de repetição, consiste em repetir a execução de um bloco de códigos até a condição necessária ja estabelecida não for cumprida mais.
IF- ELSE
O operador IF é utilizado para avaliar o valor de uma condição booleana, enquanto o else é o quê fazer após a conferência dos dados, ou seja, que pode assumir apenas dois valores distintos: VERDADEIRO (true) ou FALSO (false). A estrutura funciona da seguinte forma: IF (condição) ELSE (faça algo). Ou seja ele primeiro checa se os pré requisitos estão sendo cumpridos e então executa os comandos dependendo das razões booleanas.
Exmplo: 
<php?
// Resultado diferente
$a = '10';
$b = 10;

if($a == $b)
    echo "idêntico";
else
    echo "diferente";

// Resultado igual
$c = 8;
if($c == 8)
    echo "igual";
else
{
    echo "diferente";
}

?>
/*Não podemos esquecer do comando else if que dá mais uma camada de condição ao seu código.
Exemplo:
<php?
$a = '10';
$b = 10;

if($a == $b)
    echo "idêntico";
else if($a < $b)
    echo " a é a maior ";
else if($b < $a)
    echo " b é a maior ";
else
{
    echo "errado";
}
?>

/* SWITCH 
O comando switch é um bloco de códigos que funciona para fazer a checagem de mais de uma condição por vez, pode-se fazer a mesma função com a repetição do if. Porém utilizar o switch entrega o melhor resultado.
Exemplo:
<?php
$a = $b;
$b = 30;
switch($a)
{
    case 10 :
        echo "é 10";
    break;
    case 20 :
        echo "é 20";
    break;
    case 30 :
        echo "é 3 0";
    break;
    default: "echo nenhum";
}
?>

/* While, (while significa enquanto).
O while é uma estrutura de comando que enquanto a afirmação necessesária for verdadeira vai continuar rodando o bloco de códigos. Até que a afirmação não seja mais verdadeira.

<php?
var $z = 0;

while($z < 26)
{
echo $z;
    $z++;
}
?>

/* FOR é utilizada para se executar um conjunto de comandos por um número definido de vezes. Para esse operador, são passados uma situação inicial, uma condição e uma ação a ser executada a cada repetição.
<php?
for($contador = 0; $contador < 10; $contador++)
{
    echo " O Valor do contador = ".$contador;
}

?>
