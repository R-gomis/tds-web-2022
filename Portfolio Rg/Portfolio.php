<?php
 $data=yaml_parse_file("portfolio.yaml");
 $menu=$data['menu'];
// print_r($menu);
echo '<ul>';
foreach($menu AS $fichier=>$onglet){
   echo '<li><a href="'.$fichier.'.php">'.$onglet.'</a></li>';
}
echo '</ul>';

 $Apropos=$data['Apropos'];
 // print_r($apropos);
 echo '<ul>';
 foreach($Apropos AS $fichier=>$onglet){
   echo '<li><a href="'.$fichier.'.php">'.$onglet.'</a></li>';
}
echo '</ul>';

 

 //$formation=
   