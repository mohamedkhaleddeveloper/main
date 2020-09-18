<?php
require_once 'class.castumer.php';
class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
				$idopart = @$_POST['ido'];
                                $companyparta = test_input(@$_POST['company']);
                                $companyparte = test_input(@$_POST['companye']);
				$billnumberpart =  test_input(@$_POST['bill']);
				$datebillpart =  test_input(@$_POST['billdate']);
				$namepcsparta =  test_input(@$_POST['namepart']);
                                $namepcsparte =  test_input(@$_POST['nameparte']);
                                $noparte =  test_input(@$_POST['noparte']);
				$pricepart =  test_input(@$_POST['price']);
                                $discountpart =  test_input(@$_POST['discount']);
				$notspart =  test_input(@$_POST['note']);
                                $deletepart = 0;
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
					if ($companyparta == null){
						$return['error'] = true;
						$return['msg'] .= 1;	
					}elseif($companyparte == null){
						$return['error'] = true;
						$return['msg'] .= 2;
                                        }elseif($billnumberpart == null){
						$return['error'] = true;
						$return['msg'] .= 3;
					}elseif($datebillpart == null){
						$return['error'] = true;
						$return['msg'] .= 4;
					}elseif($namepcsparta == null){
						$return['error'] = true;
						$return['msg'] .= 5;
                                        }elseif($namepcsparte == null){
						$return['error'] = true;
						$return['msg'] .= 6;
					}elseif($pricepart == null  OR !is_numeric($pricepart)){
						$return['error'] = true;
						$return['msg'] .= 7;
                                        }elseif($discountpart == null OR !is_numeric($discountpart)){
						$return['error'] = true;
						$return['msg'] .= 8;
					}else{
						
                                       
                                        $totalpart = $pricepart - $discountpart;
                                        
                                	//Begin form success functionality
                                        			
                                           
                                                  
                                                   
                                                 $part  = new part($companyparta, $companyparte, $billnumberpart, $datebillpart, $namepcsparta,
                                                         $namepcsparte, $noparte, $pricepart, $discountpart, $totalpart, $notspart, $idopart, $deletepart);
                                                 $ok = $part->additionPart();
                                                 if($ok){
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