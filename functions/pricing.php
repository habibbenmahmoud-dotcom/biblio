<?php
function calculerPenalite(int $jR, float $tarif) : float
{
    $penalite=$jR * $tarif;
    if ($jR>=10)
        $penalite = $penalite * 0.9;
    return $penalite;
}