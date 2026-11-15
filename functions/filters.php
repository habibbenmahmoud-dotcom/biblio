<?php
function filterLivrDispo (array $livre ) : array
{
    return array_values (array_filter ($livre, fn(array$l):bool => $l['status']=='DISPO'));
}