<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idu = test_input(@$_POST['idu']);
                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                $iduserm = $idu1[0]['idm'];
                $idr = test_input(@$_POST['idr']);
                $carer = carer::retreiveAllCarer("WHERE `idr` = '$idr'");
                $namerasql = @$carer[0]['namera'];
                $nameresql = @$carer[0]['namere'];
                $namera = test_input(@$_POST['namera']);
                $namere = test_input(@$_POST['namere']);
		$checkName = carer::checkByName($namera);
                $checkNamee = carer::checkByNamee($namere);
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $namere);
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($namera) || empty($namera)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif ($namera != $namerasql && $checkName > 0){
                        $return['error'] = true;
                        $return['msg'] .= 2;		
                }elseif (!isset($namere) || empty($namere)){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 4;	
                }elseif ($namere != $nameresql && $checkNamee > 0){
                        $return['error'] = true;
                        $return['msg'] .= 2;
                }else{
                //Begin form success functionality
 
                        $ok = carer::updateCarerById($namera, $namere, $idr);
								
                        if($ok == 1){
                                $taded = new daten($iduserm, 2, 0, 0, $idr, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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