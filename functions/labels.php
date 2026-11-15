<?php
function getBadgetType (string $type ): array
{
    switch ($type)
    {
        case ('ROMAN'):
            return ['libelle'=>'Roman', 'classe'=>'badge_roman'];
        case ('SCIENCE'):
            return ['libelle'=>'Science', 'classe'=>'badge_science'];
        case ('HISTOIRE'):
            return ['libelle'=>'Histoire', 'classe'=>'badge_histoire'];
        default :
        {
            return ['libelle'=>'Inconnu'];
        }
    }
}
function getLibelleStatus (string $status): string
{
    switch ($status)
    {
        case ('DISPO'):
            return "Actuellement disponible ";
        case ('EMPRUNTE'):
            return "Emprunté";
        case ('PERDU'):
            return "Actuellement perdu";
        default :
        {return "Etat inconnu";}
    }
}