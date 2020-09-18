<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idu = test_input(@$_POST['idu']);
                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                $iduserm = $idu1[0]['idm'];
                $nameya = test_input(@$_POST['nameya']);
                $nameye = test_input(@$_POST['nameye']);
		$checkNameA = country::checkByNameA($nameya);
                $checkNameE = country::checkByNameE($nameye);
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $nameye);
                $delety = 0;
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($nameya) || empty($nameya)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif ($checkNameA){
                        $return['error'] = true;
                        $return['msg'] .= 2;	
                }elseif (!isset($nameye) || empty($nameye)){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 4;	
                }elseif ($checkNameE){
                        $return['error'] = true;
                        $return['msg'] .= 5;	
                }else{
                //Begin form success functionality
 
                        $additionCountry = new country($nameya, $nameye, $delety);
                        $ok = $additionCountry->additionCountry();
								
                        if($ok[0] == 1){
                                    $idy = $ok[1];
                                    $taded = new daten($iduserm, 1, 0, 0, 0, 0, $idy, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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