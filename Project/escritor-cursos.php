<?php
# Abrindo o arquivo.
# param�tro 'w' sobrescrever qualquer o que estiver no arquivo. Ele come�a na primeira linha
# o param�tro 'a' vai escrever no arquivo, mas o ponteira vai est� no final, assim n�o sobrescreve nada. 

# $arquivo = fopen('cursos.txt', 'a')

$curso = "\nphp I/O arquivos streams";
file_put_contents('cursos.txt', $curso, FILE_APPEND);
# fwrite vai escrever no arquivo
# fwrite($arquivo, $curso);

# fclose($arquivo);