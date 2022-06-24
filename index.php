<?php

use Illuminate\Support\Facades\Redirect;

include "bootstrap/init.php";
// use Hekmatinasser\Verta\Verta;
// var_dump(Verta::now());

if(isset($_GET['logout'])){
logout();
}

if(!isLoggedIn()){

    Redirect(site_url('auth.php'));
}
$user = getLoggedInUser();
if(isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])){

$deletedCount=deleteFolder($_GET['delete_folder']);
// echo"$deletedCount= folders sussesfully deleted!";
}


if(isset($_GET['delete_task']) && is_numeric($_GET['delete_task'])){

    $deletedCount=deleteTask($_GET['delete_task']);

    //  echo"$deletedCount= tasks sussesfully deleted!";
    }

    
$folders = getFolders();



$tasks = getTasks();

include "tpl/tpl-index.php";
