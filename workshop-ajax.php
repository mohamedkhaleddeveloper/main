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
                                $tech =  test_input(@$_POST['tech']);
                                $service =  test_input(@$_POST['service']);
                                $transarea = test_input(@$_POST['transarea']);
                                $md = test_input(@$_POST['md']);
                                $metter = test_input(@$_POST['metter']);
                                $mark =  test_input(@$_POST['mark']);
                                $orderdate =  test_input(@$_POST['orderdate']);
                                $device =  test_input(@$_POST['device']);
                                $dftime =  test_input(@$_POST['dftime']);
                                $mdn =  test_input(@$_POST['mdn']);
                                $sn =  test_input(@$_POST['sn']);
                                $nnote =  test_input(@$_POST['note']);
                                $process = 4;
                                $ordero = ordero::retreiveAllOrder("where ido ='$idorder'");
                                $pnote = $ordero[0]['note'];
                                $note = $nnote.$pnote;
                                $kindserido = $transarea.$md.$metter;
                //Establish values that will be returned via ajax
				
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
					if ($tech == NULL){
						$return['error'] = true;
						$return['msg'] .= 1;
                                        }elseif ($service == NULL){
						$return['error'] = true;
						$return['msg'] .= 2;
                                         }elseif($service == 3 AND $transarea == 0){
						$return['error'] = true;
						$return['msg'] .= 3;
                                        }elseif($service == 4 AND $md == NULL){
						$return['error'] = true;
						$return['msg'] .= 4;
                                        }elseif($service == 6 AND $metter == NULL){
						$return['error'] = true;
						$return['msg'] .= 5;
                                        }elseif ($mark == NULL){
						$return['error'] = true;
						$return['msg'] .= 6;
                                        }elseif($orderdate == NULL){
						$return['error'] = true;
						$return['msg'] .= 7;
                                        }elseif($device == Null){
						$return['error'] = true;
						$return['msg'] .= 8;
                                        }elseif($dftime == 0 OR $dftime > 14){
						$return['error'] = true;
						$return['msg'] .= 9;
                                         }elseif($dftime == 0 OR $dftime > 14){
						$return['error'] = true;
						$return['msg'] .= 10;
					}else{
						
						

					//Begin form success functionality
                                       
					$ok = ordero::updateWorkShopOrderById($mdn, $sn, $note, $process, $service, $mark, $device, $dftime, $orderdate, $tech, $idorder);
									
                                            if($ok == 1){
                                                $return['msg'] = 0; 
                                                $serviceorder = new serviceOrder($service, $idorder, $kindserido, 0);
                                                $serviceorder->additionServiceOrder();
                                                $taded = new daten($iduserm, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $idorder, 0, 0, 0, 0);
                                                $taded->additionDate();
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