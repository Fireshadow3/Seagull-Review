<?php
    require_once './PHP_CLASSES/DatabaseInterfaceRetrieveData.php';
    require_once './PHP_CLASSES/TVSerieClass.php';
    
    $db = new DatabaseInterface();
    
    $tvserie = $db->getTVSerieInformation($_GET['id']);
    
    header("Content-type: image/jpeg");
    echo $tvserie->getImg();
?>