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
                                $emplyee = test_input(@$_POST['emplyee']);
                                $check = employee::checkByIdNoEncreption($emplyee);
				$billex =  test_input(@$_POST['billex']);
                                $orderdate =  test_input(@$_POST['orderdate']);
				$price =  test_input(@$_POST['price']);
				$discount =  test_input(@$_POST['discount']);
                                $total =  $price - $discount;
				$note =  test_input(@$_POST['note']);
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
					if ($emplyee == 0 OR $check == 0){
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
					}else{
						
                                       
                                	//Begin form success functionality
                                        $additionExpenses = new expenses($emplyee, $billex, $orderdate, $price, $discount, $total, $note, 0);
                                        $ok = $additionExpenses->additionExpenses();			
                                            if($ok[0] == 1){
                                                    //$idex = $ok[1];
                                                    //$taded = new daten(1, 0, 0, 0, 0, 0, 0, 0, 0, $idi, 0, 0, 0, 0, 0, 0);
                                                   // $taded->additionDate();
                                                    
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