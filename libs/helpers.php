<?php defined('BASE_PATH') OR die("Permision Denied!");

function getCurrentUrl(){

    return 1;
}

function isAjaxRequest(){

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
   
        return true;
    }

    return false;
}
function site_url($uri=''){
    return BASE_URL . $uri;
}

function redirect($url){
header("Location: $url");
die();

}
function diepage($msg){

echo "<div style='padding: 50px; width: 80%; margin: 50px; background: #dba2b5; border-radius: 5px; color: #2c0e03; font-family font-family: sans-serif;'>$msg</div>";

die();    
}

function massage($msg,$cssClass='info'){

    echo "<div class='$cssClass' style='padding: 20px; width: 80%; margin: 10px; background: #dba2b5; border-radius: 5px; color: #2c0e03; font-family font-family: sans-serif;'>$msg</div>";
     
    }
    

function dd($var){
 echo "<pre style='color: #df5c0fe0; background: #f7f7f7; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #e5651a;'>";
    var_dump($var);
 echo "</pre>";
}