<?php
require_once 'class.castumer.php';
class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
				$castomerId = @$_POST['castomerId'];
                                $orderdate = test_input(@$_POST['orderdate']);
				$price =  test_input(@$_POST['price']);
				$payment1 =  test_input(@$_POST['payment']);
                                $bankdate = test_input(@$_POST['bankdate']);
                                $checkno = test_input(@$_POST['checkno']);
                                $bankname = test_input(@$_POST['bankname']);
                                $paymentarr = explode("/", $payment1);
                                $paymentNo = @$paymentarr[1]; 
                                $checkid = wayOfpayment::checkById($paymentNo);
                                    
                                        
                                
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
					if ($orderdate == null){
						$return['error'] = true;
						$return['msg'] .= 1;	
                                        }elseif($price == null){
						$return['error'] = true;
						$return['msg'] .= 2;
					}elseif($price == null OR !is_numeric($price)){
						$return['error'] = true;
						$return['msg'] .= 3;
					}elseif($paymentNo == null OR $paymentNo == 0){
						$return['error'] = true;
						$return['msg'] .= 4;
                                        }elseif(!$checkid && $paymentNo != "541"){
						$return['error'] = true;
						$return['msg'] .= 5;
                                        }elseif($paymentNo == "541" && $bankdate == null){
						$return['error'] = true;
						$return['msg'] .= 6;
                                         }elseif($paymentNo == "541" && $checkno == null){
						$return['error'] = true;
						$return['msg'] .= 7;
                                         }elseif($paymentNo == "541" && $bankname == null){
						$return['error'] = true;
						$return['msg'] .= 8;
					}else{
						
                              
                                        if ($paymentNo == 541){
                                            $totalm = $price;
                                        }else{
                                        $number = wayOfpayment::retreiveAllPayment("where `idp` = '$paymentNo'");
                                        $numberp = $number[0]['numberp'];
                                        $percent = $price*$numberp/100;
					$totalm = $price - $percent;
                                        }
                                	//Begin form success functionality
                                        $additionCredit = new credit($castomerId, $price, $orderdate, 0, $paymentNo, $totalm, $bankdate, $checkno, $bankname);
                                        $ok = $additionCredit->additionCredit();			
                                            if($ok[0] == 1){
                                                 $crinv1 = invoices::retreiveAllInvoicesOnly("AND `castumerid` = '$castomerId' AND `payment` = 5 AND `totalc` != `credit` AND `pricecr` != `pricetcr`");
                                                    $size =  sizeof($crinv1);

                                                      if($size > 0){
                                                          for($i=0; $i < $size; $i++){
                                                          $crinv = invoices::retreiveAllInvoicesOnly("AND `castumerid` = '$castomerId' AND `payment` = 5 AND `totalc` != `credit` AND `pricecr` != `pricetcr`");
                                                          $size =  sizeof($crinv);
                                                          if($size < 0){
                                                              echo "no inv";
                                                          }else{
                                                          for($i=0; $i < $size; $i++){
                                                            $idi = $crinv[$i]['idi'];
                                                            $idcr = $crinv[$i]['idcr'];
                                                            $totalc = $crinv[$i]['totalc'];
                                                            $credit = $crinv[$i]['credit'];
                                                            $pricecr = $crinv[$i]['pricecr'];
                                                            $pricetcr = $crinv[$i]['pricetcr'];
                                                            $paymentcr = $crinv[$i]['paymentcr'];
                                                                    if($pricecr > $pricetcr){ 
                                                                            if($totalc > $credit){
                                                                                $totaltotalc = $totalc-$credit;
                                                                                $totalpricecr = $pricecr - $pricetcr;
                                                                                if($totaltotalc > $totalpricecr){
                                                                                      $totalcridet = $credit + $totalpricecr;
                                                                                      $totalpricece = $pricetcr + $totalpricecr;
                                                                                      invoices::updateCreditOrderById($totalcridet, 0, $idi);
                                                                                      credit::updatePricetcrOrderById($totalpricece, $idcr);
                                                                                       $invcreditepluse = new invcredite($idi, $idcr, $totalpricecr);
                                                                                       $ok = $invcreditepluse->insertinvCredite();
                                                                                                      if($ok){

                                                                                                          break;
                                                                                                       }
                                                                                }else{
                                                                                     $totalpricetcr = $totaltotalc + $pricetcr;
                                                                                     $totalcreidetplus =  $totaltotalc + $credit;
                                                                                     invoices::updateCreditOrderById($totalcreidetplus, 0, $idi);
                                                                                     credit::updatePricetcrOrderById($totalpricetcr, $idcr);
                                                                                     $invcreditepluse = new invcredite($idi, $idcr, $totaltotalc);
                                                                                     $ok = $invcreditepluse->insertinvCredite();   
                                                                                              if($ok){

                                                                                                 break;

                                                                                              }
                                                                                  }

                                                                            }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
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