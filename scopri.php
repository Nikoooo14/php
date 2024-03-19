<?php
$nome=$_GET["nome"];
$eta=$_GET["eta"];
$gay="marco";
$etaz=20;
if (stripos($nome, $gay) !== false && strpos($eta, (string)$etaz) !== false) {
  echo "Sei supergay";
} else {
  echo "Sei etero, GG";
}
?>
