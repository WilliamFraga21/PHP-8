<?php

# IMPORTAR SCRIPTS COM INCLUDE
/*A grande maioria dos projetos de programação vão sempre necessitar de ter o seu código "partido" entre diferentes ficheiros.
 Salvo raras excepções, um projeto tera dezenas ou centenas de ficheiros para que a aplicação funcione
É aqui que entram os mecanismos de importação de scritos dentro de outros scripts.
A importação pode ser feita recorrendo ao uso da instrução include
NOTA: o include, à semelhança do echo, são construções especiais do PHP e não requerem a utilização de parentesis */


include 'config.php';

# Esta instrução vai inserir o código de programação do script config.php dentro # do script atual.

# CAMINHO PARA O INCLUDE
// Podemos "incluir" um script dentro de outro usando: 1. penhum caminho e apenas o nome do script a ser incluído; 
// 2. um caminho relativo ao script atual; 
// 3. um caminho absoluto - que indica a localização exata do script no filesystem.
# 1. apenas quando o script a incluir está na mesma pasta do script atual.
# 2. caminho relativo à pasta do script atual

include 'EX02/config.php';

# 1. apenas quando o script a incluir está na mesma pasta do script atual.
# 2. caminho relativo à pasta do script atual include 'inc/dados.php'; echo '<br>'; echo $nome;
// quando é necessário "andar para trás" na árvore de pastas usamos ../ include '../outro_script.php'; echo '<br>'; echo $valor;
# 3. caminho absoluto
 include 'C:\laragon\www\include_require\1\inc\dados2.php';
