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
				$ido = $_POST['ido'];
				$reson =  $_POST['reson'];
                $note =  $_POST['note'];
                //Establish values that will be returned via ajax
				
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                        if ($reson == null){
                                $return['error'] = true;
                                $return['msg'] .= 1;	
                        }else{



                        //Begin form success functionality


                                $ok = ordero::updateCancleOrderById($note, $reson, $ido);

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