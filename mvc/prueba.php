<?php
   include("Language.php");
   /*
  $language = new Language("Alemán","2005-01-01");
  echo $language->toString();
  $language->save();
*/
$idioma = Language::findById(4);
echo $idioma->toString();
$idioma->name = 'Chino';
$idioma->save();
?>