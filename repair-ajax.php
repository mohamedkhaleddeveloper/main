<?php
require_once 'class.castumer.php';
class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
				$idorder = test_input(@$_POST['ido']);
                                $repair = test_input(@$_POST['repair']);
                                $odatefs = test_input(@$_POST['orderdate']);
                                $nnote =  test_input(@$_POST['note']);
                                if($repair == 1){
                                    $process = 6;
                                }elseif ($repair == 2){
                                    $process = 5;
                                }else{
                                    $process = 4;
                                }
                                
                                $ordero = ordero::retreiveAllOrder("where ido ='$idorder'");
                                $pnote = $ordero[0]['note'];
                                $note = $nnote."<br/>".$pnote;
                //Establish values that will be returned via ajax
				
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
					if ($repair == 0 Or $repair > 2){
						$return['error'] = true;
						$return['msg'] .= 1;     
                                       }elseif($odatefs == NULL){
						$return['error'] = true;
						$return['msg'] .= 2;
                                        }elseif ($repair == 2 AND $nnote == Null){
						$return['error'] = true;
						$return['msg'] .= 3;
                                       
					}else{
						
						

					//Begin form success functionality
                                       
					$ok = ordero::updateRepiarOrderById($process, $note, $odatefs, $idorder);
									
                                            if($ok == 1){
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