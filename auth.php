<?php

use Illuminate\Support\Facades\Redirect;

include "bootstrap/init.php";


$home_url = site_url();
if($_SERVER['REQUEST_METHOD'] =='POST'){
$action = $_GET['action'];
$params = $_POST;
if($action=='register'){
    $result=register($params);
    if(!$result){
    massage("Error :an error in Registration");
    }else{
        
        massage("Rejisteation is Successfull ! welcome to 7Todo .<br>
        <a href='{$home_url}auth.php'>Please Login</a>
        ",'success');

}
}else if($action=='login'){
    $result=login($params['email'],$params['password']);
    if(!$result){
        massage("Error :ایمیل یا پسورد معتبر نیست");
      
        }else{
            // massage("You are now Logged In.<br>
            // <a href='{$home_url}'>Manage Your Tasks</a>
            // ",'success');

         redirect(site_url());  
        }
}

}


include "tpl/tpl-auth.php";

