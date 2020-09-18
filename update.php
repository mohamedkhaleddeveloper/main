<?php
require_once 'class.castumer.php';    
$today = date("Y-m-d"); 
$now = strtotime($today);
$todayf = date("d-m-Y");
$dayen = date('l');
$day = daten::dayAr(date('D'));
$smarty->assign("dayen", $dayen);
$smarty->assign("day", $day);
$smarty->assign("today", $today);
$smarty->assign("todayf", $todayf);
$smarty->assign("now", $now);
$action = @$_GET['act'];
$action1;
switch ($action) {
case "upu":
        $idm = @$_GET['id'];
        $checkid = employee::checkById($idm);
        if(!$checkid){
            if($en == 'en'){
                $smarty->display('admin/en/index.tpl');
            }else{
                $smarty->display('admin/ar/index.tpl');
            }
        }else{ 
            $smarty->assign('idm',@$idm);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/upu.tpl');
            }else{
                $smarty->display('admin/ar/upu.tpl');
            }
        }elseif($pos == 3){
             if($en == 'en'){
                $smarty->display('admin/en/upu.tpl');
            }else{
                $smarty->display('admin/en/upu.tpl');
            }
        }else{
            $smarty->display('login.tpl');
        }
        }
break;
case "employeup":
        $idm = intval(@$_GET['idm']);
        $employee = employee::retreiveAllEmployee("WHERE `idm` = '$idm'");
        $carer = carer::retreiveAllCarer("where `deletr` = 0");
        $country = country::retreiveAllCountry("where `delety` = 0");
        $airport = air::retreiveAllAirport("where `deletair` = 0");
        $smarty->assign("carer", $carer);
        $smarty->assign("country", $country);
        $smarty->assign("airport", $airport);
        $smarty->assign('employee',$employee);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/employeup.tpl');
            }else{
                $smarty->display('admin/ar/employeup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;
case "areaup":
        $ida = intval(@$_GET['ida']);
        $area = area::retreiveAllArea("WHERE `ida` = '$ida'");
        $smarty->assign('area',$area);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/areaup.tpl');
            }else{
                $smarty->display('admin/ar/areaup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;
case "deviceup":
        $idv = intval(@$_GET['idv']);
        $device = device::retreiveAllDevice("WHERE `idv` = '$idv'");
        $smarty->assign('device',$device);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/deviceup.tpl');
            }else{
                $smarty->display('admin/ar/deviceup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;
case "markup":
        $idmark = intval(@$_GET['idmark']);
        $mark = mark::retreiveAllMark("WHERE `idmark` = '$idmark'");
        $smarty->assign('mark',$mark);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/markup.tpl');
            }else{
                $smarty->display('admin/ar/markup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;
case "serviceup":
        $idserv = intval(@$_GET['idserv']);
        $service = service::retreiveAllService("WHERE `idserv` = '$idserv'");
        $smarty->assign('service',$service);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/serviceup.tpl');
            }else{
                $smarty->display('admin/ar/serviceup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;
case "carerup":
        $idr = intval(@$_GET['idr']);
        $carer = carer::retreiveAllCarer("WHERE `idr` = '$idr'");
        $smarty->assign('carer',$carer);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/carerup.tpl');
            }else{
                $smarty->display('admin/ar/carerup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;
case "countryup":
        $idy = intval(@$_GET['idy']);
        $country = country::retreiveAllCountry("WHERE `idy` = '$idy'");
        $smarty->assign('country',$country);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/countryup.tpl');
            }else{
                $smarty->display('admin/ar/countryup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;

case "airportup":
        $idair = intval(@$_GET['idair']);
        $airport = air::retreiveAllAirport("WHERE `idair` = '$idair'");
        $smarty->assign('airport',$airport);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/airportup.tpl');
            }else{
                $smarty->display('admin/ar/airportup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;
case "paymentup":
        $idp = intval(@$_GET['idp']);
        $payment = wayOfpayment::retreiveAllPayment("WHERE `idp` = '$idp'");
        $smarty->assign('payment',$payment);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/paymentup.tpl');
            }else{
                $smarty->display('admin/ar/paymentup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;
case "resonup":
        $idn = intval(@$_GET['idn']);
        $reson = reson::retreiveAllReson("WHERE `idn` = '$idn'");;
        $smarty->assign('reson',$reson);
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                $smarty->display('admin/en/resonup.tpl');
            }else{
                $smarty->display('admin/ar/resonup.tpl');
            }
        }else{
            if($en == 'en'){
                $smarty->assign("message","You do not have permission to access this page");
                $smarty->assign("link","index.php?lang=en");
                $smarty->display('message.tpl');
            }else{
                $smarty->assign("message","عفوا ليس لديك صلاحيه للدخول إلى هذه الصفحه");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }
    }
break;  
 default:
      if($pos == 1 Or $pos == 2){
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
        }else{
            $smarty->display('login.tpl');
        }
}

?>