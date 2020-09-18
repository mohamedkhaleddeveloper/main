<?php /* Smarty version 3.1.24, created on 2017-07-23 13:14:59
         compiled from "./templates/admin/ar/reports.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20135107465974a153cee503_44462677%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d28246769fb33b7b00e1f6036733bb2f2ffbb59' => 
    array (
      0 => './templates/admin/ar/reports.tpl',
      1 => 1500804440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20135107465974a153cee503_44462677',
  'variables' => 
  array (
    'dayar1' => 0,
    'invdate' => 0,
    'invcount' => 0,
    'creditpay' => 0,
    'k' => 0,
    'creditpay1' => 0,
    'employee' => 0,
    'employee1' => 0,
    'payment' => 0,
    'payment1' => 0,
    'inv' => 0,
    'inv1' => 0,
    'countcri' => 0,
    'totalPayment' => 0,
    'totalPayment1' => 0,
    'totalPaymentCredit' => 0,
    'totalPaymentCredit1' => 0,
    'totaleExpense' => 0,
    'totalFinal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5974a153e0c301_37956946',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5974a153e0c301_37956946')) {
function content_5974a153e0c301_37956946 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20135107465974a153cee503_44462677';
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
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-file-text"></i> الفواتير
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-down"></i> اليوم : <?php echo $_smarty_tpl->tpl_vars['dayar1']->value;?>

                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-arrow-circle-o-downt"></i> التاريخ : <?php echo $_smarty_tpl->tpl_vars['invdate']->value;?>

                            </li>
                            <li class="active">
                                <i class="fa fa-files-o"></i> عدد الفواتير : <?php echo $_smarty_tpl->tpl_vars['invcount']->value;?>

                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                
              <div class="col-lg-12">
                  
                                    <?php if ($_smarty_tpl->tpl_vars['creditpay']->value == Null) {?>
                    
                                         <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م </strong></td>
                                        <td><strong>رقم الفاتورة</strong></td>
                                        <td><strong>اسم العميل</strong></td>
                                        <td><strong> رقم التليفون</strong></td>
                                        <td><strong>  اسم الفني</strong></td>
                                        <td><strong>نوع الفاتورة </strong></td>
                                         <td><strong>السعر</strong></td>
					 <td><strong>الخصم </strong></td>
                                         <td><strong>الاجمالي</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                      <?php } else { ?>
			  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td><strong>م </strong></td>
                                        <td><strong>رقم الفاتورة</strong></td>
                                        <td><strong>اسم العميل</strong></td>
                                        <td><strong> رقم التليفون</strong></td>
                                        <td><strong>  اسم الفني</strong></td>
                                        <td><strong>نوع الفاتورة </strong></td>
                                         <td><strong>السعر</strong></td>
					 <td><strong>الخصم </strong></td>
                                         <td><strong>الاجمالي</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['creditpay']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['creditpay1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['creditpay1']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['creditpay1']->value) {
$_smarty_tpl->tpl_vars['creditpay1']->_loop = true;
$foreach_creditpay1_Sav = $_smarty_tpl->tpl_vars['creditpay1'];
?>
                                    
                                        <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['creditpay1']->value['bill'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['creditpay1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['creditpay1']->value['phonec'];?>
</td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['creditpay1']->value['employeeiddp'] == 0) {?>
                                                         <?php
$_from = $_smarty_tpl->tpl_vars['employee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['employee1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['employee1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['employee1']->value) {
$_smarty_tpl->tpl_vars['employee1']->_loop = true;
$foreach_employee1_Sav = $_smarty_tpl->tpl_vars['employee1'];
?>
                                                             <?php if ($_smarty_tpl->tpl_vars['creditpay1']->value['employeeid'] == $_smarty_tpl->tpl_vars['employee1']->value['idm']) {
echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];
}?>
                                                        <?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?>
                                                    <?php } else { ?>
                                                         <?php
$_from = $_smarty_tpl->tpl_vars['employee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['employee1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['employee1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['employee1']->value) {
$_smarty_tpl->tpl_vars['employee1']->_loop = true;
$foreach_employee1_Sav = $_smarty_tpl->tpl_vars['employee1'];
?>
                                                             <?php if ($_smarty_tpl->tpl_vars['creditpay1']->value['employeeiddp'] == $_smarty_tpl->tpl_vars['employee1']->value['idm']) {
echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];
}?>
                                                         <?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?>
                                                    <?php }?>  
                                                </td>
                                                <td>
                                                    <a href="addition.php?act=reportcridt&idcr=<?php echo $_smarty_tpl->tpl_vars['creditpay1']->value['idcr'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['creditpay1']->value['castumerid'];?>
&print=1">مسدده  </a>
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
                                                           <?php if ($_smarty_tpl->tpl_vars['creditpay1']->value['paymentcr'] == $_smarty_tpl->tpl_vars['payment1']->value['idp']) {?>                                        
                                                             <?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['creditpay1']->value['paymentcr'] == 541) {?>
                                                                شيك بنكي 
                                                           <?php }?>
                                                        <?php
$_smarty_tpl->tpl_vars['payment1'] = $foreach_payment1_Sav;
}
?>
                                                    
                                                    
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['creditpay1']->value['price'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['creditpay1']->value['discount'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['creditpay1']->value['totalc'];?>
</td>

                                        </tr>
                                <?php
$_smarty_tpl->tpl_vars['creditpay1'] = $foreach_creditpay1_Sav;
}
?>
                                
                                
			  <?php }?>
                  
                  <?php if ($_smarty_tpl->tpl_vars['inv']->value == Null) {?>
                      <h1 class="text-center">لايوجد فواتير بهذا التاريخ  </h1>
                      
                      <?php } else { ?>
                          
			
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
                                    <?php if ($_smarty_tpl->tpl_vars['inv1']->value['payment'] == 5 && $_smarty_tpl->tpl_vars['inv1']->value['totalc'] == $_smarty_tpl->tpl_vars['inv1']->value['credit']) {
} else { ?>
                                        <tr>
                                            
                                                <td><?php echo $_smarty_tpl->tpl_vars['k']->value+$_smarty_tpl->tpl_vars['countcri']->value+1;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['bill'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['nameca'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['phonec'];?>
</td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['inv1']->value['employeeiddp'] == 0) {?>
                                                         <?php
$_from = $_smarty_tpl->tpl_vars['employee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['employee1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['employee1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['employee1']->value) {
$_smarty_tpl->tpl_vars['employee1']->_loop = true;
$foreach_employee1_Sav = $_smarty_tpl->tpl_vars['employee1'];
?>
                                                             <?php if ($_smarty_tpl->tpl_vars['inv1']->value['employeeid'] == $_smarty_tpl->tpl_vars['employee1']->value['idm']) {
echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];
}?>
                                                        <?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?>
                                                    <?php } else { ?>
                                                         <?php
$_from = $_smarty_tpl->tpl_vars['employee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['employee1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['employee1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['employee1']->value) {
$_smarty_tpl->tpl_vars['employee1']->_loop = true;
$foreach_employee1_Sav = $_smarty_tpl->tpl_vars['employee1'];
?>
                                                             <?php if ($_smarty_tpl->tpl_vars['inv1']->value['employeeiddp'] == $_smarty_tpl->tpl_vars['employee1']->value['idm']) {
echo $_smarty_tpl->tpl_vars['employee1']->value['namema'];
}?>
                                                         <?php
$_smarty_tpl->tpl_vars['employee1'] = $foreach_employee1_Sav;
}
?>
                                                    <?php }?>  
                                                </td>
                                                <td>
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
                                                       <?php if ($_smarty_tpl->tpl_vars['inv1']->value['payment'] == $_smarty_tpl->tpl_vars['payment1']->value['idp']) {?>                                        
                                                       <?php echo $_smarty_tpl->tpl_vars['payment1']->value['namepa'];
}?>
                                                    <?php
$_smarty_tpl->tpl_vars['payment1'] = $foreach_payment1_Sav;
}
?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['price'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['discount'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inv1']->value['totalc'];?>
</td>

                                        </tr>
                                        <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['inv1'] = $foreach_inv1_Sav;
}
?>
                                </tbody>
                            </table>
			  
						 <hr/>
                                                  <?php }?>
                                                  
                                                 	  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td rowspan="1"><strong>الاجمالي</strong></td>
                                   
                                    
                                    <?php
$_from = $_smarty_tpl->tpl_vars['totalPayment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPayment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPayment1']->value) {
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = true;
$foreach_totalPayment1_Sav = $_smarty_tpl->tpl_vars['totalPayment1'];
?>
                                        <td><strong>
                                                <?php echo $_smarty_tpl->tpl_vars['totalPayment1']->value[1];?>

                                        </strong></td>        
                                        <?php
$_smarty_tpl->tpl_vars['totalPayment1'] = $foreach_totalPayment1_Sav;
}
?>
                                        
                                
                                
                                       
                                               
                                                
                                                  
                                        
                                                 <td rowspan="1"><strong>إجمالي المسددة </strong></td>

                                       <?php
$_from = $_smarty_tpl->tpl_vars['totalPaymentCredit']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value) {
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = true;
$foreach_totalPaymentCredit1_Sav = $_smarty_tpl->tpl_vars['totalPaymentCredit1'];
?>
                                        <td><strong>
                                                <?php echo $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[1];?>

                                        </strong></td>        
                                        <?php
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = $foreach_totalPaymentCredit1_Sav;
}
?>
                         <tr>
                               
                                        <td ><strong></strong></td>
                                             <?php
$_from = $_smarty_tpl->tpl_vars['totalPayment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPayment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPayment1']->value) {
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = true;
$foreach_totalPayment1_Sav = $_smarty_tpl->tpl_vars['totalPayment1'];
?>
                                        <td><strong>
                                                <?php if ($_smarty_tpl->tpl_vars['totalPayment1']->value[3] == null) {?> 0 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['totalPayment1']->value[3];?>
 <?php }?>
                                        </strong></td>        
                                        <?php
$_smarty_tpl->tpl_vars['totalPayment1'] = $foreach_totalPayment1_Sav;
}
?>
                                        
                                    
                                   
                                        
                                   
                               
                                
                                       
                                              <td  ><strong></strong></td> 
                                                
                                                  <?php
$_from = $_smarty_tpl->tpl_vars['totalPaymentCredit']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value) {
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = true;
$foreach_totalPaymentCredit1_Sav = $_smarty_tpl->tpl_vars['totalPaymentCredit1'];
?>
                                        <td><strong>
                                                <?php if ($_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[3] == null) {?> 0 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[3];?>
 <?php }?>
                                        </strong></td>        
                                        <?php
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = $foreach_totalPaymentCredit1_Sav;
}
?>
                                        
                                               

                                        </tr>
                               
                                </tbody>
                            </table>
                                   
                                        
                                                               
                                                 	  <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td colspan="15"><strong>الإجمال الصافي </strong></td>
                                   
                                    </tr><tr>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['totalPayment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPayment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPayment1']->value) {
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = true;
$foreach_totalPayment1_Sav = $_smarty_tpl->tpl_vars['totalPayment1'];
?>
                                        <td><strong>
                                                <?php echo $_smarty_tpl->tpl_vars['totalPayment1']->value[1];?>

                                        </strong></td>        
                                        <?php
$_smarty_tpl->tpl_vars['totalPayment1'] = $foreach_totalPayment1_Sav;
}
?>
                                        
                                         <td><strong>
                                               شيك بنكي
                                        </strong></td>   
 
                                    <tr>
                               
                                      
                                             <?php
$_from = $_smarty_tpl->tpl_vars['totalPayment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPayment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPayment1']->value) {
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = true;
$foreach_totalPayment1_Sav = $_smarty_tpl->tpl_vars['totalPayment1'];
?>
                                      
                                                 <?php
$_from = $_smarty_tpl->tpl_vars['totalPaymentCredit']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value) {
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = true;
$foreach_totalPaymentCredit1_Sav = $_smarty_tpl->tpl_vars['totalPaymentCredit1'];
?>
                                       
                                                <?php if ($_smarty_tpl->tpl_vars['totalPayment1']->value[0] == $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[0]) {?>
                                                <td><strong>
                                                        
                                                <?php echo $_smarty_tpl->tpl_vars['totalPayment1']->value[3]+$_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[3];?>
 
                                                  </strong></td>   
                                              
                                       
                                                   
                                              <?php }?>
                                           
                                        <?php
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = $foreach_totalPaymentCredit1_Sav;
}
?>
                                              <?php if ($_smarty_tpl->tpl_vars['totalPayment1']->value[0] == '5') {?>
                                                  <td><strong>
                                                         <?php echo $_smarty_tpl->tpl_vars['totalPayment1']->value[3];?>
 
                                                  </strong></td>  
                                                   
                                                    <?php }?>
                                                
                                                    
                                        
                                          
                                        <?php
$_smarty_tpl->tpl_vars['totalPayment1'] = $foreach_totalPayment1_Sav;
}
?>
                                          <?php
$_from = $_smarty_tpl->tpl_vars['totalPaymentCredit']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value) {
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = true;
$foreach_totalPaymentCredit1_Sav = $_smarty_tpl->tpl_vars['totalPaymentCredit1'];
?>
                                       
                                                <?php if ($_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[0] == '541') {?>
                                                <td><strong>
                                                        
                                                <?php if ($_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[3] == Null) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[3];
}?> 
                                                  </strong></td>   
                                              
                                       
                                                   
                                              <?php }?>
                                               <?php
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = $foreach_totalPaymentCredit1_Sav;
}
?>
                                      
                                        
                                      

                                        </tr>
                               
                                </tbody>
                            </table>
                                  
                                               
                                                <table class="table table-bordered table-hover table-striped text-center">
                                <thead class="text-center">
                                    <tr class="active text-center">
                                        <td ><strong>الإجمالي النقدي </strong></td>
                                         <td><strong> المصروفات </strong></td>
                                          <td><strong> الصافي </strong></td>
                                    </tr><tr>
                               
                                      
                                             <?php
$_from = $_smarty_tpl->tpl_vars['totalPayment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPayment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPayment1']->value) {
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = true;
$foreach_totalPayment1_Sav = $_smarty_tpl->tpl_vars['totalPayment1'];
?>
                                      
                                                 <?php
$_from = $_smarty_tpl->tpl_vars['totalPaymentCredit']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value) {
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = true;
$foreach_totalPaymentCredit1_Sav = $_smarty_tpl->tpl_vars['totalPaymentCredit1'];
?>
                                       
                                                <?php if ($_smarty_tpl->tpl_vars['totalPayment1']->value[0] == $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[0] && $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[0] == '1') {?>
                                                <td><strong>
                                                        
                                                <?php echo $_smarty_tpl->tpl_vars['totalPayment1']->value[3]+$_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[3];?>
 
                                                  </strong></td>   
                                              
                                       
                                                   
                                              <?php }?>
                                           
                                        <?php
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = $foreach_totalPaymentCredit1_Sav;
}
?>
                                                                                                  
                                        
                                          
                                        <?php
$_smarty_tpl->tpl_vars['totalPayment1'] = $foreach_totalPayment1_Sav;
}
?>
                                        
                                           <td><strong>
                                                     
                                              <?php if ($_smarty_tpl->tpl_vars['totaleExpense']->value == null) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['totaleExpense']->value;
}?>
                                                  </strong></td>                                    
                                    

                                       
                               <?php
$_from = $_smarty_tpl->tpl_vars['totalPayment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPayment1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPayment1']->value) {
$_smarty_tpl->tpl_vars['totalPayment1']->_loop = true;
$foreach_totalPayment1_Sav = $_smarty_tpl->tpl_vars['totalPayment1'];
?>
                                      
                                                 <?php
$_from = $_smarty_tpl->tpl_vars['totalPaymentCredit']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value) {
$_smarty_tpl->tpl_vars['totalPaymentCredit1']->_loop = true;
$foreach_totalPaymentCredit1_Sav = $_smarty_tpl->tpl_vars['totalPaymentCredit1'];
?>
                                       
                                                <?php if ($_smarty_tpl->tpl_vars['totalPayment1']->value[0] == $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[0] && $_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[0] == '1') {?>
                                                <td><strong>
                                                        
                                                <?php echo ($_smarty_tpl->tpl_vars['totalPayment1']->value[3]+$_smarty_tpl->tpl_vars['totalPaymentCredit1']->value[3])-$_smarty_tpl->tpl_vars['totaleExpense']->value;?>
 
                                                  </strong></td>   
                                              
                                       
                                                   
                                              <?php }?>
                                           
                                        <?php
$_smarty_tpl->tpl_vars['totalPaymentCredit1'] = $foreach_totalPaymentCredit1_Sav;
}
?>
                                                                                                  
                                        
                                          
                                        <?php
$_smarty_tpl->tpl_vars['totalPayment1'] = $foreach_totalPayment1_Sav;
}
?>
                                         </tr>
                                         <tr><td>الصافي بالحروف العربيه</td><td colspan="2">&nbsp;<?php echo $_smarty_tpl->tpl_vars['totalFinal']->value;?>
&nbsp; ريال سعودي فقط لا غير &nbsp;</td></tr>
                                </tbody>
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