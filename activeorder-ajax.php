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
                                $idu = test_input(@$_POST['idu']);
                                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                                $iduserm = $idu1[0]['idm'];
				$ido = @$_POST['ido'];
				$idtech =  @$_POST['idtech'];
                                $process = 1;
                //Establish values that will be returned via ajax
				
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                        if ($idtech == null){
                                $return['error'] = true;
                                $return['msg'] .= 1;	
                        }else{



                        //Begin form success functionality


                                $ok = ordero::updateActiveOrderById($process, $idtech, $ido);

                                if($ok){
                                    $taded = new daten($iduserm, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $ido, 0, 0, 0, 0);
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