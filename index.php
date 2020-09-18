<?php
require_once 'class.castumer.php';
if(isset($_SESSION['id'])){
    $iduser = $_SESSION['id'];
    $user = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$iduser' ");
    if(empty($user) Or !is_array($user)){
        if($en == "en"){
            $smarty->assign("en", $en);
            $smarty->display('login.tpl');
        }else{
            $smarty->display('login.tpl'); 
        }
        
    }else{
        $usernamema = $user[0]['namema'];
        $usernameme = $user[0]['nameme'];
        $pos = $user[0]['premssionm'];
        
        if($pos == 1){
            if($en == 'en'){
                $smarty->display('admin/en/index.tpl');
            }else{
                $smarty->display('admin/ar/index.tpl');
            }
        }elseif($pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/index.tpl');
            }else{
                $smarty->display('admin/ar/index.tpl');
            }
        }elseif($pos == 3){
            if($en == 'en'){
                $smarty->display('tech/en/index.tpl');
            }else{
                $smarty->display('tech/ar/index.tpl');
            }
        }
    }
    //
}else{
        if($en == "en"){
            $smarty->assign("en", $en);
            $smarty->display('login.tpl');
        }else{
            $smarty->display('login.tpl'); 
        }
}


?>