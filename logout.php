<?php
require_once 'class.castumer.php';

    $logout = session_destroy();
    $en = @$_GET['lang'];
    if($logout){ 
        if($en == "en"){
            $smarty->assign("en", $en);
            $smarty->assign("message","Goodbye.. we hope to see you again soon");
            $smarty->assign("link","index.php?lang=en");
            $smarty->display('logout.tpl');
        }else{
            $smarty->assign("message","في رعايه الله ونتمنى ان نراك مرة اخرى قريبا ");
            $smarty->assign("link","index.php");
            $smarty->display('logout.tpl'); 
        }
    }
    
?>