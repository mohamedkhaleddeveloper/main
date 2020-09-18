<?php
require_once 'class.castumer.php';
class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                                $idu = test_input(@$_POST['idu']);
                                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                                $iduserm = $idu1[0]['idm'];
				$idorder = test_input(@$_POST['ido']);
                                $tech = test_input(@$_POST['idtech']);
                                $odatedp = test_input(@$_POST['orderdate']);
                                $timeodp = test_input(@$_POST['timeodp']);
                                $timingdp = test_input(@$_POST['timingdp']);
                                $nnote =  test_input(@$_POST['note']);
                                $process = 7;
                                $ordero = ordero::retreiveAllOrder("where ido ='$idorder'");
                                $pnote = $ordero[0]['note'];
                                $note = $nnote."<br/>".$pnote;
                //Establish values that will be returned via ajax
				
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
					if ($tech == 0){
						$return['error'] = true;
						$return['msg'] .= 1;     
                                       }elseif($odatedp == NULL){
						$return['error'] = true;
						$return['msg'] .= 2;
                                       }elseif($timingdp == NULL){
						$return['error'] = true;
						$return['msg'] .= 3;
                                       
					}else{
						
						

					//Begin form success functionality
                                       
					$ok = ordero::updateDeliveryOrderById($process, $note, $odatedp, $timingdp, $timeodp, $tech, $idorder);
									
                                            if($ok == 1){
                                                $taded = new daten($iduserm, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $idorder, 0, 0, 0, 0);
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