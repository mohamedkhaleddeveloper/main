<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idu = test_input(@$_POST['idu']);
                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                $iduserm = $idu1[0]['idm'];
                $idn = test_input(@$_POST['idn']);
                $reson = reson::retreiveAllReson("WHERE `idn` = '$idn'");
                $namenasql = @$reson[0]['namena'];
                $namenesql = @$reson[0]['namene'];
                $namena = test_input(@$_POST['namena']);
                $namene = test_input(@$_POST['namene']);
		$checkNameA = air::checkByNameA($namena);
                $checkNameE = air::checkByNameE($namene);
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $namene);
                $deletn = 0;
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($namena) || empty($namena)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif ($namena != $namenasql && $checkNameA > 0){
                        $return['error'] = true;
                        $return['msg'] .= 2;	
                }elseif (!isset($namene) || empty($namene)){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 4;	
                }elseif ($namene != $namenesql && $checkNameE > 0){
                        $return['error'] = true;
                        $return['msg'] .= 5;	
                }else{
                //Begin form success functionality
 
                        
                        $ok = reson::updateResonById($namena, $namene, $idn);
								
                        if($ok == 1){
                                    $taded = new daten($iduserm, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $idn, 0, 0, 0);
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