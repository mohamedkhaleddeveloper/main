<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idu = test_input(@$_POST['idu']);
                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                $iduserm = $idu1[0]['idm'];
                $idserv = test_input(@$_POST['idserv']);
                $serivice = service::retreiveAllService("WHERE `idserv` = '$idserv'");
                $nserviceasql = @$serivice[0]['nservicea'];
                $nserviceesql = @$serivice[0]['nservicee'];
                $coastsql = @$serivice[0]['coast'];
                $nservicea = test_input(@$_POST['nservicea']);
                $nservicee = test_input(@$_POST['nservicee']);
                $coast = test_input(@$_POST['coastserv']);
		$checkName = service::checkByName($nservicea);
                $checkNamee = service::checkByName($nservicee);
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $nservicee);
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($nservicea) || empty($nservicea)){
                        $return['error'] = true;
                        $return['msg'] .= 1;	
                }elseif ($nservicea != $nserviceasql && $checkName > 0){
                        $return['error'] = true;
                        $return['msg'] .= 2;
                }elseif (!isset($nservicee) || empty($nservicee)){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 4;
                }elseif ($nservicee != $nserviceesql && $checkNamee > 0){
                        $return['error'] = true;
                        $return['msg'] .= 5;
                }elseif (!isset($coast) || empty($coast)){
                        $return['error'] = true;
                        $return['msg'] .= 6;
                }elseif(!is_numeric($coast)){
                        $return['error'] = true;
                        $return['msg'] .= 7;
                }else{
                //Begin form success functionality
 
                     
			$ok = service::updateServiceById($nservicea, $nservicee, $coast, $idserv);					
                        if($ok == 1){
                                $idserv = $ok[1];
                                $taded = new daten($iduserm, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $idserv, 0, 0);
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


			
if(isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ))
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