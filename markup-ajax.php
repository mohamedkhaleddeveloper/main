<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                $idu = test_input(@$_POST['idu']);
                $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                $iduserm = $idu1[0]['idm'];
                $idmark = test_input(@$_POST['idmark']);
                $mark = mark::retreiveAllMark("WHERE `idmark` = '$idmark'");
                $namemarkasql = @$mark[0]['namemarka'];
                $namemarkesql = @$mark[0]['namemarke'];
                $namemarka = test_input(@$_POST['namemarka']);
                $namemarke = test_input(@$_POST['namemarke']);
		$checkName = mark::checkByName($namemarka);
                $checkNamee = mark::checkByNamee($namemarke);
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $namemarke);
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($namemarka) || empty($namemarka)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif ($namemarka != $namemarkasql && $checkName > 0){
                        $return['error'] = true;
                        $return['msg'] .= 2;	
                }elseif (!isset($namemarke) || empty($namemarke)){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 4;
                }elseif ($namemarke != $namemarkesql && $checkNamee > 0){
                        $return['error'] = true;
                        $return['msg'] .= 5;
                }else{
                //Begin form success functionality
 
                       $ok = mark::updateMarkById($namemarka, $namemarke, $idmark);
								
                        if($ok == 1){
                                $taded = new daten($iduserm, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $idmark, 0, 0, 0, 0, 0);
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