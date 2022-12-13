<?php

$data=yaml_parse_file("portfolio.yaml");
$menu = $data['menu'];
//print_r($menu);
echo '<ul>';
foreach ($menu as $fichier => $onglet) {
   echo '<li><a href="' .'#'. $fichier .'">' . $onglet . '</a></li>';
}
echo '</ul>';


?>