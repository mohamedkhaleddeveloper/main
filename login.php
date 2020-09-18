<?php
require_once 'class.castumer.php';
if(isset($_SESSION['id'])){
        $iduser = $_SESSION['id'];
	$user = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$iduser' ");
            if(empty($user) Or !is_array($user)){
                 if($en == 'en'){
                $smarty->assign("en", $en);
                $smarty->display('login.tpl');
            }else{
                $smarty->display('login.tpl');
            }
        }else{
                $iduser = @$user[0]['idm'];
                $pos = @$user[0]['premssionm'];
                    if($pos == 1){
                    $smarty->display('admin/index.tpl');
                    }elseif($pos == 2){
                    $smarty->display('mod/index.tpl');
                    }elseif($pos == 3){
                    $smarty->display('tech/index.tpl');
                    }
            }
}else{
    if($en == 'en'){
        $smarty->assign("en", $en);
        $smarty->display('login.tpl');
    }else{
        $smarty->display('login.tpl');
    }
}
?>