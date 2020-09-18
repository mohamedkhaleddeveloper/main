<?php
require_once 'class.castumer.php';
class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                                $idu = test_input(@$_POST['idu']);
                                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                                $iduserm = $idu1[0]['idm'];
				$castumerid = @$_POST['id'];
				$castumer = castumer::retreiveAllCastumer("WHERE `idc`='$castumerid'");
				$address = $castumer[0]['areac'];
                                $areaid = test_input(@$_POST['area']);
                                $phoneo = test_input(@$_POST['phoneo']);
				$deviceid =  test_input(@$_POST['device']);
				$orderdate =  test_input(@$_POST['orderdate']);
				$timeo =  test_input(@$_POST['timeo']);
                                $timing =  test_input(@$_POST['timing']);
                                $note =  test_input(@$_POST['note']);
                                $idservo =  test_input(@$_POST['service']);
                                $transarea = test_input(@$_POST['transarea']);
                                $md = test_input(@$_POST['md']);
                                $metter = test_input(@$_POST['metter']);
                                $totalmd = $transarea.$md.$metter;
                //Establish values that will be returned via ajax
				if ($areaid == null){
							$areaid = $address;
				}
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
					if ($deviceid == NULL){
						$return['error'] = true;
						$return['msg'] .= 1;
                                        }elseif($idservo == NULL){
						$return['error'] = true;
						$return['msg'] .= 2;
                                        }elseif($idservo == 3 AND $transarea == 0){
						$return['error'] = true;
						$return['msg'] .= 3;
                                        }elseif($idservo == 4 AND $md == NULL){
						$return['error'] = true;
						$return['msg'] .= 4;
                                        }elseif($idservo == 6 AND $metter == NULL){
						$return['error'] = true;
						$return['msg'] .= 5;
                                        }elseif($orderdate == NULL){
						$return['error'] = true;
						$return['msg'] .= 6;
					}elseif($timing == NULL){
						$return['error'] = true;
						$return['msg'] .= 7;
					}else{
						
						

					//Begin form success functionality
                                        $additionOrder = new ordero($castumerid, $areaid, $phoneo, $transarea, $deviceid, $orderdate, $timeo, $timing, $md, Null, $note, 0, $idservo, 0, 0, 0, 0, Null, Null, Null, 0, 0, 0, 0, 0, 0, 0);
					$ok = $additionOrder->additionOrder();
									
                                            if($ok[0] == 1){
                                                $ido = $ok[1];
                                                $serviceorder = new serviceOrder($idservo, $ido, $totalmd, 0);
                                                $serviceorder->additionServiceOrder();
                                                $taded = new daten($iduserm, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $ido, 0, 0, 0, 0);
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