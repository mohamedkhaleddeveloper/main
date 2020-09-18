<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idu = test_input(@$_POST['idu']);
                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                $iduserm = $idu1[0]['idm'];
                $nameca = test_input(@$_POST['nameca']);
                $namece = test_input(@$_POST['namece']);
                $phone = test_input(@$_POST['phone']);
		$area = test_input(@$_POST['area']);	
                $checkphone = castumer::checkByPhone($phone);
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $namece);
                $deletc = 0;
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($nameca) || empty($nameca)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif (!isset($namece) || empty($namece)){
                        $return['error'] = true;
                        $return['msg'] .= 2;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 3; 
                }elseif(!isset($phone) || empty($phone)){
                        $return['error'] = true;
                        $return['msg'] .= 4;
                }elseif(!is_numeric($phone)){
                        $return['error'] = true;
                        $return['msg'] .= 5;
                }elseif($checkphone){
                        $return['error'] = true;
                        $return['msg'] .= 6;  
		}elseif($area == null){
                        $return['error'] = true;
                        $return['msg'] .= 7; 						
                }else{
                //Begin form success functionality
                               
                        $additionCastumer = new castumer($nameca, $namece, $phone, $area, $deletc);
                        $ok = $additionCastumer->additionCastumer();
                             if($ok[0] == 1){
                                    $idc = $ok[1];
                                    $taded = new daten($iduserm, 1, 0, 0, 0, $idc, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                                    $taded->additionDate();
                                    $return['msg'] = 0; 

                             }else{
                                     $return['msg'] = 50; 
                             }
		}
                //Return json encoded results
                return json_encode($return);
				
		}
}	


			
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
	// allow access....
	$ajaxValidate = new ajaxValidate;
        echo $ajaxValidate->formValidate();
} else {
	echo '
	<script>            
setTimeout(function(){location.href="index.php", 5000} );           
</script>
	';
	
}

?>