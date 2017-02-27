<?php
function dateToFr($dateEn){
    $date = new DateTime($dateEn);
    return $date->format('d-m-Y');
}
