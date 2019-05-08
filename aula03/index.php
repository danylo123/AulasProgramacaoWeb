<?php

$preco = 20;
if($preco >= 20){
    echo utf8_decode("Não posso comprar!");
}else{
    echo utf8_decode('Posso comprar!');
}

$nota = 9.5;

echo '<br>';

if($nota >= 7 && $nota <= 10){
    echo 'Aprovado';
}elseif($nota >= 4){
    echo utf8_decode('Recuperação');
}else{
    echo 'Reprovado';
}

echo '<br>';

$contador = 0;

while($contador <= 10){
    echo $contador++;
    echo '<br>';
}


for($i = 10; $i <= 50; $i++){
    echo $i;
    echo '<br>';
}

?>