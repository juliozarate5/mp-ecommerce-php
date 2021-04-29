<?php
if($_GET){
    echo 'ID Pago: ';
    if(isset($_GET['collection_id']))echo $_GET['collection_id'];
    echo '<br>';
    echo 'Estado: ';
    if(isset($_GET['collection_status']))echo $_GET['collection_status'];
    echo '<br>';
    echo 'Site Id: ';
    if(isset($_GET['site_id']))echo $_GET['site_id'];
    echo '<br>';
    echo 'External Reference';
    if(isset($_GET['external_reference']))echo $_GET['external_reference'];
    echo 'Prefence Id: ';
    if(isset($_GET['preference_id']))echo $_GET['preference_id'];
    echo 'Payment Type: ';
    if(isset($_GET['payment_type']))echo $_GET['payment_type'];
    
}else{
    echo 'Sin info';
}
