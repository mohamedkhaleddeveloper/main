<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idm = test_input(@$_POST['idm']);
                $ops = test_input(@$_POST['ops']);
                $opsmd = md5($ops);
                $nps = test_input(@$_POST['nps']);
                $npsmd = md5($nps);
                $npsr = test_input(@$_POST['npsr']);
                $npsrmd = md5($npsr);
		$employee = employee::retreiveAllEmployee("WHERE md5(md5(idm)) = '$idm'");
                $password = $employee[0]['password'];
                $deletair = 0;
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($ops) || empty($ops)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif ($opsmd != $password){
                        $return['error'] = true;
                        $return['msg'] .= 2;	
                }elseif (!isset($nps) || empty($nps)){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif (!isset($npsr) || empty($npsr)){
                        $return['error'] = true;
                        $return['msg'] .= 4;
                }elseif ($npsmd != $npsrmd){
                        $return['error'] = true;
                        $return['msg'] .= 5;
                }else{
                //Begin form success functionality
 
                        $updatePassword = employee::updatePasswordById($npsmd, $idm);
								
                        if($updatePassword){     
                                $return['msg'] = 0; 
                        }else{
                                $return['msg'] = 50; 
                        }
                                   				
				}
                //Return json encoded results
                return json_encode($return);
				
		}
}	


			
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

?>