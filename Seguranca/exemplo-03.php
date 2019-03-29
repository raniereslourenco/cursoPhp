<?php 

$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretorio criado";
/*permisoes de pasta 
 0 - sem permissao
 1 - permissao de execucao
 2 - permissao de gravacao
 3 - junção de 1 e 2
 4 - somente leitura
 5 - leitura e execução
 6 - leitura e gravação
 7 - leitura execução e gravacao - permissao total
*/
 ?>