<?php
require_once 'class.castumer.php';
/*
$idFactor = 3
 $ok = orderRepair::updateActiveOrderById($idFactor, $ids);
*/
		

class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                                $idu = test_input(@$_POST['idu']);
                                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                                $iduserm = $idu1[0]['idm'];
				$ido = @$_POST['ido'];
				$service =  @$_POST['service'];
                                $idservo =  test_input(@$_POST['service']);
                                $transarea = test_input(@$_POST['transarea']);
                                $md = test_input(@$_POST['md']);
                                $metter = test_input(@$_POST['metter']);
                                $kindserido = $transarea.$md.$metter;
                //Establish values that will be returned via ajax
				
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                       if($idservo == NULL){
                                $return['error'] = true;
                                $return['msg'] .= 1;
                        }elseif($idservo == 3 AND $transarea == 0){
                                $return['error'] = true;
                                $return['msg'] .= 2;
                        }elseif($idservo == 4 AND $md == NULL){
                                $return['error'] = true;
                                $return['msg'] .= 3;
                        }elseif($idservo == 6 AND $metter == NULL){
                                $return['error'] = true;
                                $return['msg'] .= 4;

                        }else{
                        //Begin form success functionality

                                $serviceorder = new serviceOrder($service, $ido, $kindserido, 0);
                                $ok = $serviceorder->additionServiceOrder();

                                if($ok){
                                    $taded = new daten($iduserm, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $ido, 0, 0, 0, 0);
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

	$ajaxValidate = new ajaxValidate;
echo $ajaxValidate->formValidate();
/*			
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

*/
?>