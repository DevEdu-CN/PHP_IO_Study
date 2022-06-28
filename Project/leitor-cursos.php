<?php

//fopen($filename, $mode) щ uma funчуo para ler um arquivo
// Ele recebe como paramъtro $filename(o nome do arquivo), $mode(O que vamos fazer com o arquivo)

$arquivo = fopen('lista-cursos.txt', 'r');


while(!feof($arquivo)) {
    $curso = fgets($arquivo);
    
    echo utf8_encode(nl2br($curso));
    
}
fclose($arquivo);