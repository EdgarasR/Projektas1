<?php 

require_once "connections.php";

function handleSoftDelete(){

    if(isset($_GET['ad_id'])){
        $adId = $_GET['ad_id'];

    }else{
        http_response_code(400);
        exit('Bad request');
        }
   
        softDeleteAppliance($adId);
        header("Location: appliances.php");
    }

handleSoftDelete();

?>