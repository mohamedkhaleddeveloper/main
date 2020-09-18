<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idu = test_input(@$_POST['idu']);
                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                $iduserm = $idu1[0]['idm'];
                $namepa = test_input(@$_POST['namepa']);
                $namepe = test_input(@$_POST['namepe']);
                $numberp = test_input(@$_POST['numberp']);
		$checkNameA = wayOfpayment::checkByNameA($namepa);
                $checkNameE = wayOfpayment::checkByNameE($namepa);
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $namepe);
                $deletp = 0;
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($namepa) || empty($namepa)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif ($checkNameA){
                        $return['error'] = true;
                        $return['msg'] .= 2;	
                }elseif (!isset($namepe) || empty($namepe)){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 4;	
                }elseif ($checkNameE){
                        $return['error'] = true;
                        $return['msg'] .= 5;
               }elseif (!is_numeric($numberp)){
                        $return['error'] = true;
                        $return['msg'] .= 6;
                }else{
                //Begin form success functionality
 
                        $additionpayment = new wayOfpayment($namepa, $namepe, $numberp, $deletp);
                        $ok = $additionpayment->additionPayment();				
                        if($ok[0] == 1){
                                    $idp = $ok[1];
                                    $taded = new daten($iduserm, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $idp, 0);
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


			
if( isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))
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