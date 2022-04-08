<?php
$IPAdress       =   $_SERVER["REMOTE_ADDR"];
$TimeStamp      =   time();
$dateAndHour    =   date("d.m.Y H:i:s" , $TimeStamp);

function securityFunction($value) {
    $DeleteSpace                     = trim($value);
    $DeleteTags                      =   strip_tags($DeleteSpace);
    $ControlSpecialCharacters       =   htmlspecialchars($DeleteTags)  ; 
    $Result                          =   $ControlSpecialCharacters;
    return $Result;
}
?>





