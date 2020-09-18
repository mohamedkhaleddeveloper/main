<?php /* Smarty version 3.1.24, created on 2017-07-19 05:42:50
         compiled from "./templates/admin/en/orders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:214573804596ef15ad3feb7_60388527%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '995ffa8a18d5690cef901ed9b98f5d8b7d70ce6a' => 
    array (
      0 => './templates/admin/en/orders.tpl',
      1 => 1500442970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214573804596ef15ad3feb7_60388527',
  'variables' => 
  array (
    'action' => 0,
    'dayar1' => 0,
    'orderDate' => 0,
    'orderNowCount' => 0,
    'orderNowCountA' => 0,
    'orderNowAm' => 0,
    'k' => 0,
    'orderNowAm1' => 0,
    'area' => 0,
    'area1' => 0,
    'orderNowdDlAm' => 0,
    'orderNowDl1' => 0,
    'factor' => 0,
    'factor1' => 0,
    'orderdate22' => 0,
    'orderNowCountP' => 0,
    'orderNowPm' => 0,
    'orderNowPm1' => 0,
    'orderNowdDlPm' => 0,
    'orderNowdDlPm1' => 0,
    'dayen1' => 0,
    'orderactive' => 0,
    'orderNowCountAc' => 0,
    'orderNow' => 0,
    'resultEmployeeActive' => 0,
    'resultEmployeeActive1' => 0,
    'idm' => 0,
    'employeenamee' => 0,
    'actm' => 0,
    'ordershowAm' => 0,
    'ordershowAm1' => 0,
    'service' => 0,
    'service1' => 0,
    'iduser' => 0,
    'ordershowAmDl' => 0,
    'ordershowAmDl1' => 0,
    'ordershowPmDl1' => 0,
    'orderNowCountPc' => 0,
    'ordershowPm' => 0,
    'ordershowPm1' => 0,
    'ordershowPmDl' => 0,
    'dayen' => 0,
    'todayf' => 0,
    'resultEmployeeRun' => 0,
    'resultEmployeeRun1' => 0,
    'ordershowRun' => 0,
    'ordershowRun1' => 0,
    'now' => 0,
    'mark' => 0,
    'mark1' => 0,
    'day' => 0,
    'orderunactiveCount' => 0,
    'orderunactive' => 0,
    'orderunactive1' => 0,
    'orderpenCount' => 0,
    'orderpen' => 0,
    'orderpen1' => 0,
    'ordercancleCount' => 0,
    'ordercancle' => 0,
    'ordercancle1' => 0,
    'employee' => 0,
    'employee1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_596ef15b1e3122_80382936',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596ef15b1e3122_80382936')) {
function content_596ef15b1e3122_80382936 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/alsubtain/public_html/main/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '214573804596ef15ad3feb7_60388527';
echo $_smarty_tpl->getSubTemplate ("admin/en/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/en/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">

            <div class="container-fluid">
                                 <!------------------------------------------------- Order Date ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderdate') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : <?php echo $_smarty_tpl->tpl_vars['dayar1']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : <?php echo $_smarty_tpl->tpl_vars['orderDate']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-adjust"></i> Operations Day
                            </li>
                          
                             <li class="active">
                                <i class="fa fa-fw fa-newspaper-o"></i>  Operations Count  :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     <?php if ($_smarty_tpl->tpl_vars['orderNowCountA']->value == '0') {?> 
                                            <h1 class="text-center">No Operations This Morning</h1> 
                                      <?php }?>
                                         
                                                                                      
                                                 
                                   
                                <?php if ($_smarty_tpl->tpl_vars['orderNowAm']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="11"><strong>Morning</strong></td></tr>
                                    <tr class="active text-center"><td colspan="11"><strong>New</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Operations No</strong></td>
                                        <td><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="2"><strong> Operations </strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['orderNowAm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderNowAm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderNowAm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderNowAm1']->value) {
$_smarty_tpl->tpl_vars['orderNowAm1']->_loop = true;
$foreach_orderNowAm1_Sav = $_smarty_tpl->tpl_vars['orderNowAm1'];
?>
                                        <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['ido'];?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['timeo'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderNowAm1']->value['timing'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['nameve'];?>
</td>
                                               
                                                <td>
                                                   
                                                   <?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['nservicee'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['orderNowAm1']->value['idserv'] == 3) {?> to 
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['area1']->value['ida'] == $_smarty_tpl->tpl_vars['orderNowAm1']->value['areatransid']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['area1']->value['nameae'];?>

                                                                <?php }?>
                                                         <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowAm1']->value['idserv'] == 4) {?> M.D: <?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['mdn'];?>
 <?php }?>
                                                    
                                                </td>
                                                   
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['nameae'];?>
</td>
                                                <td><a href="addition.php?lang=en&act=activeorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['idc'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderDate']->value;?>
"><button class="btn btn-sm btn-primary" type="button">Active </button></a></td> 
                                                <td><a href="addition.php?lang=en&act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button"> Cancel</button></a></td>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderNowAm1'] = $foreach_orderNowAm1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                          
                            <?php if ($_smarty_tpl->tpl_vars['orderNowdDlAm']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>Morning</strong></td></tr>
                                    <tr class="active text-center"><td colspan="13"><strong>  Delivery & Install</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Operations No</strong></td>
                                        <td><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                         <td><strong>Tech Name</strong></td>
                                        <td colspan="3"><strong> Operations</strong></td>
                                       
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
$_from = $_smarty_tpl->tpl_vars['orderNowdDlAm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderNowDl1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderNowDl1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderNowDl1']->value) {
$_smarty_tpl->tpl_vars['orderNowDl1']->_loop = true;
$foreach_orderNowDl1_Sav = $_smarty_tpl->tpl_vars['orderNowDl1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['ido'];?>
</td>
                                                 <td> <?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['timodp'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['timingdp'] == 'am') {?> صباحا<?php } else { ?>مساءا <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['nameva'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['nservicee'];?>
</td>
                                                <td><?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['poseplt'] == "full") {?>Full<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['poseplt'] == "indoor") {?>In Door <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['poseplt'] == "outdoor") {?>Out Door <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['poseplt'] == "part") {?>Part<?php }?>
                                                
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['nameae'];?>
</td>
                                                <td><?php
$_from = $_smarty_tpl->tpl_vars['factor']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['factor1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['factor1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['factor1']->value) {
$_smarty_tpl->tpl_vars['factor1']->_loop = true;
$foreach_factor1_Sav = $_smarty_tpl->tpl_vars['factor1'];
?>
                                                         <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['employeeiddp'] == $_smarty_tpl->tpl_vars['factor1']->value['idm']) {?>
                                                             <?php echo $_smarty_tpl->tpl_vars['factor1']->value['nameme'];?>
 
                                                         <?php }?>
                                                         
                                                <?php
$_smarty_tpl->tpl_vars['factor1'] = $foreach_factor1_Sav;
}
?>
                                                   </td>
                                                <?php if ($_smarty_tpl->tpl_vars['orderNowDl1']->value['process'] == 9) {?>
                                                     <td colspan="3"><button class="btn btn-sm btn-success" type="button"> Done   </td>
                                                <?php } else { ?>
                                                <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['ido'];?>
"><button class="btn btn-sm btn-primary" type="button"><i class="fa fa-fw fa-pencil"></i></button></a></td>
                                                 <td> <form action="" method="POST">
                                                        <input type="hidden" name="idorder" value="<?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['ido'];?>
" />
                                                        <input type='hidden' name='orderdate' value='<?php echo $_smarty_tpl->tpl_vars['orderdate22']->value;?>
' />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="confirmation">
                                                            </form> </td>
                                                             <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowDl1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">Cancel </button></a></td>
                                                            <?php }?>
                                               
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderNowDl1'] = $foreach_orderNowDl1_Sav;
}
?>
                                </tbody>
                            </table>
                                 <hr/><hr/><hr/>
			  <?php }?>
                               
                                
                                 <?php if ($_smarty_tpl->tpl_vars['orderNowCountP']->value == '0') {?> 
                                            <h1 class="text-center">No Operations This Afternon</h1> 
                                       <?php }?>
                                         
                           
                                <?php if ($_smarty_tpl->tpl_vars['orderNowPm']->value == null) {?>
                                        
                                <?php } else { ?>
                                                       <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="11"><strong>Afternoon</strong></td></tr>
                                    <tr class="active text-center"><td colspan="11"><strong>New</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Operations No</strong></td>
                                        <td><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="2"><strong> Operations</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['orderNowPm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderNowPm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderNowPm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderNowPm1']->value) {
$_smarty_tpl->tpl_vars['orderNowPm1']->_loop = true;
$foreach_orderNowPm1_Sav = $_smarty_tpl->tpl_vars['orderNowPm1'];
?>
                                        <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['ido'];?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['timeo'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderNowPm1']->value['timing'] == 'am') {?> morning<?php } else { ?>Afternoon <?php }?>

                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowAm1']->value['nameve'];?>
</td>
                                                <td>
                                                   
                                                   <?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['nservicee'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['orderNowPm1']->value['idserv'] == 3) {?> to 
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['area1']->value['ida'] == $_smarty_tpl->tpl_vars['orderNowPm1']->value['areatransid']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['area1']->value['nameae'];?>

                                                                <?php }?>
                                                         <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowPm1']->value['idserv'] == 4) {?> M.D: <?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['mdn'];?>
 <?php }?>
                                                    
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['nameae'];?>
</td>
                                                <td><a href="addition.php?act=activeorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['idc'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderDate']->value;?>
"><button class="btn btn-sm btn-primary" type="button">Active </button></a></td>
                                                       
                                                <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowPm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">Cancel </button></a></td>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderNowPm1'] = $foreach_orderNowPm1_Sav;
}
?>
                                </tbody>
                            </table>
                                        
			  </div>
				
                        <?php }?>
                        
                        
                        
                             <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>AfterNoon</strong></td></tr>
                                    <tr class="active text-center"><td colspan="13"><strong> Delivery & Install </strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong>Operations No</strong></td>
                                        <td><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                         <td><strong>Tech Name</strong></td>
                                        <td colspan="3"><strong> Operations</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
$_from = $_smarty_tpl->tpl_vars['orderNowdDlPm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderNowdDlPm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderNowdDlPm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value) {
$_smarty_tpl->tpl_vars['orderNowdDlPm1']->_loop = true;
$foreach_orderNowdDlPm1_Sav = $_smarty_tpl->tpl_vars['orderNowdDlPm1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['ido'];?>
</td>
                                                 <td> <?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['timeo'];?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['timing'] == 'am') {?> Morning<?php } else { ?>Afternoon <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['nameve'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['nservicee'];?>
</td>
                                                <td><?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['poseplt'] == "fill") {?>Full<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['poseplt'] == "indoor") {?>Indoor<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['poseplt'] == "outdoor") {?>Outdoor <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['poseplt'] == "part") {?>pART<?php }?>
                                                
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['nameae'];?>
</td>
                                                <td><?php
$_from = $_smarty_tpl->tpl_vars['factor']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['factor1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['factor1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['factor1']->value) {
$_smarty_tpl->tpl_vars['factor1']->_loop = true;
$foreach_factor1_Sav = $_smarty_tpl->tpl_vars['factor1'];
?>
                                                         <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['employeeiddp'] == $_smarty_tpl->tpl_vars['factor1']->value['idm']) {?>
                                                             <?php echo $_smarty_tpl->tpl_vars['factor1']->value['nameme'];?>
 
                                                         <?php }?>
                                                         
                                                <?php
$_smarty_tpl->tpl_vars['factor1'] = $foreach_factor1_Sav;
}
?>
                                                   </td>
                                                <?php if ($_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['process'] == 9) {?>
                                                     <td colspan="3"><button class="btn btn-sm btn-success" type="button">Done</td>
                                                <?php } else { ?>
                                                <td><a href="addition.php?act=delivery&id=<?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['ido'];?>
"><button class="btn btn-sm btn-primary" type="button"><i class="fa fa-fw fa-pencil"></i></button></a></td>
                                                 <td> <form action="" method="POST">
                                                        <input type="hidden" name="idorder" value="<?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['ido'];?>
" />
                                                        <input type='hidden' name='orderdate' value='<?php echo $_smarty_tpl->tpl_vars['orderdate22']->value;?>
' />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="confirmation">
                                                            </form> </td>
                                                             <td><a href="addition.php?act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['orderNowdDlPm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button"> Cancel</button></a></td>
                                                            <?php }?>
                                               
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderNowdDlPm1'] = $foreach_orderNowdDlPm1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                <?php }?>
		<!------------------------------------------------- /Order Date ------------------------------------------------------>
			
		<!------------------------------------------------- Order Active ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderactive') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i> Active operations 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : <?php echo $_smarty_tpl->tpl_vars['dayen1']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : <?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Number of active operations:  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
				<!-- Order Now -->
				 <div class="table-responsive">
                                     <?php if ($_smarty_tpl->tpl_vars['orderNowCount']->value == '0') {?> 
                                            <h1 class="text-center"> No operations have been activated  </h1> 
                                     <?php } else { ?>
                                         
                                              <?php if ($_smarty_tpl->tpl_vars['orderNowCountAc']->value < '1') {?>
                                                       <h1 class="text-center">  It is not to have any operations </h1> 
                                              <?php } elseif ($_smarty_tpl->tpl_vars['orderNowCountAc']->value > '2') {?>
                                                          <h1 class="text-center"> It was conducted  <?php echo $_smarty_tpl->tpl_vars['orderNowCountAc']->value;?>
 operations </h1> 
                                              <?php } else { ?>
                                                    <h1 class="text-center">It was conducted <?php echo $_smarty_tpl->tpl_vars['orderNowCountAc']->value;?>
  process </h1> 
                                                 <?php }?>
                                                                                                 
                                                 
                                     <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['orderNow']->value == null) {?>
                                      
                                <?php } else { ?>
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong> Technical Name </strong></td>
                                         <td><strong>  morning  New Operations</strong></td>
                                         <td><strong>  morning  Install & Delivery Operations</strong></td>
                                          <td><strong> Afternon New Operations</strong></td>
                                           <td><strong>  Afternon  Install & Delivery Operations</strong></td>
                                          <td><strong> Operations </strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    <?php
$_from = $_smarty_tpl->tpl_vars['resultEmployeeActive']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['resultEmployeeActive1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['resultEmployeeActive1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value) {
$_smarty_tpl->tpl_vars['resultEmployeeActive1']->_loop = true;
$foreach_resultEmployeeActive1_Sav = $_smarty_tpl->tpl_vars['resultEmployeeActive1'];
?>
                                        <tr>   
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[2];?>
  </td>
                                                <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[3] == 0 && $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[4] == 0 && $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[5] == 0 && $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[6] == 0) {?>
                                                     <td colspan="5"> No operations have been activated </td>
                                                <?php } else { ?> 
                                                    <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[3] == 0) {?>   
                                                        <td> No operations have been activated  </td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[3];?>
</td>
                                                    <?php }?>
                                                     <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[5] == 0) {?>   
                                                        <td> No operations have been activated  </td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[5];?>
</td>
                                                    <?php }?>
                                                      <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[4] == 0) {?>   
                                                        <td> No operations have been activated  </td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[4];?>
</td>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[6] == 0) {?>   
                                                        <td> No operations have been activated  </td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[6];?>
</td>
                                                    <?php }?>
                                                 <td><a href="addition.php?lang=en&act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['resultEmployeeActive1']->value[0];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=all"><button class="btn btn-sm btn-primary" type="button">Show</button></a></td>                                               
                                                <?php }?>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['resultEmployeeActive1'] = $foreach_resultEmployeeActive1_Sav;
}
?>
                                
                                </tbody>
                            </table>
			  <?php }?>
                                <br/>
                                
                                
                              

                                  
                            
                       
                                    
                                        <br/>    <br/>    <br/>    <br/>
			  </div>
				
          
                                <?php }?>
                    <!------------------------------------------------- /Order Active ------------------------------------------------------>
                    
                    <!------------------------------------------------- Order Active Show ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'techactiveshow') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>Active operations
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : <?php echo $_smarty_tpl->tpl_vars['dayen1']->value;?>
  

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : <?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Number of active operations: <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                           
                            <li class="active pull-right no-print">
                                <a href="  addition.php?lang=en&act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=pm"_><button class="btn btn-sm btn-primary" type="button"> Pm </button></a>
                            </li>
                             <li class="active pull-right no-print">
                                            <a href="addition.php?lang=en&act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=am"_><button class="btn btn-sm btn-primary" type="button">Am</button></a>
                            </li>
                              <li class="active pull-right no-print">
                                <a href="  addition.php?lang=en&act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=all"_><button class="btn btn-sm btn-primary" type="button"> All </button></a>
                            </li>
                            
                        </ol>
                            
                    
                    </div>
                </div>
                <!-- /.row -->
              
                <h3><i class="fa fa-fw fa-user-md fa-2x"></i>Technical Name  : <?php echo ucfirst($_smarty_tpl->tpl_vars['employeenamee']->value);?>
</h3>
                   <?php if ($_smarty_tpl->tpl_vars['actm']->value == 'am' || $_smarty_tpl->tpl_vars['actm']->value == 'all') {?>  
				<!-- Order Now -->
                                     <?php if ($_smarty_tpl->tpl_vars['orderNowCountA']->value == '0') {?> 
                                            <h3 class="text-center"> No activated this morning operations </h3> 
                                     <?php } else { ?>
                                         
                                              <?php if ($_smarty_tpl->tpl_vars['orderNowCountAc']->value < '1') {?>
                                                       <h1 class="text-center"> Not perform any of the operations </h1> 
                                              <?php } elseif ($_smarty_tpl->tpl_vars['orderNowCountAc']->value > '2') {?>
                                                          <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['orderNowCountAc']->value;?>
   operations this morning action  </h1> 
                                              <?php } else { ?>
                                                    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['orderNowCountAc']->value;?>
   operation this morning action    </h1> 
                                                 <?php }?>
                                                                                                 
                                                 
                                     <?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['ordershowAm']->value == null) {?>
                                        
                                <?php } else { ?>
                                      
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>Morning New</strong></td></tr>
                                    <tr class="active text-center">
                                         <td><strong>No</strong></td>
                                        <td class="no-print"><strong>Operations No</strong></td>
                                        <td class="no-print"><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="5" class="no-print"><strong> Operations</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowAm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowAm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowAm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowAm1']->value) {
$_smarty_tpl->tpl_vars['ordershowAm1']->_loop = true;
$foreach_ordershowAm1_Sav = $_smarty_tpl->tpl_vars['ordershowAm1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td class="no-print"><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
</td>
                                                <td class="no-print"><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['timeo'];?>
 <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['timing'] == 'am') {?> Am<?php } else { ?>Pm <?php }?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['nameve'];?>
</td>
                                                 <td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['service1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['service1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['service1']->value) {
$_smarty_tpl->tpl_vars['service1']->_loop = true;
$foreach_service1_Sav = $_smarty_tpl->tpl_vars['service1'];
?>
                                                     <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == $_smarty_tpl->tpl_vars['ordershowAm1']->value['idservo']) {
echo $_smarty_tpl->tpl_vars['service1']->value['nservicee'];
}?>
                                                     <?php
$_smarty_tpl->tpl_vars['service1'] = $foreach_service1_Sav;
}
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['idservo'] == 3) {?> TO 
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['area1']->value['ida'] == $_smarty_tpl->tpl_vars['ordershowAm1']->value['areatransid']) {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['area1']->value['nameae'];?>

                                                                    <?php }?>
                                                             <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['idservo'] == 4) {?> M.D : <?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['mdn'];?>
 <?php }?>
                                                     
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['phonec'];?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['phoneo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['nameae'];?>
</td>
                                                <td class="no-print">
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['process'] == 1) {?> 
                                                        <span class=" btn-sm btn-danger"> Not See</span>
                                                    <?php } else { ?>
                                                        <span class=" btn-sm btn-success"> Saw </span> 
                                                    <?php }?>
                                                </td >
                                               
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowAm1']->value['process'] == 3) {?>
                                                        <td class="no-print">
                                                         <span class=" btn-sm btn-success">Preparing  </span>
                                                           </td>
                                                            <td class="no-print"><a href="addition.php?lang=en&act=workshop&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> Work Shop</button></a></td>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['ordershowAm1']->value['process'] == 4) {?>
                                                        <td colspan="2" class="no-print"> <span class=" btn-sm btn-warning">WorkShop</span></td>
                                                      <?php } else { ?>
                                                          <td colspan="2" class="no-print">
                                                        <form action="addition.php?lang=en&act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['employeeid'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=all" method="POST">
                                                        <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >
                                                        <input type="hidden" name="idorder" value="<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="Prepare">
                                                    </form> 
                                                       </td>  
                                                        <?php }?>
                                                
                                                <td class="no-print"><a href="addition.php?lang=en&act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> Finish</button></a></td>
                                                <td class="no-print"><a href="addition.php?lang=en&act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button"> Cancel</button></a></td>
                                     </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordershowAm1'] = $foreach_ordershowAm1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                </div>
                                
                          <?php if ($_smarty_tpl->tpl_vars['ordershowAmDl']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="12"><strong>Morinig Install & Delivery</strong></td></tr>
                                    <tr class="active text-center">
                                         <td><strong>No</strong></td>
                                        <td class="no-print"><strong>Operations No</strong></td>
                                        <td class="no-print"><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Part</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="5" class="no-print"><strong> Operations</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowAmDl']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowAmDl1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowAmDl1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowAmDl1']->value) {
$_smarty_tpl->tpl_vars['ordershowAmDl1']->_loop = true;
$foreach_ordershowAmDl1_Sav = $_smarty_tpl->tpl_vars['ordershowAmDl1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td class="no-print"><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['ido'];?>
</td>
                                                <td class="no-print"><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['timodp'];?>
 <?php if ($_smarty_tpl->tpl_vars['ordershowAmDl1']->value['timingdp'] == 'am') {?> Am<?php } else { ?>Pm <?php }?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['nameve'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['poseplt'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['phonec'];?>
 <br/> <?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['phoneo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowAmDl1']->value['nameae'];?>
</td>
                                                
         
                                                
                                                <td class="no-print"><a href="addition.php?lang=en&act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button">Finish </button></a></td>
                                                <td class="no-print"><a href="addition.php?lang=en&act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowAm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">Cancel</button></a></td>
                                     </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordershowAmDl1'] = $foreach_ordershowAmDl1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?> <?php }?>
                                </div>
                                
                                   <?php if ($_smarty_tpl->tpl_vars['actm']->value == 'pm' || $_smarty_tpl->tpl_vars['actm']->value == 'all') {?>  
                                 <?php if ($_smarty_tpl->tpl_vars['orderNowCountP']->value == '0') {?> 
                                            <h1 class="text-center no-print">No activated this AfterNoon operations</h1> 
                                     <?php } else { ?>
                                         
                                              <?php if ($_smarty_tpl->tpl_vars['orderNowCountPc']->value < '1') {?>
                                                       <h1 class="text-center no-print">  Not perform any of the operations</h1> 
                                              <?php } elseif ($_smarty_tpl->tpl_vars['orderNowCountPc']->value > '2') {?>
                                                          <h1 class="text-center no-print">operations this Afternoon action    <?php echo $_smarty_tpl->tpl_vars['orderNowCountPc']->value;?>
   </h1> 
                                              <?php } else { ?>
                                                    <h1 class="text-center  no-print">     <?php echo $_smarty_tpl->tpl_vars['orderNowCountPc']->value;?>
   operation this Afternoon action</h1> 
                                                 <?php }?>
                                                                                                 
                                                 
                                     <?php }?>
                                     
   <?php if ($_smarty_tpl->tpl_vars['ordershowPm']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="13"><strong>afternoon New</strong></td></tr>
                                    <tr class="active text-center">
                                         <td><strong>No</strong></td>
                                        <td class="no-print"><strong>Operations No</strong></td>
                                        <td class="no-print"><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Service</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="5" class="no-print"><strong> Operations</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowPm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowPm1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowPm1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowPm1']->value) {
$_smarty_tpl->tpl_vars['ordershowPm1']->_loop = true;
$foreach_ordershowPm1_Sav = $_smarty_tpl->tpl_vars['ordershowPm1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td class="no-print"><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
</td>
                                                <td class="no-print"><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['timeo'];?>
 <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['timing'] == 'am') {?> Am<?php } else { ?>Pm <?php }?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['nameve'];?>
</td>
                                                 <td>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['service1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['service1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['service1']->value) {
$_smarty_tpl->tpl_vars['service1']->_loop = true;
$foreach_service1_Sav = $_smarty_tpl->tpl_vars['service1'];
?>
                                                     <?php if ($_smarty_tpl->tpl_vars['service1']->value['idserv'] == $_smarty_tpl->tpl_vars['ordershowPm1']->value['idservo']) {
echo $_smarty_tpl->tpl_vars['service1']->value['nservicee'];
}?>
                                                     <?php
$_smarty_tpl->tpl_vars['service1'] = $foreach_service1_Sav;
}
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['idservo'] == 3) {?> To 
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['area']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['area1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['area1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['area1']->value) {
$_smarty_tpl->tpl_vars['area1']->_loop = true;
$foreach_area1_Sav = $_smarty_tpl->tpl_vars['area1'];
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['area1']->value['ida'] == $_smarty_tpl->tpl_vars['ordershowPm1']->value['areatransid']) {?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['area1']->value['nameae'];?>

                                                                    <?php }?>
                                                             <?php
$_smarty_tpl->tpl_vars['area1'] = $foreach_area1_Sav;
}
?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['idservo'] == 4) {?> M.D : <?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['mdn'];?>
 <?php }?>
                                                     
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['phonec'];?>
<br/> <?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['phoneo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['nameae'];?>
</td>
                                                <td class="no-print">
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['process'] == 1) {?> 
                                                        <span class=" btn-sm btn-danger"> Not See</span>
                                                    <?php } else { ?>
                                                        <span class=" btn-sm btn-success"> Saw </span> 
                                                    <?php }?>
                                                </td>
                                               
                                                        <?php if ($_smarty_tpl->tpl_vars['ordershowPm1']->value['process'] == 3) {?>
                                                        <td class="no-print">
                                                         <span class=" btn-sm btn-success">Preparing  </span>
                                                           </td>
                                                            <td><a href="addition.php?lang=en&act=workshop&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> Work Shop</button></a></td>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['ordershowPm1']->value['process'] == 4) {?>
                                                        <td colspan="2" class="no-print"> <span class=" btn-sm btn-warning">WorkShop</span></td>
                                                      <?php } else { ?>
                                                          <td colspan="2" class="no-print">
                                                        <form action="addition.php?lang=en&act=techactiveshow&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['employeeid'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['orderactive']->value;?>
&actm=all" method="POST">
                                                        <input class="form-control" name="idu" id="idu" value="<?php echo $_smarty_tpl->tpl_vars['iduser']->value;?>
" type="hidden" >    
                                                        <input type="hidden" name="idorder" value="<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
" />
                                                        <input type="submit" class="btn btn-sm btn-primary" name="prepar" value="Prepare">
                                                    </form> 
                                                       </td>  
                                                        <?php }?>
                                                
                                                <td class="no-print"><a href="addition.php?lang=en&act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> Finish</button></a></td>
                                                <td class="no-print"><a href="addition.php?lang=en&act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPm1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button"> Cancel</button></a></td>
                                     </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordershowPm1'] = $foreach_ordershowPm1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                          
                           <?php if ($_smarty_tpl->tpl_vars['ordershowPmDl']->value == null) {?>
                                        
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="12"><strong>After Noon Install & Delivery</strong></td></tr>
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td class="no-print"><strong>Operations No</strong></td>
                                        <td class="no-print"><strong>Timing</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>Part</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td colspan="5" class="no-print"><strong> Operations</strong></td>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowPmDl']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowPmDl1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowPmDl1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowPmDl1']->value) {
$_smarty_tpl->tpl_vars['ordershowPmDl1']->_loop = true;
$foreach_ordershowPmDl1_Sav = $_smarty_tpl->tpl_vars['ordershowPmDl1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td class="no-print"><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['ido'];?>
</td>
                                                <td class="no-print"><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['timodp'];?>
 <?php if ($_smarty_tpl->tpl_vars['ordershowPmDl']->value['timingdp'] == 'am') {?> Am<?php } else { ?>Pm <?php }?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['nameve'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['poseplt'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['phonec'];?>
<br/> <?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['phoneo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['nameae'];?>
</td>
                                                
         
                                                
                                               <td class="no-print"><a href="addition.php?lang=en&act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['ido'];?>
&pro=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['process'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button">Finish </button></a></td>
                                                <td class="no-print"><a href="addition.php?lang=en&act=cancleorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowPmDl1']->value['idc'];?>
"><button class="btn btn-sm btn-danger" type="button">Cancel</button></a></td>
                                     </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordershowPmDl1'] = $foreach_ordershowPmDl1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                </div>
                                    
                                        <br/>    <br/>    <br/>    <br/>
			 
				
                                <?php }?>  <?php }?>
                    <!------------------------------------------------- /Order Active Show------------------------------------------------------>
                    
                   
                    <!------------------------------------------------- Order Runing ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderuning') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i> Running processes
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : <?php echo $_smarty_tpl->tpl_vars['dayen']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Running processes :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                             
                               
                                <?php if ($_smarty_tpl->tpl_vars['orderNowCount']->value == null) {?>
                                   <br/><br/><br/><h1 class="text-center">No workshop operations </h1><br/><br/><br/><br/><br/><br/><br/><br/>
                                <?php } else { ?>
                                         
                     <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>No</strong></td>
                                        <td><strong> Technical Name </strong></td>
                                         <td><strong>The number of operations 	</strong></td>
                                          <td><strong> operations </strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    <?php
$_from = $_smarty_tpl->tpl_vars['resultEmployeeRun']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['resultEmployeeRun1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['resultEmployeeRun1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['resultEmployeeRun1']->value) {
$_smarty_tpl->tpl_vars['resultEmployeeRun1']->_loop = true;
$foreach_resultEmployeeRun1_Sav = $_smarty_tpl->tpl_vars['resultEmployeeRun1'];
?>
                                        <tr>   
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['resultEmployeeRun1']->value[2];?>
  </td>
                                                <?php if ($_smarty_tpl->tpl_vars['resultEmployeeRun1']->value[3] == 0) {?>
                                                      <td> لا يوجد عمليات جاريه </td>
                                                   <td><button class="btn btn-sm btn-danger" type="button"><i class="fa fa-times"></i></button></a></td>
                                                <?php } else { ?> 
                                                    <td><?php echo $_smarty_tpl->tpl_vars['resultEmployeeRun1']->value[3];?>
</td>
                                                 <td><a href="addition.php?lang=en&act=orderuningashow&id=<?php echo $_smarty_tpl->tpl_vars['resultEmployeeRun1']->value[0];?>
"><button class="btn btn-sm btn-primary" type="button">Show</button></a></td>                                               
                                                <?php }?>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['resultEmployeeRun1'] = $foreach_resultEmployeeRun1_Sav;
}
?>
                                
                                </tbody>
                            </table>
			  <?php }?>
                                </div><br/>
                                
                                <?php }?>
                    <!------------------------------------------------- /Order Runing ------------------------------------------------------>
                    
                    
                        
                    <!------------------------------------------------- Order Runing Show ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderuningashow') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>Running processes
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : <?php echo $_smarty_tpl->tpl_vars['dayen']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i>   Running processes :  <?php echo $_smarty_tpl->tpl_vars['orderNowCount']->value;?>

                            </li>
                             
                        </ol>
                               <ol class="breadcrumb">
                                      <li class="active">
                                 <li class="active pull-right">
                                                <button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button> preparing
                                                <button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button> WorkShop
                                                <button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button> Not Fix It
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button> Done 
                                                <button class="btn btn-sm btn-primary"><li class="fa fa-fw fa fa fa-car"></li></button> Delivery
                                                <button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa fa-car"></li></button> Done Delivery
                            </li>
                               
                             </ol>
                    </div>
                </div>
                <!-- /.row -->
                <h3> Technical Name  : <?php echo ucfirst($_smarty_tpl->tpl_vars['employeenamee']->value);?>
</h3>
				<!-- Order Now -->
				 <div class="table-responsive">

                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun']->value == null) {?>
                                    <h1 class="text-center">No Found  Running processes    </h1>
                                <?php } else { ?>
                                         
             
			  <table class="table table-bordered table-hover table-striped text-center ">
                                <thead class="text-center">
                                    <tr class="active text-center"><td colspan="15"><strong> Running processes </strong></td></tr>
                                    <tr class="active text-center">
                                       <td><strong>No.</strong></td>
                                        <td><strong>OP No </strong></td>
                                        <td><strong>Duration</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td><strong>Brand</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>service</strong></td>
                                        <td><strong> part</strong></td>
                                        <td><strong>status</strong></td>
                                        <td colspan="4"><strong> op</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordershowRun']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordershowRun1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordershowRun1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordershowRun1']->value) {
$_smarty_tpl->tpl_vars['ordershowRun1']->_loop = true;
$foreach_ordershowRun1_Sav = $_smarty_tpl->tpl_vars['ordershowRun1'];
?>
                                        <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
  </td>
                                                <td>
                                                    <?php ob_start();
echo strtotime($_smarty_tpl->tpl_vars['ordershowRun1']->value['orderdate']);
$_tmp1=ob_get_clean();
if ((($_smarty_tpl->tpl_vars['now']->value-$_tmp1)/86400) == 0) {?>  Today  <?php } else { ?>  <?php echo sprintf("%d",(($_smarty_tpl->tpl_vars['now']->value-strtotime($_smarty_tpl->tpl_vars['ordershowRun1']->value['orderdate']))/86400));?>
 Days &nbsp; <?php }?></td>
                                                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ordershowRun1']->value['namece'], 'UTF-8');?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['phonec'];?>
</td>
                                                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ordershowRun1']->value['nameae'], 'UTF-8');?>
</td>
                                                <td>
                                                     <?php
$_from = $_smarty_tpl->tpl_vars['mark']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mark1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mark1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['mark1']->value) {
$_smarty_tpl->tpl_vars['mark1']->_loop = true;
$foreach_mark1_Sav = $_smarty_tpl->tpl_vars['mark1'];
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['idmark'] == $_smarty_tpl->tpl_vars['mark1']->value['idmark']) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['mark1']->value['namemarke'], 'UTF-8');
}?>
                                                   
                                                    <?php
$_smarty_tpl->tpl_vars['mark1'] = $foreach_mark1_Sav;
}
?>
                                                     <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['idmark'] == 0) {?>None<?php }?>
                                                      
                                                </td>
                                                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ordershowRun1']->value['nameve'], 'UTF-8');?>
</td>
                                                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ordershowRun1']->value['nservicee'], 'UTF-8');?>
</td>
                                                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ordershowRun1']->value['poseplt'], 'UTF-8');?>
</td>
                                                 <td>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 3) {?><button class="btn btn-sm btn-default"><li class="fa fa-fw fa-clock-o"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 4) {?><button class="btn btn-sm btn-warning"><li class="fa fa-fw fa-wrench"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 5) {?><button class="btn btn-sm btn-danger" ><li class="fa fa-fw fa-times"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 6) {?><button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa-thumbs-o-up"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 7) {?><button class="btn btn-sm btn-primary"><li class="fa fa-fw fa fa fa-car"></li></button><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['ordershowRun1']->value['process'] == 8) {?><button class="btn btn-sm btn-success"><li class="fa fa-fw fa fa fa-car"></li></button><?php }?>
                                                </td>
                                                <td><a href="addition.php?lang=en&act=repair&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> <i class="fa fa-fw fa-wrench"></i>  </button></a></td>
                                                <td><a href="addition.php?lang=en&act=addpart&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> Part  </button></a></td>
                                                <td><a href="addition.php?lang=en&act=delevry&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> Deliver  </button></a></td>
                                                <td><a href="addition.php?lang=en&act=finishorder&id=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['ido'];?>
&castumer=<?php echo $_smarty_tpl->tpl_vars['ordershowRun1']->value['idc'];?>
"><button class="btn btn-sm btn-primary" type="button"> Finish </button></a></td>
                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordershowRun1'] = $foreach_ordershowRun1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                   
			  </div> <br/>    <br/>    <br/>    <br/>
                                <?php }?>
                    <!------------------------------------------------- /Order Runing show ------------------------------------------------------>
		
                 <!------------------------------------------------- Order UnActive ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'orderunactive') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : <?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i>  Operations inactive  
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i>  Operations inactive   :  <?php echo $_smarty_tpl->tpl_vars['orderunactiveCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                <?php if ($_smarty_tpl->tpl_vars['orderunactive']->value == null) {?>
                                    <h1 class="text-center">No Found Operations inactive  </h1>
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>No.</strong></td>
                                        <td><strong>operation No </strong></td>
                                        <td><strong>Day</strong></td>
                                        <td><strong>Time</strong></td>
                                        <td><strong>Date</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['orderunactive']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderunactive1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderunactive1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderunactive1']->value) {
$_smarty_tpl->tpl_vars['orderunactive1']->_loop = true;
$foreach_orderunactive1_Sav = $_smarty_tpl->tpl_vars['orderunactive1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['ido'];?>
  </td>
                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'],"%A");?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['timeo'];?>
 <?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['timing'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['orderdate'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['nameve'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['nameae'];?>
</td>
                                                
                                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderunactive1'] = $foreach_orderunactive1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                <br/>

				
                        <?php }?>
		      <!------------------------------------------------- /Order UnActive ------------------------------------------------------>
                      
                        <!------------------------------------------------- Order Pend ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'penorder') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : <?php echo $_smarty_tpl->tpl_vars['dayen']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-adjust"></i> Operations Pending 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i>  Operations Pending     :  <?php echo $_smarty_tpl->tpl_vars['orderpenCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                <?php if ($_smarty_tpl->tpl_vars['orderpen']->value == null) {?>
                                    <h1 class="text-center"> No Found  Operations Pending  </h1>
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                         <td><strong>No.</strong></td>
                                        <td><strong>operation No </strong></td>
                                        <td><strong>Technical Name</strong></td>
                                        <td><strong>Day</strong></td>
                                        <td><strong>Time</strong></td>
                                        <td><strong>Date</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['orderpen']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['orderpen1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['orderpen1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['orderpen1']->value) {
$_smarty_tpl->tpl_vars['orderpen1']->_loop = true;
$foreach_orderpen1_Sav = $_smarty_tpl->tpl_vars['orderpen1'];
?>
                                        <tr>    
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['ido'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['nameme'];?>
</td>
                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderpen1']->value['orderdate'],"%A");?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['timeo'];?>
 <?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['timing'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['orderdate'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['nameve'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['orderpen1']->value['nameae'];?>
</td>
                                                
                                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['orderpen1'] = $foreach_orderpen1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                <br/>

				
                        <?php }?>
		      <!------------------------------------------------- /Order Pend ------------------------------------------------------>
                      
                      <!------------------------------------------------- Order Cancle ------------------------------------------------------>
             <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ordercancel') {?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Today : <?php echo $_smarty_tpl->tpl_vars['dayen']->value;?>
 

                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> Date  : <?php echo $_smarty_tpl->tpl_vars['todayf']->value;?>


                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-times-circle"></i> Canceled operations 
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i>  Canceled operations    :  <?php echo $_smarty_tpl->tpl_vars['ordercancleCount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                

				
                                     
                                <?php if ($_smarty_tpl->tpl_vars['ordercancle']->value == null) {?>
                                    <h1 class="text-center">No Found  Canceled operations </h1>
                                <?php } else { ?>
                                         
              <div class="table-responsive">
			  <table class="table table-bordered table-hover table-striped text-center ">

                                <thead class="text-center">
                                   
                                    <tr class="active text-center">
                                        <td><strong>No.</strong></td>
                                        <td><strong>operation No </strong></td>
                                        <td><strong>Technical Name</strong></td>
                                        <td><strong>Day</strong></td>
                                        <td><strong>Time</strong></td>
                                        <td><strong>Date</strong></td>
                                        <td><strong>Device</strong></td>
                                        <td><strong>name</strong></td>
                                        <td><strong>mobile </strong></td>
                                        <td><strong>Area</strong></td>
                                        <td><strong>Reason</strong></td>
                                        <td><strong>Nots</strong></td>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->tpl_vars['ordercancle']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ordercancle1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ordercancle1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ordercancle1']->value) {
$_smarty_tpl->tpl_vars['ordercancle1']->_loop = true;
$foreach_ordercancle1_Sav = $_smarty_tpl->tpl_vars['ordercancle1'];
?>
                                        <tr>    
                                                <td> <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
  </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['ido'];?>
  </td>
                                                <td> <?php if ($_smarty_tpl->tpl_vars['ordercancle1']->value['employeeid'] == 0) {?> None<?php } else { ?> 
                                                   <?php
$_from = $_smarty_tpl->tpl_vars['employee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['employee1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['employee1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['employee1']->value) {
$_smarty_tpl->tpl_vars['employee1']->_loop = true;
$foreach_employee1_Sav = $_smarty_tpl->tpl_vars['employee1'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['ordercancle1']->value['employeeid'] == $_smarty_tpl->tpl_vars['employee1']->value['idm']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['employee1']->value['nameme'];?>

                                                                <?php }?>
                                                         <?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?>
                                                   <?php }?>  </td>
                                                 <td>
                                                   <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'],"%A");?>

                                                </td>
                                                <td> <?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['timeo'];?>
 <?php echo $_smarty_tpl->tpl_vars['orderunactive1']->value['timing'];?>
 

                                                </td>
                                                 <td> <?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['orderdate'];?>
 </td>
                                                <td>  <?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['nameve'];?>
  </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['namece'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['phonec'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['nameae'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['namene'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ordercancle1']->value['note'];?>
</td>
                                                
                                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['ordercancle1'] = $foreach_ordercancle1_Sav;
}
?>
                                </tbody>
                            </table>
			  <?php }?>
                                <br/>

				
                        <?php }?>
		      <!------------------------------------------------- /Order Cancle ------------------------------------------------------>
                   
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Morris Charts JavaScript -->
    <?php echo '<script'; ?>
 src="js/plugins/morris/raphael.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/plugins/morris/morris-data.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
?>