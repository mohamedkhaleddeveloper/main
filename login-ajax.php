<?php
require_once 'class.castumer.php';
class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $username = test_input(@$_POST['username']);
                $password = md5(@$_POST['password']);
                //Establish values that will be returned via ajax
                $check = employee::checkByNameAndPass($username, $password);
                if($check){
                    $posstion = employee::retreiveAllEmployee("WHERE `mobilem` = '$username'");
                    $premssion1 = $posstion[0]['premssionm'];
                    $name22 = $posstion[0]['namema'];
                    $name23 = $posstion[0]['nameme'];
                    $id1 = $posstion[0]['idm'];
                }
                $return = array();
                $return['msg'] = '';
                $return['user'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($username) || empty($username)){
                        $return['error'] = true;
                        $return['msg'] .= 1;	
                }elseif (!isset($password) || empty($password)){
                        $return['error'] = true;
                        $return['msg'] .= 2;
                }elseif (!$check){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif ($premssion1 > 4 Or $premssion1 < 1){
                        $return['error'] = true;
                        $return['msg'] .= 4;
                }else{
                //Begin form success functionality
                                $id5 = md5($id1);
                                $_SESSION['id'] = md5($id5);
                                $return['user'] = $name22;
                                $return['user1'] = $name23;
                                $return['msg'] = 0; 
                               	
		}
                //Return json encoded results
                return json_encode($return);
				
		}
}	

	// allow access....

$ajaxValidate = new ajaxValidate;
        echo $ajaxValidate->formValidate();
/*			
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
        	

} else {
	echo '
	<script>            
setTimeout(function(){location.href="index.php", 5000} );           
</script>
	';
	
}

 */

