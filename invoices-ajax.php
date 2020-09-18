<?php
require_once 'class.castumer.php';
/*
				$castomerId = @$_POST['id'];
				$castumer = castumerReapair::retreiveAllCastumer("WHERE `id`='$castomerId'");
				$address = $castumer[0]['address'];
                $area = test_input(@$_POST['area']);
				$device =  test_input(@$_POST['device']);
				$day =  test_input(@$_POST['day']);
				$dayn =  test_input(@$_POST['dayn']);
				$month =  test_input(@$_POST['month']);
				$year =  test_input(@$_POST['year']);
				$timen =  test_input(@$_POST['timen']);
				$timing =  test_input(@$_POST['timing']);
				$daten = $year."-".$month."-".$dayn;
				
				echo $castomerId."<br/>";
				echo $address."<br/>";
				echo $area."<br/>";
				echo $device."<br/>";
				echo $day."<br/>";
				echo $dayn."<br/>";
				echo $month."<br/>";
				echo $timen."<br/>";
				echo $timing."<br/>";
						$additionOrder = new orderRepair ($castomerId, $area, $device, $day, $daten, $timen, $timing, 0);
							$ok = $additionOrder->additionOrder();
				if ($ok){
					echo "yes";
				}else{
					echo "no";
				}							
		*/
class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                                $idu = test_input(@$_POST['idu']);
                                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                                $iduserm = $idu1[0]['idm'];
				$ido = @$_POST['ido'];
                                $process = @$_POST['pro'];
                                if($process <= 3){
                                    $process1 = 9;
                                }elseif($process > 3){
                                    $process1 = 10;
                                }else{
                                    $process1 = $process;
                                }
                                $bill = test_input(@$_POST['bill']);
				$price =  test_input(@$_POST['price']);
                                $orderdate =  test_input(@$_POST['orderdate']);
				$discount =  test_input(@$_POST['discount']);
				$expenses =  0;
				$payment1 =  test_input(@$_POST['payment']);
                                $paymentarr = explode("/", $payment1);
                                $paymentNo = @$paymentarr[1]; 
                                $checkid = wayOfpayment::checkById($paymentNo);
				$note =  test_input(@$_POST['note']);
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
					if ($bill == null){
						$return['error'] = true;
						$return['msg'] .= 1;	
                                        }elseif($orderdate == null){
						$return['error'] = true;
						$return['msg'] .= 2;
					}elseif($price == null OR !is_numeric($price)){
						$return['error'] = true;
						$return['msg'] .= 3;
					}elseif($discount == null OR !is_numeric($discount)){
						$return['error'] = true;
						$return['msg'] .= 4;
					}elseif($paymentNo == null OR $paymentNo ==0){
						$return['error'] = true;
						$return['msg'] .= 5;
                                        }elseif(!$checkid){
						$return['error'] = true;
						$return['msg'] .= 6;
					}else{
						
                                       
                                        $number = wayOfpayment::retreiveAllPayment("where `idp` = '$paymentNo'");
                                        $numberp = $number[0]['numberp'];
                                        $sub = $discount + $expenses;
                                        $totalc = $price - $sub;
                                        $percent = $totalc*$numberp/100;
					$totalm = $totalc - $percent;	
                                        if ($paymentNo == 5){
                                            $credit = 0;
                                        }else{
                                            $credit = $totalc;
                                        }
                                        $creditd = 0;
                                       
                                	//Begin form success functionality
                                        $additionInvoices = new invoices ($bill, $orderdate, $price, $discount, $expenses, $totalc, $percent, $totalm, $paymentNo, $note, $ido, $credit, $creditd);
                                        $ok = $additionInvoices->additionInvoices();			
                                            if($ok[0] == 1){
                                                    $idi = $ok[1];
                                                    $taded = new daten($iduserm, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, $idi, 0, 0, 0, 0, 0, 0);
                                                    $taded->additionDate();
                                                    ordero::updatePrepareOrderById($process1, $ido);
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