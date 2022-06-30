<?php
# Abrindo o arquivo.
# paramêtro 'w' sobrescrever qualquer o que estiver no arquivo. Ele começa na primeira linha
# o paramêtro 'a' vai escrever no arquivo, mas o ponteira vai está no final, assim não sobrescreve nada. 

# $arquivo = fopen('cursos.txt', 'a')

$curso = "\nphp I/O arquivos streams";
file_put_contents('cursos.txt', $curso, FILE_APPEND);
# fwrite vai escrever no arquivo
# fwrite($arquivo, $curso);

# fclose($arquivo);