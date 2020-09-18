<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idu = test_input(@$_POST['idu']);
                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                $iduserm = $idu1[0]['idm'];
                $nameaa = test_input(@$_POST['nameaa']);
                $nameae = test_input(@$_POST['nameae']);
                $groupa = test_input(@$_POST['groupa']);
		$checkName =  area::checkByName($nameaa);
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $nameae);
                $deleta = 0;
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($nameaa) || empty($nameaa)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif ($checkName){
                        $return['error'] = true;
                        $return['msg'] .= 2;	
                }elseif (!isset($nameae) || empty($nameae)){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 4;
                }elseif ($groupa == NULL){
                        $return['error'] = true;
                        $return['msg'] .= 5;	
                }else{
                //Begin form success functionality
 
                        $additionArea = new area($nameaa, $nameae, $groupa, $deleta);
                        $ok = $additionArea->additionArea();
								
                        if($ok[0] == 1){
                                $ida = $ok[1];
                                $taded = new daten($iduserm, 1, 0, $ida, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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