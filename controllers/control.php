<?php
try{
    $connectionToDataBase = new PDO("msql:host=localhost; dbname=db_oguzalp; charset=UTF8", "root" ,"");
}catch(PDOException $Error){
    echo "Bağlantı Hatası" . "<br>" . "Hata Mesajı: " . $Error -> getMessage();
    die();
};

//Connection Database Varrrs
$QueryController = $connectionToDataBase -> prepare("select * from general_controller limit 1");
$QueryController -> execute();
$ControlCount    = $QueryController -> rowCount();
$Controls        =  $QueryController -> fetch(PDO:: FETCH_ASSOC);  
if($ControlCount > 0) {
    
   $SiteID                  =  $Controls["id "]; 
   $SiteName                =  $Controls["SITE_NAME"]; 
   $SiteTitle               =  $Controls["SITE_TITLE"]; 
   $SiteDescription         =  $Controls["SITE_DESCRRIPTION"]; 
   $SiteKeywords            =  $Controls["SITE_KEYWORDS"]; 
   $SiteCopWriteText        =  $Controls["SITE_COPYWRİTE_TEXT"]; 
   $SiteLogo                =  $Controls["SITE_LOGO"]; 
   $SiteEmail               =  $Controls["SITE_EMAIL"]; 
   $SiteEmailPassword       =  $Controls["SITE_EMAIL_PASSWORD"]; 

   //Hide Error CODE to clients !!!
}else{
    echo "Site Ayar Sorgusu Hatalı";
    die();
}











?>

