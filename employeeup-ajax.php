<?php
require_once 'class.castumer.php';


class ajaxValidate {
        function formValidate() {
                //Put form elements into post variables (this is where you would sanitize your data)
                // $ = test_input(@$_POST['']);
                  $idu = test_input(@$_POST['idu']);
                  $idu1 = employee::retreiveAllEmployee("WHERE MD5(MD5(`idm`)) = '$idu'");
                  $iduserm = $idu1[0]['idm'];
                  $idm = test_input(@$_POST['idm']);
                  $employee = employee::retreiveAllEmployee("WHERE `idm` = '$idm'");
                  $nobordersql = @$employee[0]['noborder'];
                  $nopassportsql = @$employee[0]['nopassport'];
                  $noiqamasql = @$employee[0]['noiqama'];
                  $fnamema  = test_input(@$_POST['fnamema']);
                  $fnameme  = test_input(@$_POST['fnameme']);
                  $namema  = test_input(@$_POST['namema']);
                  $nameme  = test_input(@$_POST['nameme']);
                  $mobilem  = test_input(@$_POST['mobilem']);
                  $countrym  = test_input(@$_POST['countrym']);
                  $carerm  = test_input(@$_POST['carerm']);
                  $password  = md5(@$_POST['password']);
                  $noborder  = test_input(@$_POST['noborder']);
                  $noiqama  = test_input(@$_POST['noiqama']);
                  $nopassport  = test_input(@$_POST['nopassport']);
                  $airportm = test_input(@$_POST['airportm']);
                  $adressm = test_input(@$_POST['adressm']);
                  $telem = test_input(@$_POST['telem']);
                  $entermsa = test_input(@$_POST['entermsa']);
                  $worktime = test_input(@$_POST['worktime']);
                  $exiqamam = test_input(@$_POST['exiqamam']);
                  $exinsurancem = test_input(@$_POST['exinsurancem']);
                  $exlincm = test_input(@$_POST['exlincm']);
                  $expassportm = test_input(@$_POST['expassportm']);
                  $premssionm = test_input(@$_POST['premssionm']);
                  $statusm = test_input(@$_POST['statusm']);
                  $checkNoborder = employee::checkByNoborder($noborder);
                  $checkNoiqama = employee::checkByNoiqama($noiqama);
                  $checkNopassport = employee::checkByNopassport($nopassport);
                  $deletm = 0;
                  if($password == Null){
                      $password = md5('123456');
                  }
                $pregName  = preg_match('/^[a-z0-9 .\-]+$/i', $fnameme);  
                $pregName1  = preg_match('/^[a-z0-9 .\-]+$/i', $nameme);
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
                //Begin form validation functionality
                if (!isset($fnamema) || empty($fnamema)){
                        $return['error'] = true;
                        $return['msg'] .= 1;
                }elseif (!isset($fnameme) || empty($fnameme)){
                        $return['error'] = true;
                        $return['msg'] .= 2;
                }elseif ($pregName == 0){
                        $return['error'] = true;
                        $return['msg'] .= 3;
                }elseif (!isset($namema) || empty($namema)){
                        $return['error'] = true;
                        $return['msg'] .= 4;
                }elseif (!isset($nameme) || empty($nameme)){
                        $return['error'] = true;
                        $return['msg'] .= 5;
                }elseif ($pregName1 == 0){
                        $return['error'] = true;
                        $return['msg'] .= 6;  
                }elseif ($carerm == NULL){
                        $return['error'] = true;
                        $return['msg'] .= 7;
                }elseif ($premssionm == NULL){
                        $return['error'] = true;
                        $return['msg'] .= 8;
                }elseif ($noborder == NULL && $noiqama== NULL && $nopassport==NUll){
                        $return['error'] = true;
                        $return['msg'] .= 9;
                }elseif ($nobordersql != NULL && $nobordersql != $noborder && $checkNoborder > 0){
                        $return['error'] = true;
                        $return['msg'] .= 10;
                }elseif ($noiqamasql != NULL && $noiqamasql != $noiqama && $checkNoiqama > 0){
                        $return['error'] = true;
                        $return['msg'] .= 11;
                }elseif ($nopassportsql != NULL && $nopassportsql != $nopassport && $checkNopassport > 0){
                        $return['error'] = true;
                        $return['msg'] .= 12;
                }elseif ($statusm == NULL){
                        $return['error'] = true;
                        $return['msg'] .= 13;
                }elseif ($worktime == NULL){
                        $return['error'] = true;
                        $return['msg'] .= 14;
                }else{
                //Begin form success functionality
                      
                        $ok = employee::updateEmployeeById($fnamema, $fnameme, $namema, $nameme, $mobilem, $countrym,
                                $carerm, $noborder, $noiqama, $nopassport, $airportm, $adressm, $telem, $entermsa, $worktime, $exiqamam,
                                $exinsurancem, $exlincm, $expassportm, $premssionm, $statusm, $deletm, $idm);
                        if($ok == 1){
                        $taded = new daten($iduserm, 2, 0, 0, 0, 0, 0, 0, 0, $idm, 0, 0, 0, 0, 0, 0, 0, 0);
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