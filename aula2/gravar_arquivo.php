<?php 
 $texto = $_POST["texto"];
 $nome = $_POST["nome"].".txt";

if(file_exists($nome) == false){
  $arquivo = fopen($nome, "w" );
  fwrite($arquivo,$texto);
  echo "Arquivo gerado com sucesso";
  fclose($arquivo);
}
else{
  echo "erro arquivo ja existe , não foi possivel gravar";
}
?>