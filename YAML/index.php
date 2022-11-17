<?php

$data=yaml_parse_file("accueil.yaml");
/*
 echo "<pre>";
 print_r($data);
 echo "</pre>"
*/

echo '<p>'.$data['prenom'].' '.$data['nom'].'</p>';
echo '<p>'.$data['accroche'].'</p>';
echo '<img src="'.$data['image'].'" />';
?>