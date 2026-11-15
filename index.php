<?php
require_once 'settings.php';
require_once 'filters.php';
require_once 'labels.php';
require_once 'pricing.php';
$livre =[['id'=>1, 'titre'=>'Le petit Prince', 'auteur'=>'Saint-Exupéry', 'jour_retard'=> 3, 'type'=>'ROMAN', 
'status'=>'DISPO'],['id'=>2, 'titre'=>'L.univers', 'auteur'=>'Hawking','jour_retard'=>12,'type'=>'SCIENCE',
'status'=>'EMPRUNTE'],['id'=>3,'titre'=>'histoire de Tunisie','auteur'=>'Abou kacem','jour_retard'=>5, 'type=>'HISTOIRE'
'status'=>'PERDU']];
$disponibles= getLibelleStatus (string $livre);
?>
<div class="grille">
     <?php foreach ($livre as $l) :?>
        <?php
        $budget = getBadgetType (string $l['type'] );
        $type = getLibelleStatus (string $l['status']);
        ?>
        