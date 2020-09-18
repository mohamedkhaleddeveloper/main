<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idu = test_input(@$_POST['idu']);
                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                $iduserm = $idu1[0]['idm'];
                $idarea = test_input(@$_POST['idarea']);
                $area = area::retreiveAllArea("WHERE `ida` = '$idarea'");
                $nameaasql = @$area[0]['nameaa'];
                $nameaesql = @$area[0]['nameae'];
                $nameaa = test_input(@$_POST['nameaa']);
                $nameae = test_input(@$_POST['nameae']);
                $groupa = test_input(@$_POST['group']);
		$checkName =  area::checkByName($nameaa);
                $checkNamee =  area::checkByNamee($nameae);
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $nameae);
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($nameaa) || empty($nameaa)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif ($nameaa != $nameaasql && $checkName > 0){
                        $return['error'] = true;
                        $return['msg'] .= 2;	
                }elseif (!isset($nameae) || empty($nameae)){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 4;
                }elseif ($nameae != $nameaesql && $checkNamee > 0){
                        $return['error'] = true;
                        $return['msg'] .= 5;
                }elseif ($groupa == NULL){
                        $return['error'] = true;
                        $return['msg'] .= 6;
                }else{
                //Begin form success functionality
 
                       $ok = area::updateAreaById($nameaa, $nameae, $groupa, $idarea);					
                        if($ok == 1){  
                                $taded = new daten($iduserm, 2, 0, $idarea, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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