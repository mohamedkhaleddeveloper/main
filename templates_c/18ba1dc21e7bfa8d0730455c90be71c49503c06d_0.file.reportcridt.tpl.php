<?php /* Smarty version 3.1.24, created on 2017-07-14 13:12:41
         compiled from "./templates/admin/ar/reportcridt.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4675038305968c349cbd7c7_43716105%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18ba1dc21e7bfa8d0730455c90be71c49503c06d' => 
    array (
      0 => './templates/admin/ar/reportcridt.tpl',
      1 => 1500037749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4675038305968c349cbd7c7_43716105',
  'variables' => 
  array (
    'credit' => 0,
    'print' => 0,
    'credit1' => 0,
    'namecastumer' => 0,
    'totalcre' => 0,
    'payment' => 0,
    'payment1' => 0,
    'invoice' => 0,
    'inv' => 0,
    'inv1' => 0,
    'invoice1' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5968c34a232282_24254137',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5968c34a232282_24254137')) {
function content_5968c34a232282_24254137 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4675038305968c349cbd7c7_43716105';
echo $_smarty_tpl->getSubTemplate ("admin/ar/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'EtagCP'), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ar/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">

            <div class="container-fluid">

			
			
                <!-- Page Heading -->
                <div class="row">
				
                                    
                  <div class="col-lg-12">
                      <table class="table">
                           <?php
$_from = $_smarty_tpl->tpl_vars['credit']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['credit1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['credit1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['credit1']->value) {
$_smarty_tpl->tpl_vars['credit1']->_loop = true;
$foreach_credit1_Sav = $_smarty_tpl->tpl_vars['credit1'];
?>
                           <?php if ($_smarty_tpl->tpl_vars['print']->value == 1) {?><br/><br/><br/><br/><br/><br/><br/><br/><br/><?php } else { ?>
                               <tr>
                            
                              <td><img src="img/logo.png"/></td>
                             <td colspan="2"> <h1 class="text-right">مؤسسة السبطين التجارية</h1></td>
                          </tr>
                          <?php }?>
                           <tr>
                             <td colspan="3">  <h1 class="text-center">سند قبض </h1></td>
                          </tr>
                         
                           <tr>
                              <td colspan="3"><button class="btn btn-lg btn-default" type="button">  #<?php echo $_smarty_tpl->tpl_vars['credit1']->value['pricecr'];?>
# ريال سعودي </button> </td>
                             
                          </tr>
                          <tr>
                              <td colspan="3">اسم العميل  /<?php echo $_smarty_tpl->tpl_vars['namecastumer']->value;?>
</td>
                              
                          </tr>
                            <tr>
                              <td colspan="3">مبلغا وقدره  / <?php if ($_smarty_tpl->tpl_vars['totalcre']->value == '0') {?>صفر<?php } else {
echo $_smarty_tpl->tpl_vars['totalcre']->value;
}?>  ريال سعودي فقط لا غير</td>
                             
                          </tr>
                           <tr>
                              <td colspan="3">طريقة الدفع  / 
                                   <?php
$_from = $_smarty_tpl->tpl_vars['payment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['payment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['payment1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['payment1']->value) {
$_smarty_tpl->tpl_vars['payment1']->_loop = true;
$foreach_payment1_Sav = $_smarty_tpl->tpl_vars['payment1'];
?>
                                       <?php if ($_smarty_tpl->tpl_vars['payment1']->value['idp'] == $_smarty_tpl->tpl_vars['credit1']->value['paymentcr']) {?> <?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>
 
                                       <?php } elseif ($_smarty_tpl->tpl_vars['credit1']->value['paymentcr'] == '541') {?>
                              <td>شيك رقم / <?php echo $_smarty_tpl->tpl_vars['credit1']->value['checkno'];?>
  -  
                               بنك  / <?php echo $_smarty_tpl->tpl_vars['credit1']->value['bankname'];?>
  -  
                                تاريخ  / <?php echo $_smarty_tpl->tpl_vars['credit1']->value['bankdate'];?>
 </td>
                              
                                       
                                       <?php }?>
                                          
                                   <?php
$_smarty_tpl->tpl_vars['payment1'] = $foreach_payment1_Sav;
}
?>
                                  </td>
                             
                          </tr>
                          
                           <tr>
                              
                               
                          </tr>
                          
                          
                          
                           
                       
                          <tr>
                             <td colspan="3"> وذلك عن دفع الفواتير التاليه</td> 
                             
                          </tr>
                            <tr>
                             <td colspan="3"> <table class="table">
                              
                                     <tr>
                                         <td>رقم الفاتورة</td>
                                         <td>رقم العملية</td>
                                         <td>المبلغ </td>
                                     </tr>
                                     <?php
$_from = $_smarty_tpl->tpl_vars['invoice']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['invoice1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['invoice1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['invoice1']->value) {
$_smarty_tpl->tpl_vars['invoice1']->_loop = true;
$foreach_invoice1_Sav = $_smarty_tpl->tpl_vars['invoice1'];
?>
                                     <tr>
                                         <td>
                                              <?php
$_from = $_smarty_tpl->tpl_vars['inv']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['inv1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['inv1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['inv1']->value) {
$_smarty_tpl->tpl_vars['inv1']->_loop = true;
$foreach_inv1_Sav = $_smarty_tpl->tpl_vars['inv1'];
?>  
                                               <?php if ($_smarty_tpl->tpl_vars['inv1']->value['idi'] == $_smarty_tpl->tpl_vars['invoice1']->value['idicre']) {?>
                                                  <?php echo $_smarty_tpl->tpl_vars['inv1']->value['bill'];?>

                                                 
                                                </td>
                                         
                                         <td>
                                           
                                              
                                                   <?php echo $_smarty_tpl->tpl_vars['inv1']->value['orderid'];?>

                                                </td>
                                               
                                                <?php }?>
                                                
                                           <?php
$_smarty_tpl->tpl_vars['inv1'] = $foreach_inv1_Sav;
}
?>
                                         <td><?php echo $_smarty_tpl->tpl_vars['invoice1']->value['amount'];?>
 </td>
                                     </tr>
                                     <?php
$_smarty_tpl->tpl_vars['invoice1'] = $foreach_invoice1_Sav;
}
?>
                                 </table></td> 
                             
                          </tr>
                          
                          <tr>
                              <td colspan="2">التاريخ / <?php echo $_smarty_tpl->tpl_vars['credit1']->value['crdate'];?>
  </td>
                                    
                              <td>  المستلم/ <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
  </td>
                              
                          </tr>
                          <?php
$_smarty_tpl->tpl_vars['credit1'] = $foreach_credit1_Sav;
}
?>
                      </table>
                                       	 			
			  </div>
				
               
                   
             
				


            </div>
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
      <?php echo '<script'; ?>
 src="js/bootstrap-datepicker.js"><?php echo '</script'; ?>
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