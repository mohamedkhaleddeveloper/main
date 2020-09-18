<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
				$id = @$_POST['id'];
                $factor = test_input(@$_POST['factor']);
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if ($factor == null){
                        $return['error'] = true;
                        $return['msg'] .= 1;  						
                }else{
                //Begin form success functionality

                      // $ok = orderRepair::updateActiveOrderById($factor, $id);
								
							//	if($ok){
									$return['msg'] = 0; 
								//}else{
								//	$return['msg'] = 50; 
								//}
                                   				
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