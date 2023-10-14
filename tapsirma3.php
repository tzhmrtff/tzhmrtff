<?php


// Skladqa 75 dana kompyuter alıp kelındi. Olardıń keliw bahası hár biri 4 000 000 sumnan alıp kelindi. 
//Soń olardıń har birin 4 560 000 sumnan sattı. Satıwshı neshe sum sap payda kórdi.
  
$qansha = "75";
$qanshadan = "4000000";
$qanshaga = "4560000";

$qansha_ketti = $qansha * $qanshadan;
$qanshaga_ketti = $qansha * $qanshaga;
$payda = $qanshaga_ketti - $qansha_ketti;


echo "Payda: " .$payda , " Uliwma qansha aqsha keldi: " .$qanshaga_ketti , " Ozinen qansha aqsha shiqti: " .$qansha_ketti




?>