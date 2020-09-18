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
case "test":
    echo $dateee;
	$smarty->display('test.tpl');
break;
case "ordernow":
        if($pos == 1 Or $pos == 2){
        $orderNowCount = ordero::countOfOrder("where `orderdate` = '$today' AND `process` = 0 AND `resono` = 0");
        $orderNowCountA = ordero::countOfOrder("where `orderdate` = '$today' AND (`process` = 1 OR `process` = 0) AND `resono` = 0  AND `timing` = 'am'");
        $orderNowCountAc = ordero::countOfOrder("where `orderdate` = '$today' AND `process` = 1   AND `timing` = 'am' AND `resono` = 0");
        $orderNowCountP = ordero::countOfOrder("where `orderdate` = '$today' AND (`process` = 1 OR `process` = 0)  AND `timing` = 'pm' AND `resono` = 0");
        $orderNowCountPc = ordero::countOfOrder("where `orderdate` = '$today' AND `process` = 1   AND `timing` = 'pm' AND `resono` = 0");
	$factor = employee::retreiveAllEmployee("");
	$orderNowAm = ordero::retreiveAllOrderGroup("AND `orderdate` = '$today' AND `process` = 0 AND `timing` = 'am' AND `resono` = 0");
        $orderNowPm = ordero::retreiveAllOrderGroup("AND `orderdate` = '$today' AND `process` = 0 AND `timing` = 'pm' AND `resono` = 0");
	$smarty->assign("action", $action);
	$smarty->assign("orderNowCount", $orderNowCount);
        $smarty->assign("orderNowCountA", $orderNowCountA);
        $smarty->assign("orderNowCountAc", $orderNowCountAc);
        $smarty->assign("orderNowCountP", $orderNowCountP);
        $smarty->assign("orderNowCountPc", $orderNowCountPc);
	$smarty->assign("orderNowAm", $orderNowAm);
	$smarty->assign("orderNowPm", $orderNowPm);
        if($en == 'en'){
            $smarty->display('admin/en/orders.tpl');
        }else{
            $smarty->display('admin/ar/orders.tpl');
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
case "orderdate":
        if($pos == 1 Or $pos == 2){    
        $orderdate = @$_POST['orderdate'];
        if($orderdate == null){
            $orderdate1 = @$_GET['date'];
            $orderdate = $orderdate1;
        }
        if($orderdate == null){
            $orderdate = $today;
        }
        if(isset($_POST['prepar'])){
            $ido = @$_POST['idorder'];
            $orderdate = @$_POST['orderdate'];
            ordero::updatePrepareOrderById(8, $ido);
        }
        $timestamp = strtotime($orderdate);
        $dayen1 = date("l", $timestamp);
        $dayen2 = date("D", $timestamp);
        $dayar1  = daten::dayAr($dayen2);
        $factor = employee::retreiveAllEmployee("");
        $area = area::retreiveAllArea("");
        $orderNowCount = ordero::countOfOrder("where (`orderdate` = '$orderdate' Or `odatedp` = '$orderdate') AND `resono` = 0 AND `process` = 0");
        $orderNowCountA = ordero::countOfOrder("where (`orderdate` = '$orderdate' Or `odatedp` = '$orderdate') AND `process` = 0 AND `resono` = 0  AND (`timing` = 'am' Or `timingdp` = 'am')");
        $orderNowCountAc = ordero::countOfOrder("where (`orderdate` = '$orderdate' Or `odatedp` = '$orderdate') AND `process` = 0  AND (`timing` = 'am'  Or `timingdp` = 'am') AND `resono` = 0");
        $orderNowCountP = ordero::countOfOrder("where (`orderdate` = '$orderdate' Or `odatedp` = '$orderdate')  AND `process` = 0 AND (`timing` = 'pm'  Or `timingdp` = 'pm') AND `resono` = 0");
        $orderNowCountPc = ordero::countOfOrder("where (`orderdate` = '$orderdate' Or `odatedp` = '$orderdate') AND `process` = 0  AND (`timing` = 'pm' Or `timingdp` = 'pm')  AND `resono` = 0");
	$factor = employee::retreiveAllEmployee("");
	$orderNowAm = ordero::retreiveAllOrderGroup("AND `orderdate` = '$orderdate'  AND  `timing` = 'am' AND `resono` = 0 AND `process` = 0");
        $orderNowdDlAm = ordero::retreiveAllOrderGroup("AND `odatedp` = '$orderdate' AND   `timingdp` = 'am' AND `resono` = 0 AND `process` < 8");
        $orderNowPm = ordero::retreiveAllOrderGroup("AND `orderdate` = '$orderdate'  AND  `timing` = 'pm'  AND `resono` = 0 AND `process` = 0");
        $orderNowdDlPm = ordero::retreiveAllOrderGroup("AND `odatedp` = '$orderdate' AND   `timingdp` = 'pm' AND `resono` = 0 AND `process` < 8");
	$smarty->assign("action", $action);
        $smarty->assign("factor", $factor);
        $smarty->assign("area", $area);
        $smarty->assign("orderdate22", $orderdate);
	$smarty->assign("orderNowCount", $orderNowCount);
        $smarty->assign("orderNowCountA", $orderNowCountA);
        $smarty->assign("orderNowCountAc", $orderNowCountAc);
        $smarty->assign("orderNowCountP", $orderNowCountP);
        $smarty->assign("orderNowCountPc", $orderNowCountPc);
	$smarty->assign("orderNowAm", $orderNowAm);
        $smarty->assign("orderNowdDlAm", $orderNowdDlAm);
	$smarty->assign("orderNowPm", $orderNowPm);
        $smarty->assign("orderNowdDlPm", $orderNowdDlPm);
        $smarty->assign("orderDate", $orderdate);
        $smarty->assign("dayen1", $dayen1);
        $smarty->assign("dayar1", $dayar1);
        
        if($en == 'en'){
            $smarty->display('admin/en/orders.tpl');
        }else{
            $smarty->display('admin/ar/orders.tpl');
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
case "activeorder":
    if($pos == 1 Or $pos == 2){
	$ido = $_GET['id'];
	$castomerId = $_GET['castumer'];
        $datenow = $_GET['date'];
	$castumer = castumer::retreiveAllCastumer("WHERE `idc`='$castomerId'");
	$tech = employee::retreiveAllEmployee("WHERE `carerm` = 2");
	$order = ordero::retreiveAllOrder("WHERE `ido` = '$ido' AND `resono` = 0");
	$areaid = $order[0]['areaid'];
        $deviceid = $order[0]['deviceid'];
	$area = area::retreiveAllArea("WHERE `ida` = '$areaid'");
        $device = device::retreiveAllDevice("WHERE `idv` = '$deviceid'");
	$areaCastumer = $area[0]['nameaa'];
        $areaCastumere = $area[0]['nameae'];
        $deviceCastumer = $device[0]['nameva'];
        $deviceCastumere = $device[0]['nameve'];
	$smarty->assign("areaCastumer", $areaCastumer);
        $smarty->assign("datenow", $datenow);
        $smarty->assign("areaCastumere", $areaCastumere);
        $smarty->assign("deviceCastumer", $deviceCastumer);
        $smarty->assign("deviceCastumere", $deviceCastumere);
	$smarty->assign("castumer", $castumer);
        $smarty->assign("ido", $ido);
	$smarty->assign("order", $order);
	$smarty->assign("tech", $tech);
          if($en == 'en'){
            $smarty->display('admin/en/activeorder.tpl');
        }else{
            $smarty->display('admin/ar/activeorder.tpl');
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
case "orderactive":
    if($pos == 1 Or $pos == 2){
        $orderactive = @$_POST['orderactive'];
        if($orderactive == null){
            $orderactive1 = @$_GET['date'];
            $orderactive = $orderactive1;
        }
        if($orderactive == null){
            $orderactive = $today;
        }
         $timestamp = strtotime($orderactive);
        $dayen1 = date("l", $timestamp);
        $dayen2 = date("D", $timestamp);
        $dayar1  = daten::dayAr($dayen2);
        $orderNowCount = ordero::countOfOrder("where `orderdate` = '$orderactive' AND `process` > 0 AND `resono` = 0");
        $orderNowCountA = ordero::countOfOrder("where `orderdate` = '$orderactive' AND `process` > 0   AND (`timing` = 'am' OR `timing` = 'pm') AND `resono` = 0");
        $orderNowCountAc = ordero::countOfOrder("where `orderdate` = '$orderactive' AND `process` > 2  AND (`timing` = 'am' OR `timing` = 'pm') AND `resono` = 0");
	$orderNow = ordero::retreiveAllOrderGroup("AND `ordero`.`orderdate` = '$orderactive' AND `ordero`.`process` > 0  AND `resono` = 0 AND (`ordero`.`timing` = 'am' OR `ordero`.`timing` = 'pm')");
	$smarty->assign("action", $action);
	$smarty->assign("orderNowCount", $orderNowCount);
        $smarty->assign("orderNowCountA", $orderNowCountA);
        $smarty->assign("orderNowCountAc", $orderNowCountAc);
	$smarty->assign("orderNow", $orderNow);
        $smarty->assign("orderactive", $orderactive);
        $smarty->assign("dayen1", $dayen1);
        $smarty->assign("dayar1", $dayar1);
       // table of tech active 
        $emlpoyee = employee::retreiveAllEmployee("WHERE `carerm` = 2");
        $resultEmployeeActive = resultEmployeeActive($emlpoyee, $orderactive);
        $smarty->assign("resultEmployeeActive", $resultEmployeeActive);
         if($en == 'en'){
            $smarty->display('admin/en/orders.tpl');
        }else{
            $smarty->display('admin/ar/orders.tpl');
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
case "techactiveshow":
     if($pos == 1 Or $pos == 2){
       if(isset($_POST['prepar'])){
            $idu = test_input(@$_POST['idu']);
            $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
            $iduserm = $idu1[0]['idm'];
            $id = @$_POST['idorder'];
            ordero::updatePrepareOrderById(3, $id);
            $taded = new daten($iduserm, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $id, 0, 0, 0, 0);
            $taded->additionDate();
            
        }
         $orderactive = @$_POST['orderactive'];
        if($orderactive == null){
            $orderactive1 = @$_GET['date'];
            $orderactive = $orderactive1;
        }
        if($orderactive == null){
            $orderactive = $today;
        }
        $idm = intval(@$_GET['id']);
        $timestamp = strtotime($orderactive);
        $dayen1 = date("l", $timestamp);
        $dayen2 = date("D", $timestamp);
        $dayar1  = daten::dayAr($dayen2);
        $orderNowCount = ordero::countOfOrder("where (`orderdate` = '$orderactive' OR `odatedp` = '$orderactive')  AND `resono` = 0 AND `process` > 0 AND `process` < 9 AND `employeeid` = '$idm'");
        $orderNowCountA = ordero::countOfOrder("where (`orderdate` = '$orderactive' OR `odatedp` = '$orderactive')  AND `resono` = 0 AND `process` > 0 AND `process` < 9 AND `employeeid` = '$idm'");
        $orderNowCountAc = ordero::countOfOrder("where `orderdate` = '$orderactive'  AND `resono` = 0 AND `process` > 2  AND `process` < 9 AND `timing` = 'am'");
        $getname = ordero::retreiveAllOrderByEmployeeActive("AND `resono` = 0 AND `employeeid` = '$idm' ");
        $ordershowAm = ordero::retreiveAllOrderByEmployeeActive("AND `orderdate` = '$orderactive'  AND `resono` = 0 AND  `timing` = 'am' AND `process` > 0  AND `process` < 9 AND  `employeeid` = '$idm'");
        $ordershowPm = ordero::retreiveAllOrderByEmployeeActive("AND `orderdate` = '$orderactive'  AND `resono` = 0 AND  `timing` = 'pm' AND `process` > 0  AND `process` < 9 AND  `employeeid` = '$idm'");
        $ordershowAmDl = ordero::retreiveAllOrderByEmployeeActive("AND `odatedp` = '$orderactive'  AND `resono` = 0 AND `timingdp` = 'am' AND `process` > 4 AND `process` < 9 AND `employeeiddp` = '$idm'");
        $ordershowPmDl = ordero::retreiveAllOrderByEmployeeActive("AND `odatedp` = '$orderactive'  AND `resono` = 0 AND `timingdp` = 'pm' AND `process` > 4 AND `process` < 9 AND `employeeiddp` = '$idm'");
        $actm = $_GET['actm'];
        $employeename = $getname [0]['namema'];
        $employeenamee = $getname [0]['nameme'];
        $service = service::retreiveAllService("");
        $area = area::retreiveAllArea("");
        $orderNowCountP = ordero::countOfOrder("where `orderdate` = '$orderactive'  AND `resono` = 0 AND `process` > 0 AND `process` < 9 AND `timing` = 'pm' AND `employeeid` = '$idm'");
        $orderNowCountPc = ordero::countOfOrder("where `orderdate` = '$orderactive'  AND `resono` = 0 AND `process` > 0  AND `process` < 9 AND `timing` = 'pm' AND `employeeid` = '$idm'");
	$smarty->assign("action", $action);
        $smarty->assign("actm", $actm);
        $smarty->assign("idm", $idm);
        $smarty->assign("employeename", $employeename);
        $smarty->assign("employeenamee", $employeenamee);
	    $smarty->assign("orderNowCount", $orderNowCount);
        $smarty->assign("orderNowCountA", $orderNowCountA);
        $smarty->assign("orderNowCountAc", $orderNowCountAc);
        $smarty->assign("service", $service);
        $smarty->assign("area", $area);
        $smarty->assign("ordershowAm", $ordershowAm);
        $smarty->assign("ordershowPm", $ordershowPm);
        $smarty->assign("ordershowAmDl", $ordershowAmDl);
        $smarty->assign("ordershowPmDl", $ordershowPmDl);       
        $smarty->assign("orderNowCountP", $orderNowCountP);
        $smarty->assign("orderNowCountPc", $orderNowCountPc);
        $smarty->assign("orderactive", $orderactive);
        $smarty->assign("dayen1", $dayen1);
        $smarty->assign("dayar1", $dayar1);
        
        if($en == 'en'){
            $smarty->display('admin/en/orders.tpl');
        }else{
            $smarty->display('admin/ar/orders.tpl');
        }
	
    }elseif($pos == 3){
        $idm = $iduser;
        $see = @$_POST['see'];
         if(isset($see)){
            $idu = test_input(@$_POST['idu']);
            $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
            $iduserm = $idu1[0]['idm'];
            $id = @$_POST['idorder'];
            ordero::updatePrepareOrderById(2, $id);
            $taded = new daten($iduserm, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $id, 0, 0, 0, 0);
            $taded->additionDate();
        }
         if(isset($_POST['prepar'])){
            $idu = test_input(@$_POST['idu']);
            $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
            $iduserm = $idu1[0]['idm'];
            $id = @$_POST['idorder'];
            ordero::updatePrepareOrderById(3, $id);
            $taded = new daten($iduserm, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $id, 0, 0, 0, 0);
            $taded->additionDate();
            
        }
        if($hour <= 12 && $hour >= 9){ $timing = 'am'; }elseif($hour <= 20 && $hour >= 15){ $timing = 'pm'; }else{ $timing = 'pmam';}
        $orderNowCount = ordero::countOfOrder("where `orderdate` = '$today'  AND `resono` = 0 AND (`process` = 4 OR `process` = 3 OR `process` = 2 OR `process` = 1) AND `timing` = '$timing' AND `employeeid` = '$idm'");
        $orderNowCountAc = ordero::countOfOrder("where `orderdate` = '$today'  AND `resono` = 0 AND `process` = 3   AND `timing` = '$timing'");
        $getname = ordero::retreiveAllOrderByEmployee("AND `resono` = 0 AND `employeeid` = '$idm' ");
        $ordershow = ordero::retreiveAllOrderByEmployee("AND `orderdate` = '$today'  AND `resono` = 0  AND  `timing` = '$timing' AND `process` >0 AND  `employeeid` = '$idm'");
        $employeename = $getname [0]['namema'];
        $employeenamee = $getname [0]['nameme'];
        $ordertiming = $ordershow[0]['timing'];
	$smarty->assign("action", $action);
        $smarty->assign("idm", $idm);
        $smarty->assign("employeename", $employeename);
        $smarty->assign("employeenamee", $employeenamee);
        $smarty->assign("orderNowCount", $orderNowCount);
        $smarty->assign("orderNowCountAc", $orderNowCountAc);
        $smarty->assign("ordertiming", $ordertiming);
        $smarty->assign("ordershow", $ordershow);
        if($en == 'en'){
            $smarty->display('tech/en/orders.tpl');
        }else{
            $smarty->display('tech/ar/orders.tpl');
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
case "orderuning":
    if($pos == 1 Or $pos == 2){
        $orderNowCount = ordero::countOfOrder("where `process` > 2  AND `process` < 9 AND `resono` = 0");
	$smarty->assign("action", $action);
	$smarty->assign("orderNowCount", $orderNowCount);
            // table of tech active 
            $emlpoyee = employee::retreiveAllEmployee("WHERE `carerm` = 2");
            $resultEmployeeRun = resultEmployeeRun($emlpoyee);
            $smarty->assign("resultEmployeeRun", $resultEmployeeRun);
            if($en == "en"){
                $smarty->display('admin/en/orders.tpl');
            }else{
                $smarty->display('admin/ar/orders.tpl');
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
case "orderuningashow":
        if($pos == 1 Or $pos == 2){
            $idm = intval(@$_GET['id']);
            $orderNowCount = ordero::countOfOrder("where `process` >= 3  AND `process` <  9  AND `resono` = 0 AND `employeeid` = '$idm'");
            $ordershowRun = ordero::retreiveAllOrderByEmployee(" AND `ordero`.`resono` = 0 AND `ordero`.`process` >= 3  AND `ordero`.`process` < 9 AND `ordero`.`resono` = 0 AND `ordero`.`employeeid` = '$idm'  ORDER BY `orderdate` DESC");
            $arealoop = area::retreiveAllArea("");
            $employeename = $ordershowRun[0]['namema'];
            $employeenamee = $ordershowRun[0]['nameme'];
            $serviceOrder = serviceOrder::retreiveAllServiceOrder("ORDER BY `serviceorder`.`serviceido` ASC");
            $service = service::retreiveAllService(" ");
            $mark = mark::retreiveAllMark("");
            $smarty->assign("action", $action);
            $smarty->assign("mark", $mark);
            $smarty->assign("orderNowCount", $orderNowCount);
            $smarty->assign("arealoop", $arealoop);
            $smarty->assign("employeename", $employeename);
            $smarty->assign("employeenamee", $employeenamee);
            $smarty->assign("ordershowRun", $ordershowRun);
            $smarty->assign("serviceOrder", $serviceOrder);
            $smarty->assign("service", $service);
            if($en == "en"){
                $smarty->display('admin/en/orders.tpl');
            }else{
                $smarty->display('admin/ar/orders.tpl');
            }
        }elseif($pos == 3){
            $idm = $iduser;
            $orderNowCount = ordero::countOfOrder("where `process` >= 3  AND `process` < 9  AND `resono` = 0 AND `employeeid` = '$idm'");
            $ordershowRun = ordero::retreiveAllOrderByEmployee(" AND `ordero`.`resono` = 0 AND `process` >= 3  AND `process` < 9 AND `ordero`.`employeeid` = '$idm'  ORDER BY `orderdate` DESC");
            $employeename = $ordershowRun[0]['namema'];
            $employeenamee = $ordershowRun[0]['nameme'];
            $smarty->assign("action", $action);
            $smarty->assign("orderNowCount", $orderNowCount);
            $smarty->assign("employeename", $employeename);
            $smarty->assign("employeenamee", $employeenamee);
            $smarty->assign("ordershowRun", $ordershowRun);
             if($en == "en"){
                $smarty->display('tech/en/orders.tpl');
            }else{
                $smarty->display('tech/ar/orders.tpl');
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
case "orderunactive":
        if($pos == 1 Or $pos == 2){
            $orderunactiveCount = ordero::countOfOrder("where `orderdate` < '$today' AND `process` = 0 AND `resono` = 0");
            $orderunactive = ordero::retreiveAllOrderGroup("AND `orderdate` < '$today' AND `process` = 0 AND `resono` = 0");
            $smarty->assign("action", $action);
            $smarty->assign("orderunactiveCount", $orderunactiveCount);
            $smarty->assign("orderunactive", $orderunactive);
            if($en == "en"){
                $smarty->display('admin/en/orders.tpl'); 
            }else{
               $smarty->display('admin/ar/orders.tpl'); 
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
case "penorder":
        if($pos == 1 Or $pos == 2){
            $orderpenCount = ordero::countOfOrder("where `process` = 1 AND  `orderdate` < '$today' AND `resono` = 0");
            $employee = employee::retreiveAllEmployee("");
            $orderpen = ordero::retreiveAllOrderByEmployee("AND `process` = 1 AND `resono` = 0 AND  `orderdate` < '$today'");
            $action1 = "ordernow";
            $date = date("Y-m-d");
            $now = strtotime($date);
            $smarty->assign("action", $action);
            $smarty->assign("orderpenCount", $orderpenCount);
            $smarty->assign("orderpen", $orderpen);
            $smarty->assign("employee", $employee);
            $smarty->assign("now", $now);
            if($en == "en"){
                $smarty->display('admin/en/orders.tpl'); 
            }else{
               $smarty->display('admin/ar/orders.tpl'); 
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
case "ordercancel":
        if($pos == 1 Or $pos == 2 Or $pos == 3){
            $ordercancleCount = ordero::countOfOrder("where `resono` != 0");
            $employee = employee::retreiveAllEmployee("");
            $ordercancle = ordero::retreiveAllOrderByReson("AND `ordero`.`resono` != 0  ORDER BY `ordero`.`ido` DESC");
            $action1 = "ordernow";
            $date = date("Y-m-d");
            $now = strtotime($date);
            $smarty->assign("action", $action);
            $smarty->assign("employee", $employee);
            $smarty->assign("ordercancleCount", $ordercancleCount);
            $smarty->assign("ordercancle", $ordercancle);
            $smarty->assign("now", $now);
            if($en == "en"){
                $smarty->display('admin/en/orders.tpl'); 
            }else{
               $smarty->display('admin/ar/orders.tpl'); 
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

case "addpart":
        if($pos == 1 Or $pos == 2 Or $pos == 3){
            $ido = $_GET['id'];
            $castomerId = $_GET['castumer'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $order = ordero::retreiveAllOrder("WHERE `ido` = '$ido'");
            $address = $castumer[0]['areac'];
            $area = area::retreiveAllArea("WHERE `ida` = '$address'");
            $areaCastumer = $area[0]['nameaa'];
            $areaCastumere = $area[0]['nameae'];
            $payment  = wayOfpayment::retreiveAllPayment("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("castumer", $castumer);
            $smarty->assign("order", $order);
             $smarty->assign("ido", $ido);
            $smarty->assign("payment", $payment);
             if($en == "en"){
                $smarty->display('admin/en/part.tpl');
            }else{
                $smarty->display('admin/ar/part.tpl');
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
case "addserviceido":
        if($pos == 1 Or $pos == 2 Or $pos == 3){
            $ido = $_GET['id'];
            $castomerId = $_GET['castumer'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $order = ordero::retreiveAllOrder("WHERE `ido` = '$ido'");
            $address = $castumer[0]['areac'];
            $area1 = area::retreiveAllArea("WHERE `ida` = '$address'");
            $areaCastumer = $area1[0]['nameaa'];
            $areaCastumere = $area1[0]['nameae'];
            $area = area::retreiveAllArea(" ");
            $service = service::retreiveAllService("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("service", $service);
            $smarty->assign("castumer", $castumer);
            $smarty->assign("order", $order);
            $smarty->assign("area", $area);
            $smarty->assign("ido", $ido);   
             if($en == "en"){
                $smarty->display('admin/en/addserviceido.tpl');
            }else{
                $smarty->display('admin/ar/addserviceido.tpl');
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
case "finishorder":
        if($pos == 1 Or $pos == 2){
            $ido = $_GET['id'];
            $pro = $_GET['pro'];
            $checkinv = invoices::checkById($ido);
            if($checkinv > 0){
                 $smarty->assign("message","تم اضافه فاتروة مسبقة لهذ العمليه عليه لا يمكنك إضافة فاتورة اخرى");
                $smarty->assign("link","index.php");
                $smarty->display('message.tpl');
            }else{
            $castomerId = $_GET['castumer'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $order = ordero::retreiveAllOrder("WHERE `ido` = '$ido'");
            $address = $castumer[0]['areac'];
            $area = area::retreiveAllArea("WHERE `ida` = '$address'");
            $areaCastumer = $area[0]['nameaa'];
            $areaCastumere = $area[0]['nameae'];
            $payment  = wayOfpayment::retreiveAllPayment("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("castumer", $castumer);
            $smarty->assign("order", $order);
            $smarty->assign("ido", $ido);
            $smarty->assign("pro", $pro);
            $smarty->assign("payment", $payment);
            if($en == "en"){
                $smarty->display('admin/en/finishorder.tpl');
            }else{
                $smarty->display('admin/ar/finishorder.tpl');
            }
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

case "recredit":
        if($pos == 1 Or $pos == 2){
            $castomerId = @$_GET['id'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $payment = wayOfpayment::retreiveAllPayment("");
            $credit = credit::retreiveAllCredit("WHERE `idmcr` = '$castomerId'");
            if($credit == NULL){
             $credit = " ";
            }
            $smarty->assign("castumer", $castumer);
            $smarty->assign("castomerId", $castomerId);
            $smarty->assign("payment", $payment);
            $smarty->assign("credit", $credit);
            if($en == "en"){
                $smarty->display('admin/en/recredit.tpl');
            }else{
                $smarty->display('admin/ar/recredit.tpl');
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

case "reportcridt":
        if($pos == 1 Or $pos == 2){
            $castomerId = @$_GET['id'];
            $idcr = @$_GET['idcr'];
            $print = @$_GET['print'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $namecastumer = $castumer[0]['nameca'];
            $payment = wayOfpayment::retreiveAllPayment("");
            $credit = credit::retreiveAllCredit("WHERE `idmcr` = '$castomerId' AND `idcr` = '$idcr'");
            $invoice = invcredite::retreiveAllinvCredite("WHERE `idcrdite` = '$idcr'");
            $inv = invoices::retreiveAllInvoices("");
            $sizeinv = sizeof($invoice);
            $credittotal = $credit[0]['pricecr'];
            $totalcre = @numtoarb(@$credittotal);
            if($credit == NULL){
             $credit = " ";
            }
            $smarty->assign("castumer", $castumer);
            $smarty->assign("print", $print);
            $smarty->assign("invoice", $invoice);
            $smarty->assign("inv", $inv);
            $smarty->assign("castomerId", $castomerId);
            $smarty->assign("payment", $payment);
            $smarty->assign("totalcre", $totalcre);
             $smarty->assign("namecastumer", $namecastumer);
            $smarty->assign("credit", $credit);
            if($en == "en"){
                $smarty->display('admin/en/reportcridt.tpl');
            }else{
                $smarty->display('admin/ar/reportcridt.tpl');
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

case "workshop":
        if($pos == 1 Or $pos == 2 Or $pos == 3){
            $ido = $_GET['id'];
            $castomerId = $_GET['castumer'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $order = ordero::retreiveAllOrder("WHERE `ido` = '$ido'");
            $service = service::retreiveAllService("");
            $address = $castumer[0]['areac'];
            $employee = employee::retreiveAllEmployee("where `carerm` = 2");
            $orderdevice = $order[0]['deviceid'];
            $area = area::retreiveAllArea(" ");
            $area1 = area::retreiveAllArea("WHERE `ida` = '$address'");
            $areaCastumer = $area1[0]['nameaa'];
            $areaCastumere = $area1[0]['nameae'];
            $device = device::retreiveAllDevice("WHERE `idv` = '$orderdevice'");
            $deviceNa = $device[0]['nameva'];
            $deviceNe = $device[0]['nameve'];
            $payment  = wayOfpayment::retreiveAllPayment("");
            $mark = mark::retreiveAllMark("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("castumer", $castumer);
            $smarty->assign("order", $order);
            $smarty->assign("area", $area);
            $smarty->assign("orderdevice", $orderdevice);
            $smarty->assign("deviceNa", $deviceNa);
            $smarty->assign("deviceNe", $deviceNe);
            $smarty->assign("mark", $mark);
            $smarty->assign("service", $service);
            $smarty->assign("employee", $employee);
            $smarty->assign("ido", $ido);
            $smarty->assign("payment", $payment);
             if($en == "en"){
                $smarty->display('admin/en/workshop.tpl');
            }else{
                $smarty->display('admin/ar/workshop.tpl');
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
case "repair":
        if($pos == 1 Or $pos == 2 Or $pos == 3){
            $ido = $_GET['id'];
            $castomerId = $_GET['castumer'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $order = ordero::retreiveAllOrder("WHERE `ido` = '$ido'");
            $service = service::retreiveAllService("");
            $address = $castumer[0]['areac'];
            $employee = employee::retreiveAllEmployee("where `carerm` = 2");
            $orderdevice = $order[0]['deviceid'];
            $area = area::retreiveAllArea("WHERE `ida` = '$address'");
            $areaCastumer = $area[0]['nameaa'];
            $areaCastumere = $area[0]['nameae'];
            $device = device::retreiveAllDevice("WHERE `idv` = '$orderdevice'");
            $deviceNa = $device[0]['nameva'];
            $deviceNe = $device[0]['nameve'];
            $payment  = wayOfpayment::retreiveAllPayment("");
            $mark = mark::retreiveAllMark("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("castumer", $castumer);
            $smarty->assign("order", $order);
            $smarty->assign("orderdevice", $orderdevice);
            $smarty->assign("deviceNa", $deviceNa);
            $smarty->assign("deviceNe", $deviceNe);
            $smarty->assign("mark", $mark);
            $smarty->assign("service", $service);
            $smarty->assign("employee", $employee);
            $smarty->assign("ido", $ido);
            $smarty->assign("payment", $payment);
             if($en == "en"){
                $smarty->display('admin/en/repair.tpl');
            }else{
                $smarty->display('admin/ar/repair.tpl');
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
case "delivery":
        if($pos == 1 Or $pos == 2 Or $pos == 3){
            $ido = @$_GET['id'];
            $castomerId = @$_GET['castumer'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $order = ordero::retreiveAllOrder("WHERE `ido` = '$ido'");
            $tech = employee::retreiveAllEmployee("");
            $service = service::retreiveAllService("");
            $address = $castumer[0]['areac'];
            $employee = employee::retreiveAllEmployee("where `carerm` = 2");
            $orderdevice = $order[0]['deviceid'];
            $area = area::retreiveAllArea("WHERE `ida` = '$address'");
            $areaCastumer = $area[0]['nameaa'];
            $areaCastumere = $area[0]['nameae'];
            $device = device::retreiveAllDevice("WHERE `idv` = '$orderdevice'");
            $deviceNa = $device[0]['nameva'];
            $deviceNe = $device[0]['nameve'];
            $payment  = wayOfpayment::retreiveAllPayment("");
            $mark = mark::retreiveAllMark("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("castumer", $castumer);
            $smarty->assign("order", $order);
            $smarty->assign("tech", $tech);
            $smarty->assign("orderdevice", $orderdevice);
            $smarty->assign("deviceNa", $deviceNa);
            $smarty->assign("deviceNe", $deviceNe);
            $smarty->assign("mark", $mark);
            $smarty->assign("service", $service);
            $smarty->assign("employee", $employee);
            $smarty->assign("ido", $ido);
            $smarty->assign("payment", $payment);
             if($en == "en"){
                $smarty->display('admin/en/delivery.tpl');
            }else{
                $smarty->display('admin/ar/delivery.tpl');
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
case "finishorder":
        if($pos == 1 Or $pos == 2){
            $ido = $_GET['id'];
            $castomerId = $_GET['castumer'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $order = ordero::retreiveAllOrder("WHERE `ido` = '$ido'");
            $address = $castumer[0]['areac'];
            $area = area::retreiveAllArea("WHERE `ida` = '$address'");
            $areaCastumer = $area[0]['nameaa'];
            $areaCastumere = $area[0]['nameae'];
            $payment  = wayOfpayment::retreiveAllPayment("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("castumer", $castumer);
            $smarty->assign("order", $order);
             $smarty->assign("ido", $ido);
            $smarty->assign("payment", $payment);
            if($en == "en"){
                $smarty->display('admin/en/finishorder.tpl');
            }else{
                $smarty->display('admin/ar/finishorder.tpl');
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
case "cancleorder":
        if($pos == 1 Or $pos == 2 Or $pos == 3){
            $ido = $_GET['id'];
            $castomerId = $_GET['castumer'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castomerId'");
            $order = ordero::retreiveAllOrder("WHERE `ido` = '$ido'");
            $address = $castumer[0]['areac'];
            $area = area::retreiveAllArea("WHERE `ida` = '$address'");
            $deviceid = $order[0]['deviceid'];
            $device = device::retreiveAllDevice("WHERE `idv` = '$deviceid'");
            $areaCastumer = $area[0]['nameaa'];
            $areaCastumere = $area[0]['nameae'];
            $deviceCastumer = $device[0]['nameva'];
            $deviceCastumere = $device[0]['nameve'];
            $reson = reson::retreiveAllReson("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("deviceCastumer", $deviceCastumer);
            $smarty->assign("deviceCastumere", $deviceCastumere);
            $smarty->assign("castumer", $castumer);
            $smarty->assign("reson", $reson);
            $smarty->assign("ido", $ido);
            if($en == "en"){
                $smarty->display('admin/en/cancelorder.tpl');
            }else{
                $smarty->display('admin/ar/cancelorder.tpl');
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

case "addcastumer":
        if($pos == 1 Or $pos == 2){
            $area = area::retreiveAllArea("");
            $smarty->assign("area", $area);
             if($en == "en"){
                $smarty->display('admin/en/addcastumer.tpl');
            }else{
                 $smarty->display('admin/ar/addcastumer.tpl');
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
case "addarea":
    
        if(isset($_POST['active'])){
             $ida = $_POST['ida'];
           
                area::updateAreaActiveById(1, $ida);
        }
         if(isset($_POST['unactive'])){
             $ida = $_POST['ida'];
                area::updateAreaActiveById(0, $ida);
        }
        if($pos == 1 Or $pos == 2){
            $area = area::retreiveAllArea("");
            $smarty->assign("area", $area);
            if($en == 'en'){
                $smarty->display('admin/en/area.tpl');
            }else{
                 $smarty->display('admin/ar/area.tpl');
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
case "adddevice":
    
     if(isset($_POST['active'])){
             $idv = $_POST['idv'];
             device::updateDeviceActiveById(1, $idv);
        }
         if(isset($_POST['unactive'])){
              $idv = $_POST['idv'];
              device::updateDeviceActiveById(0, $idv);
        }
        if($pos == 1 Or $pos == 2){
            $device = device::retreiveAllDevice("");
            $smarty->assign("device", $device);
             if($en == 'en'){
                $smarty->display('admin/en/device.tpl');
            }else{
                $smarty->display('admin/ar/device.tpl');
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
case "addmark":
        if($pos == 1 Or $pos == 2){
            $mark = mark::retreiveAllMark("");
            $smarty->assign("mark", $mark);
             if($en == 'en'){
                $smarty->display('admin/en/mark.tpl');
            }else{
                $smarty->display('admin/ar/mark.tpl');
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
case "addservice":
    if(isset($_POST['active'])){
             $idserv = $_POST['idserv'];
             service::updateServiceActiveById(1, $idserv);
        }
         if(isset($_POST['unactive'])){
             $idserv = $_POST['idserv'];
                service::updateServiceActiveById(0, $idserv);
        }
        if($pos == 1 Or $pos == 2){
            $service = service::retreiveAllService("");
            $smarty->assign("service", $service);
             if($en == 'en'){
                $smarty->display('admin/en/service.tpl');
            }else{
                $smarty->display('admin/ar/service.tpl');
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
case "addcarer":
        if(isset($_POST['active'])){
                 $idr = $_POST['idr'];
                 carer::updateCarerActiveById(1, $idr);
            }
             if(isset($_POST['unactive'])){
                 $idr = $_POST['idr'];
                    carer::updateCarerActiveById(0, $idr);
        }
        if($pos == 1 Or $pos == 2){
            $carer = carer::retreiveAllCarer("");
            $smarty->assign("carer", $carer);
             if($en == 'en'){
                $smarty->display('admin/en/carer.tpl');
            }else{
                $smarty->display('admin/ar/carer.tpl');
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
case "addcountry":
         if(isset($_POST['active'])){
               $idy = $_POST['idy'];
                 country::updateCountryActiveById(1, $idy);
            }
             if(isset($_POST['unactive'])){
                $idy = $_POST['idy'];
                 country::updateCountryActiveById(0, $idy);
        }
        if($pos == 1 Or $pos == 2){
            $country = country::retreiveAllCountry("");
            $smarty->assign("country", $country);
            if($en == 'en'){
                $smarty->display('admin/en/country.tpl');
            }else{
                $smarty->display('admin/ar/country.tpl');
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
case "addairport":
        if(isset($_POST['active'])){
             $idair = $_POST['idair'];
           
             air::updateAirportActiveById(1, $idair);
        }
         if(isset($_POST['unactive'])){
             $idair = $_POST['idair'];
                air::updateAirportActiveById(0, $idair);
        }
        if($pos == 1 Or $pos == 2){
            $airport = air::retreiveAllAirport("");
            $smarty->assign("airport", $airport);
            if($en == 'en'){
                $smarty->display('admin/en/airport.tpl');
            }else{
                $smarty->display('admin/ar/airport.tpl');
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
case "addpayment":
        if(isset($_POST['active'])){
             $idp = $_POST['idp'];
             wayOfpayment::updatePaymentActiveById(1, $idp);
        }
         if(isset($_POST['unactive'])){
             $idp = $_POST['idp'];
             wayOfpayment::updatePaymentActiveById(0, $idp);
        }
        if($pos == 1){
            $payment = wayOfpayment::retreiveAllPayment("");
            $smarty->assign("payment", $payment);
            if($en == 'en'){
                $smarty->display('admin/en/payment.tpl');
            }else{
                $smarty->display('admin/ar/payment.tpl');
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

case "expenses": 
            if($pos == 1 Or $pos == 2){
                $emplyee = employee::retreiveAllEmployee("");
                $smarty->assign("emplyee", $emplyee);
            if($en == 'en'){
                $smarty->display('admin/en/expenses.tpl');
            }else{
                
                $smarty->display('admin/ar/expenses.tpl');
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
case "exreport":
        if($pos == 1 Or $pos == 2){
            $act  = $_GET['act'];
            $employee = employee::retreiveAllEmployee("");
            $smarty->assign("act", $act);
            $smarty->assign("employee", $employee);
            if($en == 'en'){
                $smarty->display('admin/en/exreport.tpl');
            }else{
                 $smarty->display('admin/ar/exreport.tpl');
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
case "addreson":
    if(isset($_POST['active'])){
             $idn = $_POST['idn'];
             reson::updateResonActiveById(1, $idn);
        }
         if(isset($_POST['unactive'])){
            $idn = $_POST['idn'];
              reson::updateResonActiveById(0, $idn);
        }
        if($pos == 1 Or $pos == 2){
            $reson = reson::retreiveAllReson("");
            $smarty->assign("reson", $reson);
             if($en == 'en'){
                $smarty->display('admin/en/reson.tpl');
            }else{
                $smarty->display('admin/ar/reson.tpl');
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
case "addemployee":
        if($pos == 1){
            $Year = (int)date('Y');
            $month = (int)date('m');
            $carer = carer::retreiveAllCarer("where `deletr` = 0");
            $country = country::retreiveAllCountry("where `delety` = 0");
            $airport = air::retreiveAllAirport("where `deletair` = 0");
            $employee = employee::retreiveAllEmployee("ORDER BY `carerm` ASC");
            $smarty->assign("carer", $carer);
            $smarty->assign("country", $country);
            $smarty->assign("airport", $airport);
            $smarty->assign("employee", $employee);
            $smarty->assign("month", $month);
            $smarty->assign("Year", $Year);
            if($en == "en"){
                $smarty->display('admin/en/employee.tpl');
            }else{
                $smarty->display('admin/ar/employee.tpl');
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
case "getcastumer":
    if($pos == 1 Or $pos == 2){
	$phone = test_input(@$_POST['phone']);
        $searchway = test_input(@$_POST['searchway']);
        $lengthphone = strlen($phone);
        IF($searchway == 2){
            $castumer = castumer::retreiveAllCastumer("WHERE `castumer`.`phonec` LIKE '%$phone%'");
        }ELSEIF ($searchway == 1){
            $castumer = castumer::retreiveAllCastumer("WHERE `castumer`.`namece` LIKE '%$phone%' OR  `castumer`.`nameca` LIKE '%$phone%'");
        }else{
                
        }
        $way = wayOfpayment::retreiveAllPayment("");
        $waycount = wayOfpayment::countOfOrder("");
        $area = area::retreiveAllArea(""); 
        if (!isset($searchway) || $searchway == 0){
                if($en == 'en'){
                    $smarty->assign("message", "Please Choose way of search");
                    $smarty->display('admin/en/searchcastumer.tpl'); 
                }else{
                    $smarty->assign("message", "من فضلك ادخل طريقة البحث");
                    $smarty->display('admin/ar/searchcastumer.tpl');
        }
        }elseif (!isset($phone) || empty($phone)){
                if($en == 'en'){
                    $smarty->assign("searchway", $searchway);
                    $smarty->assign("message", "Please Insert Client Mobile Number");
                    $smarty->display('admin/en/searchcastumer.tpl'); 
                }else{
                    $smarty->assign("searchway", $searchway);
                    $smarty->assign("message", "من فضلك ادخل الاسم او رقم الجوال");
                    $smarty->display('admin/ar/searchcastumer.tpl');
                }
         }elseif ( !is_numeric($phone) && $searchway == 2) {
                if($en == 'en'){
                    $smarty->assign("searchway", $searchway);
                    $smarty->assign("message", "Please Insert Client Mobile Number Only");
                    $smarty->display('admin/en/searchcastumer.tpl'); 
                }else{
                    $smarty->assign("searchway", $searchway);
                    $smarty->assign("message", "من فضلك ادخل ارقام فقط");
                    $smarty->display('admin/ar/searchcastumer.tpl');
                }
        }elseif ( is_numeric($phone) && $searchway == 1) {
                if($en == 'en'){
                    $smarty->assign("searchway", $searchway);
                    $smarty->assign("message", "Please Insert Client Name");
                    $smarty->display('admin/en/searchcastumer.tpl'); 
                }else{
                    $smarty->assign("searchway", $searchway);
                    $smarty->assign("message", "من فضلك ادخل الاسم بالحروف فقط");
                    $smarty->display('admin/ar/searchcastumer.tpl');
                }
       }elseif ($lengthphone != 10 & $searchway == 2) {
                if($en == 'en'){
                    $smarty->assign("searchway", $searchway);
                    $smarty->assign("message", "Not less than 10 nor more than ten");
                    $smarty->display('admin/en/searchcastumer.tpl');
                }else{
                    $smarty->assign("searchway", $searchway);
                    $smarty->assign("message", "الارقام لا تقل ولا تزيد عن  عشرة");
                    $smarty->display('admin/ar/searchcastumer.tpl');
                }
        }elseif ($castumer == NULL){
                $castumer = NULL;
                if ($searchway == 1){
                    $namefe = $phone;
                    $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $namefe);
                    if($pregName == 1){
                       $namece = $phone; 
                    }else{
                        $name = $phone;
                    }
                }else{
                    $phone1 = $phone;
                }
                $smarty->assign("name", @$name);
                $smarty->assign("namece", @$namece);
                $smarty->assign("phone", @$phone1);
                $area = area::retreiveAllArea("");
                $smarty->assign("area", $area);
                $smarty->assign("castumer", $castumer);
                if($en == 'en'){
                   $smarty->display('admin/en/castumerSearch.tpl');
                }else{
                    $smarty->display('admin/ar/castumerSearch.tpl');
                }
		
	}else{
                if($en == 'en'){
                    $smarty->assign("area", $area);
                    $smarty->assign("castumer", $castumer);
                    $smarty->assign("way", $way);
                    $smarty->assign("waycount", $waycount);
                    $smarty->display('admin/en/castumerSearch.tpl');
                }else{
                    $smarty->assign("area", $area);
                    $smarty->assign("castumer", $castumer);
                    $smarty->assign("way", $way);
                    $smarty->assign("waycount", $waycount);
                    $smarty->display('admin/ar/castumerSearch.tpl');
                }
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
case "addorder":
        if($pos == 1 Or $pos == 2){
            $castomerId = $_GET['id'];
            $castumer = castumer::retreiveAllCastumer("WHERE `idc`='$castomerId'");
            $address = $castumer[0]['areac'];
            $area = area::retreiveAllArea("WHERE `ida` = '$address'");
            $areaCastumer = $area[0]['nameaa'];
            $areaCastumere = $area[0]['nameae'];
            $area = area::retreiveAllArea("");
            $device = device::retreiveAllDevice("");
            $service = service::retreiveAllService("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("area", $area);
            $smarty->assign("device", $device);
            $smarty->assign("service", $service);
            $smarty->assign("castumer", $castumer);
            if($en == 'en'){
                $smarty->display('admin/en/order.tpl');
            }else{
                $smarty->display('admin/ar/order.tpl');
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

case "reportst":
        if($pos == 1 Or $pos == 2){
            $act  = $_GET['act'];
            $payment = wayOfpayment::retreiveAllPayment("");
            $smarty->assign("payment",$payment);
             $smarty->assign("act", $act);
             
            if($en == 'en'){
                $smarty->display('admin/en/reportst.tpl');
            }else{
                 $smarty->display('admin/ar/reportst.tpl');
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
case "report":
        if($pos == 1 Or $pos == 2){
            $act  = $_GET['act'];
            $smarty->assign("act", $act);
            $payment = wayOfpayment::retreiveAllPayment("");
            $smarty->assign("payment",$payment);
            if($en == 'en'){
                $smarty->display('admin/en/report.tpl');
            }else{
                 $smarty->display('admin/ar/report.tpl');
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

case "reports":
        if($pos == 1 Or $pos == 2){
        $invdate = test_input(@$_POST['invdate']);
        $paymentid = test_input(@$_POST['paymentid']);
        if($paymentid == 0){
            $query = null;
            $query2 = null;
        }else{
            $query = "AND `payment` = '$paymentid'";
            $query2 = "WHERE `idp` = '$paymentid'";
        }
        $creditpay = invoices::retreiveAllCridetPay("AND `credit`.`crdate` = '$invdate' ORDER BY `invoice`.`bill` ASC");
        $countcri = sizeof($creditpay);
	$inv = invoices::retreiveAllInvoices("AND `idate` = '$invdate' $query ORDER BY `invoice`.`bill` ASC");
        $invcount = invoices::countOfOrder(" WHERE `idate` = '$invdate' $query");
        $payment = wayOfpayment::retreiveAllPayment("$query2"); 
        $employee = employee::retreiveAllEmployee("");
        $totalPayment = invoices::totalAllInoices($invdate, $payment);
        $totalPaymentCredit = credit::totalAllCredit($invdate, $payment);
        $totaleExpense = expenses::retreiveTotalExpenses($invdate, $invdate);
        $totalFinalPayment = $totalPayment[0][3];
        $totalFinalCredit = $totalPaymentCredit[0][3];
        if($totalFinalPayment == NUll){
            $totalFinalPayment = 0;
        }
        if($totalFinalCredit == NUll){
            $totalFinalCredit = 0;
        }
        $totalFina = ($totalFinalPayment + $totalFinalCredit) - $totaleExpense;
        $totalFinal = @numtoarb($totalFina);
        $timestamp = strtotime($invdate);
        $dayen1 = date("l", $timestamp);
        $dayen2 = date("D", $timestamp);
        $dayar1  = daten::dayAr($dayen2);
        $smarty->assign("payment", $payment);
        $smarty->assign("invdate", $invdate);
        $smarty->assign("employee", $employee); 
        $smarty->assign("invcount", $invcount); 
        $smarty->assign("dayen1", $dayen1);
        $smarty->assign("dayar1", $dayar1);
        $smarty->assign("totalPayment", $totalPayment);
        $smarty->assign("totalPaymentCredit", $totalPaymentCredit);
        $smarty->assign("totaleExpense", $totaleExpense);
        $smarty->assign("totalFinal", $totalFinal);
        if (!isset($invdate) || empty($invdate)){
                if($en == 'en'){
                    $smarty->assign("message", "Please Insert date");
                    $smarty->display('admin/en/report.tpl'); 
                }else{
                    $smarty->assign("message", "من فضلك ادخل التاريخ");
                    $smarty->display('admin/ar/report.tpl');
                }
        }elseif (!isset($paymentid) || $paymentid == null){
                if($en == 'en'){
                    $smarty->assign("invdate", $invdate);
                    $smarty->assign("message", "Please Insert Way Of Payment");
                    $smarty->display('admin/en/report.tpl'); 
                }else{
                    $smarty->assign("invdate", $invdate);
                    $smarty->assign("message", "من فضلك ادخل نوع الفواتير");
                    $smarty->display('admin/ar/report.tpl');
                }
        }elseif ($inv == NULL){
                $inv = NULL;
                $smarty->assign("creditpay", $creditpay);
                $smarty->assign("countcri", $countcri);
                $smarty->assign("inv", $inv);
                $smarty->assign("invdate", $invdate);
                if($en == 'en'){
                   $smarty->display('admin/en/reports.tpl');
                }else{
                    $smarty->display('admin/ar/reports.tpl');
                }
		
	}else{
                if($en == 'en'){
                    $smarty->assign("inv", $inv);
                    $smarty->assign("countcri", $countcri);
                    $smarty->assign("creditpay", $creditpay);
                    $smarty->display('admin/en/reports.tpl');
                }else{
                    $smarty->assign("inv", $inv);
                    $smarty->assign("countcri", $countcri);
                    $smarty->assign("creditpay", $creditpay);
                    $smarty->display('admin/ar/reports.tpl');
                }
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


case "reportsca":
        if($pos == 1 Or $pos == 2){
        $invdate = test_input(@$_POST['invdate']);
        $castumerid = intval(@$_GET['id']);
        $way = intval(@$_GET['payment']);
        IF($way == 0){
            $query = null;
            $query1 = null;
        }elseif($way == 5){
            $query  = "AND `invoice`.`payment` = '$way' AND `totalc` != `credit`";
            $query1 = "AND ``wayofpayment`.`idp` = '$way' AND `totalc` != `credit`";
        }elseif($way == 8){
            $query  = "AND `invoice`.`payment` = '5' AND `totalc` = `credit`";
            $query1 = "AND ``wayofpayment`.`idp` = '5' AND `totalc` = `credit`";
        }else {
            $query  = "AND `invoice`.`payment` = '$way'";
            $query1 = "AND ``wayofpayment`.`idp` = '$way'";
        }
        $castumer = castumer::retreiveAllCastumer("WHERE `idc` = '$castumerid'");
	$inv = invoices::retreiveAllInvoices("AND `castumer`.`idc` = '$castumerid' $query");
        $invcount = invoices::countOfOrder(" WHERE `castumer`.`idc` = '$castumerid'");
        $payment = wayOfpayment::retreiveAllPayment(" ");
        $paymentt = wayOfpayment::retreiveAllPayment("WHERE `idp` = '$way'");
        $invcredite = invcredite::retreiveAllinvCredite("");
        $payment1 = $paymentt[0]['namepa'];
        $payment2 = $paymentt[0]['namepe']; 
        $employee = employee::retreiveAllEmployee("");
        $totalPayment = invoices::retreiveAllInvoicesOrderByCastummerId("AND `castumer`.`idc` = '$castumerid' $query1");
        $way55 = wayOfpayment::retreiveAllPayment("");
        $timestamp = strtotime($invdate);
        $dayen1 = date("l", $timestamp);
        $dayen2 = date("D", $timestamp);
        $dayar1  = daten::dayAr($dayen2);
        $smarty->assign("castumerid", $castumerid);
        $smarty->assign("way", $way);
        $smarty->assign("invcredite", $invcredite);
        $smarty->assign("way55", $way55);
        $smarty->assign("castumer", $castumer);
        $smarty->assign("payment", $payment);
        $smarty->assign("invdate", $invdate);
        $smarty->assign("employee", $employee); 
        $smarty->assign("invcount", $invcount); 
        $smarty->assign("dayen1", $dayen1);
        $smarty->assign("dayar1", $dayar1);
        $smarty->assign("totalPayment", $totalPayment);
        if($en == 'en'){
                    $smarty->assign("payment1", "$payment2");
                    $smarty->assign("inv", $inv);
                    $smarty->display('admin/en/reportsca.tpl');
                }else{ 
                    $smarty->assign("payment1", $payment1);
                    $smarty->assign("inv", $inv);
                    $smarty->display('admin/ar/reportsca.tpl');
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


case "reportdate":
        if($pos == 1 Or $pos == 2){
        $invdatefrom = test_input(@$_POST['invdateon']);
        $invdateto = test_input(@$_POST['invdateto']);
        $paymentid = test_input(@$_POST['paymentid']);
         if($paymentid == 0){
            $query = null;
            $query2 = null;
        }else{
            $query = "AND `payment` = '$paymentid'";
            $query2 = "WHERE `idp` = '$paymentid'";
        }
        $creditpay = invoices::retreiveAllCridetPay("AND `credit`.`crdate`  >= '$invdatefrom' AND `credit`.`crdate` <= '$invdateto' ORDER BY `invoice`.`bill` ASC");
        $countcri = sizeof($creditpay);
    	$inv = invoices::retreiveAllInvoices("AND `idate` >= '$invdatefrom' AND `idate` <= '$invdateto' $query ORDER BY `invoice`.`bill` ASC");
        $invcount = invoices::countOfOrder(" WHERE `idate` >= '$invdatefrom' AND `idate` <= '$invdateto' $query") + $countcri;
        $payment = wayOfpayment::retreiveAllPayment("$query2"); 
        $employee = employee::retreiveAllEmployee("");
        $totalPayment = invoices::totalAllInoicesDate($invdatefrom, $invdateto, $payment);
        $totalPaymentCredit = credit::totalAllCreditDate($invdatefrom, $invdateto, $payment);
        $totaleExpense = expenses::retreiveTotalExpenses($invdatefrom, $invdateto);
        $totalFinalPayment = $totalPayment[0][3];
        $totalFinalCredit = $totalPaymentCredit[0][3];
        if($totalFinalPayment == NUll){
            $totalFinalPayment = 0;
        }
        if($totalFinalCredit == NUll){
            $totalFinalCredit = 0;
        }
        $totalFina = ($totalFinalPayment + $totalFinalCredit) - $totaleExpense;
        $totalFinal = @numtoarb($totalFina);
        /*$timestamp = strtotime($invdate);
        $dayen1 = date("l", $timestamp);
        $dayen2 = date("D", $timestamp);
        $dayar1  = daten::dayAr($dayen2);
         */
        $smarty->assign("payment", $payment);
        $smarty->assign("employee", $employee); 
        $smarty->assign("invcount", $invcount); 
        $smarty->assign("totalPayment", $totalPayment);
        $smarty->assign("totalPaymentCredit", $totalPaymentCredit);
        $smarty->assign("totaleExpense", $totaleExpense);
        $smarty->assign("totalFinal", $totalFinal);
        if (!isset($invdatefrom) || empty($invdatefrom) && !isset($invdateto) || empty($invdateto)){
                if($en == 'en'){
                    $smarty->assign("datefrom", $invdatefrom);
                    $smarty->assign("dateto", $invdateto);
                    $smarty->assign("message", "Please Insert date");
                    $smarty->display('admin/en/reports.tpl'); 
                }else{
                    $smarty->assign("datefrom", $invdatefrom);
                    $smarty->assign("dateto", $invdateto);
                    $smarty->assign("message", "من فضلك ادخل التاريخ");
                    $smarty->display('admin/ar/reportst.tpl');
                }
        }elseif(!isset($paymentid) ||$paymentid == null){
                if($en == 'en'){
                    $smarty->assign("datefrom", $invdatefrom);
                    $smarty->assign("dateto", $invdateto);
                    $smarty->assign("message", "Please Insert Way Of Payment");
                    $smarty->display('admin/en/reportst.tpl'); 
                }else{
                    $smarty->assign("datefrom", $invdatefrom);
                    $smarty->assign("dateto", $invdateto);
                    $smarty->assign("message", "من فضلك ادخل نوع الفواتير");
                    $smarty->display('admin/ar/reportst.tpl');
                }
        }elseif ($inv == NULL){
                $inv = NULL;
                $smarty->assign("datefrom", $invdatefrom);
                $smarty->assign("dateto", $invdateto);
                $smarty->assign("creditpay", $creditpay);
                $smarty->assign("countcri", $countcri);
                $smarty->assign("inv", $inv);
                $smarty->assign("invdate", $invdate);
                if($en == 'en'){
                   $smarty->display('admin/en/reportesdate.tpl');
                }else{
                    $smarty->display('admin/ar/reportesdate.tpl');
                }
		
	}else{
                if($en == 'en'){
                    $smarty->assign("datefrom", $invdatefrom);
                    $smarty->assign("dateto", $invdateto);
                    $smarty->assign("inv", $inv);
                    $smarty->assign("countcri", $countcri);
                    $smarty->assign("creditpay", $creditpay);
                    $smarty->display('admin/en/reportesdate.tpl');
                }else{
                    $smarty->assign("datefrom", $invdatefrom);
                    $smarty->assign("dateto", $invdateto);
                    $smarty->assign("inv", $inv);
                    $smarty->assign("countcri", $countcri);
                    $smarty->assign("creditpay", $creditpay);
                    $smarty->display('admin/ar/reportesdate.tpl');
                }
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


case "exreports":
        if($pos == 1 Or $pos == 2){
        $exfrom = test_input(@$_POST['exfrom']);
        $exto = test_input(@$_POST['exto']);
        $employex = test_input(@$_POST['emid']);
        if($employex == 0){
            $query = " ";
        }else{
             $query = "AND `idem` = '$employex'";
           
        }
        $employeename = employee::retreiveAllEmployee("WHERE `idm` = '$employex'");
        $emnamema = $employeename[0]['namema'];
        $emnameme = $employeename[0]['nameme'];
	$ex = expenses::retreiveAllExpenses("WHERE `dateex` >= '$exfrom' AND `dateex` <= '$exto' $query");
        $excount = expenses::countOfOrder("WHERE `dateex` >= '$exfrom' AND `dateex` <= '$exto' $query");
        $employee = employee::retreiveAllEmployee("");
        $checkem  = employee::checkById($employex);
        $timestamp = strtotime($exfrom);
        $dayen1 = date("l", $timestamp);
        $dayen2 = date("D", $timestamp);
        $dayar1  = daten::dayAr($dayen2);
        $smarty->assign("exfrom", $exfrom);
        $smarty->assign("exto", $exto);
        $smarty->assign("employee", $employee); 
        if (!isset($exfrom) || empty($exfrom) && !isset($exto) || empty($exto)){
                if($en == 'en'){
                    $smarty->assign("exfrom", $exfrom);
                    $smarty->assign("exto", $exto);
                    $smarty->assign("message", "Please Insert date");
                    $smarty->display('admin/en/exreport.tpl'); 
                }else{
                     $smarty->assign("exfrom", $exfrom);
                    $smarty->assign("exto", $exto);
                    $smarty->assign("message", "من فضلك ادخل التاريخ");
                    $smarty->display('admin/ar/exreport.tpl');
                }
        }elseif ($employex == " " && $checkem == 0){
                if($en == 'en'){
                    $smarty->assign("exfrom", $exfrom);
                    $smarty->assign("exto", $exto);
                    $smarty->assign("message", "Please Insert Name");
                    $smarty->display('admin/en/exreport.tpl'); 
                }else{
                    $smarty->assign("exfrom", $exfrom);
                    $smarty->assign("exto", $exto);
                    $smarty->assign("message", "من فضلك ادخل الاسم");
                    $smarty->display('admin/ar/exreport.tpl');
                }
        }elseif ($ex == NULL){
                $ex = NULL;
                $smarty->assign("ex", $ex);
                $smarty->assign("exfrom", $exfrom);
                $smarty->assign("exto", $exto);
                $smarty->assign("excount", $excount); 
                $smarty->assign("new", "new"); 
                $smarty->assign("dayen1", $dayen1);
                $smarty->assign("dayar1", $dayar1);
                if($en == 'en'){
                   $smarty->display('admin/en/reportesdate.tpl');
                }else{
                    $smarty->display('admin/ar/reportesdate.tpl');
                }
		
	}else{
                    $smarty->assign("ex", $ex);
                    $smarty->assign("exfrom", $exfrom);
                    $smarty->assign("exto", $exto);
                    $smarty->assign("excount", $excount); 
                    $smarty->assign("employex", $employex); 
                    $smarty->assign("emnamema", $emnamema);
                    $smarty->assign("emnameme", $emnameme);
                    $smarty->assign("dayen1", $dayen1);
                    $smarty->assign("dayar1", $dayar1);
                if($en == 'en'){
                    $smarty->display('admin/en/reportesdate.tpl');
                }else{
                    $smarty->display('admin/ar/reportesdate.tpl');
                }
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

case "pendingtoday":
        if($pos == 1 Or $pos == 2){
            $castumer = castumerReapair::retreiveAllOrder("WHERE `active` = 0");
            if ($castumer == NULL){
                $smarty->display('Pendorder.tpl');
            }else{
                $smarty->assign("castumer", $castumer);
                $smarty->display('admin/result.tpl');
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
case "search":
        if($pos == 1 Or $pos == 2){
            if($en == 'en'){
                 $smarty->display('admin/en/searchcastumer.tpl');
            }else{
                 $smarty->display('admin/ar/searchcastumer.tpl');
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
case "allorder":
        if($pos == 1 Or $pos == 2){
            $castomerId = $_GET['id'];
            $castumer = castumerReapair::retreiveAllCastumer("WHERE `idc`='$castomerId'");
            $order = orderRepair::retreiveAllOrderGroup("AND `castumerid`='$castomerId'");
            $address = $castumer[0]['address'];
            $area = area::retreiveAllArea("WHERE `id` = '$address'");
            $areaCastumer = $area[0]['name'];
            $area = area::retreiveAllArea("");
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("area", $area);
            $smarty->assign("castumer", $castumer);
            $smarty->assign("order", $order);
            $smarty->display('admin/report.tpl');
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


case "ordercastumer":
        if($pos == 1 Or $pos == 2){
            $idc = intval(@$_GET['idc']);
            $st = intval(@$_GET['st']);
            if($st == 0){
            $orderNowCount = ordero::countOfOrder("where `process` >= 0  AND `process` < 9  AND `resono` = 0 AND `castumerid` = '$idc'");
            $ordershowRun = ordero::retreiveAllOrderByEmployee("AND `ordero`.`resono` = 0 AND `ordero`.`process` >= 0  AND `ordero`.`process` < 9 AND `ordero`.`castumerid` = '$idc'");
           
            }elseif($st == 1){
            $orderNowCount = ordero::countOfOrder("where  `process` >= 9  AND `resono` = 0 AND `castumerid` = '$idc'");
            $ordershowRun = ordero::retreiveAllOrderByEmployee(" AND `ordero`.`resono` = 0 AND `ordero`.`process` >= 9  AND `ordero`.`resono` = 0 AND `ordero`.`castumerid` = '$idc'  ORDER BY `orderdate` DESC");
            }else{
            $orderNowCount = ordero::countOfOrder("where  `resono` != 0 AND `castumerid` = '$idc'");
            $ordershowRun = ordero::retreiveAllOrderByEmployee("AND `ordero`.`resono` != 0  AND `ordero`.`castumerid` = '$idc'  ORDER BY `orderdate` DESC");
            }
         
            $arealoop = area::retreiveAllArea("");
            $reson = reson::retreiveAllReson("");
            $invoices = invoices::retreiveAllInvoices("");
            $castumename = $ordershowRun[0]['nameca'];
            $castumenamee = $ordershowRun[0]['namece'];
            $phonec = $ordershowRun[0]['phonec'];
            $areac = $ordershowRun[0]['areac'];
            $area = area::retreiveAllArea("where `ida` = '$areac'");
            $areaCastumer = $area[0]['nameaa'];
            $areaCastumere = $area[0]['nameae'];
            $serviceOrder = serviceOrder::retreiveAllServiceOrder("ORDER BY `serviceorder`.`serviceido` ASC");
            $service = service::retreiveAllService(" ");
            $mark = mark::retreiveAllMark("");
            $smarty->assign("action", $action);
            $smarty->assign("st", $st);
            $smarty->assign("mark", $mark);
            $smarty->assign("orderNowCount", $orderNowCount);
            $smarty->assign("arealoop", $arealoop);
            $smarty->assign("reson", $reson);
            $smarty->assign("invoices", $invoices);
            $smarty->assign("castumerid", $idc);
            $smarty->assign("castumename", $castumename);
            $smarty->assign("castumenamee", $castumenamee);
            $smarty->assign("areaCastumer", $areaCastumer);
            $smarty->assign("areaCastumere", $areaCastumere);
            $smarty->assign("phonec", $phonec);
            $smarty->assign("ordershowRun", $ordershowRun);
            $smarty->assign("serviceOrder", $serviceOrder);
            $smarty->assign("service", $service);
            if($en == "en"){
                $smarty->display('admin/en/ordersc.tpl');
            }else{
                $smarty->display('admin/ar/ordersc.tpl');
            }
        }elseif($pos == 3){
            $idm = $iduser;
            $orderNowCount = ordero::countOfOrder("where `process` >= 3  AND `process` <= 9  AND `resono` = 0 AND `employeeid` = '$idm'");
            $ordershowRun = ordero::retreiveAllOrderByEmployee(" AND `ordero`.`resono` = 0 AND `process` >= 3  AND `process` <= 9 AND `ordero`.`employeeid` = '$idm'  ORDER BY `orderdate` DESC");
            $employeename = $ordershowRun[0]['namema'];
            $employeenamee = $ordershowRun[0]['nameme'];
            $smarty->assign("action", $action);
            $smarty->assign("orderNowCount", $orderNowCount);
            $smarty->assign("employeename", $employeename);
            $smarty->assign("employeenamee", $employeenamee);
            $smarty->assign("ordershowRun", $ordershowRun);
             if($en == "en"){
                $smarty->display('tech/en/orders.tpl');
            }else{
                $smarty->display('tech/ar/orders.tpl');
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